@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card card-header">
            Tags
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Tag name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </thead>
                <tbody>
                    @if(count($tags) > 0)
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{$tag->tag}}</td>
                                <td><a href="{{ route('tag.edit', ['id'=> $tag->id])}}"  class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{ route('tag.delete', ['id'=> $tag->id])}}"  class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No tags</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection