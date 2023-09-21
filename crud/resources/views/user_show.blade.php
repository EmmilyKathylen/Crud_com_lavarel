@extends('master')

@section('content')


<h2>User - {{ $user->firstName}}</h2>

<form action="{{ route('users.destroy',['user' => $user->id]) }}" method="post">
    @csrf {{-- cross site request forgery --}}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar</button>

</form>

@endsection

