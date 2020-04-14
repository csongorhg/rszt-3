@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')

        <div class="row">
            <div class="com-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-form-label text-md-right">{{ __('Description') }}</label>

                    <input id="description"
                           type="text"
                           class="form-control
                           @error('description') is-invalid @enderror"
                           name="description"
                           value="{{ old('description') ?? $user->profile->description}}"
                           required autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-form-label text-md-right">{{ __('Url') }}</label>

                    <input id="url"
                           type="text"
                           class="form-control
                           @error('url') is-invalid @enderror"
                           name="url"
                           value="{{ old('url') ?? $user->profile->url}}"
                           autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-form-label text-md-right">{{ __('Profile Image') }}</label>

                    <input id="image"
                           type="file"
                           class="form-control-file
                           @error('image') is-invalid @enderror"
                           name="image"
                           value="{{ old('image') ?? $user->profile->image}}"
                           autocomplete="image" autofocus>

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
