
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class ="table">
                        <thead>
                            <th> ID </th>
                            <th> name </th>
                            <th> Email </th>
                            <th> Created </th>
                        </thead>
                        <tbody>
                        @foreach ($user as $user)
                            <tr>
                                <td> {{$user ->id}} </td>
                                <td> {{$user ->name}} </td>
                                <td> {{$user ->email}} </td>
                                <td> {{$user ->created_at->diffforHumans()}} </td>
                                <td>
                                        <a class="btn btn-primary" href="/user/{{ $user->id}}">Show</a>
                                        <a class="btn btn-success" href="/user/{{ $user->id}}/edit">Edit</a>
                                        <a class="btn btn-danger" href="/user/{{ $user->id}}/delete">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            <tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
