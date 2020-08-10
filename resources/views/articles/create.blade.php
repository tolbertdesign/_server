@extends('layouts.default')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css" />
@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

        <form method="POST" action="/articles">
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    {{-- <input class="input {{ $errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" id="title"> --}}
                    <input
                        class="input @error('title') is-danger @enderror"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title') }}"
                    >

                    {{-- @if ($errors->has('title'))
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @endif --}}

                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror

                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea
                        class="textarea @error('excerpt') is-danger @enderror"
                        name="excerpt"
                        id="excerpt"
                    >{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Body</label>

                <div class="control">
                    <textarea
                        class="textarea @error('body') is-danger @enderror"
                        name="body"
                        id="body"
                    >{{ old('body') }}</textarea>

                    @error('body')
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>

                <div class="control">
                    <button class="button is-text">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection