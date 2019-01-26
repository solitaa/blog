@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card card-header">
            Users
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if(count($users) > 0)
                    @foreach($users as $user)
                        <tr>
                            <td><img src="{{asset($user->profile->avatar)}}" height="50px" width="50px" style="border-radius: 50%"></td>
                            <td>{{$user->name}}</td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.admin', ['id'=> $user->id])}}"  class="btn btn-primary btn-sm">Not admin</a>
                                @else
                                    <a href="{{ route('user.admin', ['id'=> $user->id])}}"  class="btn btn-primary btn-sm">Make admin</a>
                                @endif
                            </td>
                            <td>
                                @if(Auth::id() !== $user->id)
                                    <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>No users</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection