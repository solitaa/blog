@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card card-header">
            Categories
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Category name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </thead>
                <tbody>
                    @if(count($categories) > 0)
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td><a href="{{ route('category.edit', ['id'=> $category->id])}}"  class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{ route('category.delete', ['id'=> $category->id])}}"  class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No categories</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection