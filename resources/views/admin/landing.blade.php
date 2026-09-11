@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update subscribe page</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-muted">This updates the headline, description, and image on the public subscribe page.</p>

                    <form action="{{ route('admin.landing.update', $landing->token) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Headline</label>
                            <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $landing->title) }}" required>
                            @error('title')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="6" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $landing->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Current image</label>
                            <div>
                                <img src="{{ $landing->imageUrl() }}" alt="Current subscribe image" class="img-fluid" style="max-width: 280px;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Replace image</label>
                            <input id="image" type="file" name="image" accept="image/jpeg,image/png,image/webp" class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <a href="{{ route('admin.home') }}" class="btn btn-link">Back to subscribers</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
