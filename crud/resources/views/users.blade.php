@extends('master')

@section('content')

<a href=" {{ route('users.create) }}">Create</a>

<hr>

<h2>Users</h2>

<ul>
    @foreach ($users as $user)
    <li>{ $user-> firstName} | <a href="{{ route('users.edit',['user' => $user->id]) }}">Editar</a> | <a href="">Delete</a> 
    | <a href="{{ route('users.show',['user' => $user->id]) }}">Show</a></li>
    @endforeach</li>
</ul>

@endsection