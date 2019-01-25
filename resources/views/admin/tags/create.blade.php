@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create new tag
        </div>
        <div class="card-body">
            <form action="{{ route('tag.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="tag">tag</label>
                    <input type="text" class="form-control" name="tag">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection