@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create new category
        </div>
        <div class="card-body">
            <form action="{{ route('category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection