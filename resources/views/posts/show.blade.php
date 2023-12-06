@extends('partials.layout')
@section('title', 'Show post')
@section('content')
    <div class="container mx-auto ">
        <div class="form-control">
            <label class="label">
                <span class="label-text">Id</span>
            </label>
            <input type="text" placeholder="Id" class="input input-bordered" value="{{$post->id}}" readonly/>
        <div class="form-control">
            <label class="label">
                <span class="label-text">Title</span>
            </label>
            <input type="text" placeholder="Title" class="input input-bordered" value="{{$post->title}}" readonly/>
        </div>
        <div class="form-control">
            <label class="label">
                <span class="label-text">Body</span>
            </label>
            <textarea class="textarea textarea-bordered" placeholder="Body" readonly>{{$post->body}}</textarea>
        </div>




        <h1>Created</h1>
        <span name="created_at" >{{$post->created_at}}</span>

        <h1>Updated</h1>
        <span name="updated_at" >{{$post->updated_at}}</span>

    <div class="container mx-auto">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
