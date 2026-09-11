<?php

namespace App\Http\Controllers;

use App\Models\LandingContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class LandingContentController extends Controller
{
    public function edit(string $token): View|RedirectResponse
    {
        if ($redirect = $this->ensureAdmin()) {
            return $redirect;
        }

        $landing = LandingContent::current();

        if ($landing->token !== $token) {
            abort(404);
        }

        return view('admin.landing', compact('landing'));
    }

    public function update(Request $request, string $token): RedirectResponse
    {
        if ($redirect = $this->ensureAdmin()) {
            return $redirect;
        }

        $landing = LandingContent::query()->where('token', $token)->firstOrFail();

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:5000'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $landing->title = $validated['title'];
        $landing->description = $validated['description'];

        if ($request->hasFile('image')) {
            $directory = public_path('subscribers/img/campaign');
            File::ensureDirectoryExists($directory);

            $filename = 'issue-'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($directory, $filename);

            if (str_starts_with($landing->image_path, 'subscribers/img/campaign/') && File::exists(public_path($landing->image_path))) {
                File::delete(public_path($landing->image_path));
            }

            $landing->image_path = 'subscribers/img/campaign/'.$filename;
        }

        $landing->save();

        return redirect()
            ->route('admin.landing.edit', $landing->token)
            ->with('status', 'Subscribe page title, text, and image have been updated.');
    }

    private function ensureAdmin(): ?RedirectResponse
    {
        if (! auth()->check()) {
            session()->put('url.intended', url()->current());

            return redirect()
                ->route('manual-login')
                ->with('error', 'Log in as an admin to update the subscribe page.');
        }

        if ((int) auth()->user()->getRawOriginal('type') !== 1) {
            abort(403, 'You do not have permission to update this page.');
        }

        return null;
    }
}
