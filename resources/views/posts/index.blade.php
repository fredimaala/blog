@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">New post</a>
        {{$posts->links()}}
        <table class="table table-zebra">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <div class="join">
                                <a href="{{ route('posts.show', ['post' => $post]) }}"
                                 class="btn btn-info join-item">view</a>
                                <a href="{{ route('posts.edit', ['post' => $post]) }}"
                                    class="btn btn-warning join-item">edit</a>
                                <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-error join-item" value="Delete">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
    @endsection
