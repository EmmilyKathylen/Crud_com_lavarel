@extends('master')

@section('content')

<h2>Criar</h2>

@if (session()->has('message'))
 {{ session()->get('message') }}

<form action=" {{ router('users.store')}}" method="post">
    @csrf
    <input type="text" name="firstName" placeholder="seu primeiro nome" >
    <input type="text" name="lastName" placeholder=" seu sobrenome" >
    <input type="text" name="email" placeholder="seu email" >
    <input type="text" name="password" placeholder="sua senha" >
    <button type="submit">Criar</button>

 </form>


@endsection