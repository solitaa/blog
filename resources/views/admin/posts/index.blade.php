@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card card-header">
            Published posts
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Trash</th>
                </thead>
                <tbody>
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <tr>
                                <td><img src="{{$post->featured}}" alt="{{$post->title}}" height="50px" width="50px"></td>
                                <td>{{$post->title}}</td>
                                <td><a href="{{ route('post.edit', ['id'=> $post->id])}}"  class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{ route('post.trash', ['id'=> $post->id])}}"  class="btn btn-danger btn-sm">Trash</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No published posts</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection