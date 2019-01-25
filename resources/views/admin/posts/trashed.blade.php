@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card card-header">
            Trashed posts
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Restore</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                        <tr>
                            <td><img src="{{$post->featured}}" alt="{{$post->title}}" height="50px" width="50px"></td>
                            <td>{{$post->title}}</td>
                            <td><a href="{{ route('post.edit', ['id'=> $post->id])}}"  class="btn btn-primary btn-sm">Edit</a></td>
                            <td><a href="{{ route('post.restore', ['id'=> $post->id])}}"  class="btn btn-success btn-sm">Restore</a></td>
                            <td><a href="{{ route('post.delete', ['id'=> $post->id])}}"  class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <td>No trashed posts</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection