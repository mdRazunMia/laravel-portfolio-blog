@extends('layouts.main')

@section('title',"PortfolioBlog | Edit: Blog")

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
             <div class="card">
                <div class="card-header">{{ __('Create Blog Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('blog.update', $blog->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Post Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control  placeholder="@error('title') is-invalid @enderror" name="title" value="{{ old('title') ? old('title') : $blog->title }}" placeholder="{{ __('Post Title') }}" required autocomplete="email" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="body" class="col-md-4 col-form-label text-md-end">{{ __('Post Body') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('body') is-invalid @enderror" placeholder="{{ __('Post Body') }}" rows="10" name="body" id="body">{{ old('body') ? old('body') : $blog->body}}</textarea>
                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
             </div>
            </div>
        </div>
    </div>
@endsection
