@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create a user
        </div>
        <div class="card-body">
            <form action="{{ route('user.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection