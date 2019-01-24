@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create new post
        </div>
        <div class="card-body">
            <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="featured">Image</label>
                    <input type="file" class="form-control-file" name="featured" id="featured">
                </div>
                <div class="form-group">
                    <label for="category">Select category</label>
                    <select name="category_id" class="form-control"  id="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection