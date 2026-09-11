<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingContent extends Model
{
    protected $fillable = [
        'token',
        'title',
        'description',
        'image_path',
    ];

    public static function defaults(): self
    {
        return new self([
            'token' => 'k7m2x9qp4w8n',
            'title' => 'Subscribe for FREE to our #1 issue',
            'description' => 'By subscribing, you gain access to EXCLUSIVE content; articles, opinion pieces, latest insights, cutting-edge information from seasoned industry experts and much more. You will also be informed about crucial industry events that are poised to shape the world of pharmaceuticals and biotechnology. Join our community today!',
            'image_path' => 'subscribers/img/issue800.jpg',
        ]);
    }

    public static function current(): self
    {
        try {
            return static::query()->first() ?? static::defaults();
        } catch (\Throwable $e) {
            return static::defaults();
        }
    }

    public function imageUrl(): string
    {
        return asset($this->image_path ?: 'subscribers/img/issue800.jpg');
    }
}
