@extends('partials.layout')
@section('title', 'New post')
@section('content')
    <div class="container mx-auto">
        <form action="{{route('posts.update', ['post'=> $post])}}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text-alt">Title</span>
                </div>
                <input type="text" name="title" placeholder="Title" class="input input-bordered w-full max-w-xs" value="{{old('title') ?? $post->title}}" />
                @error('title')
                <div class="label">
      <span class="label-text-alt text-error ">{{$message}}</span>
    </div>
                @enderror
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text"></span>

                </div>
                <textarea name="body" class="textarea textarea-bordered h-24" placeholder="Content here...">{{old('body')  ?? $post->title}}</textarea>
                @error('body')


                <div class="label">
      <span class="label-text-alt text-error">{{$message}}</span>

    </div>
    @enderror
            </label>
            <input type="submit" value="Submit" class="btn btn-primary ">
        </form>
    </div>
@endsection
