@extends('layout')

@section('content')

    <h1>Login</h1>

    <form action="login" method="POST">
        {{ csrf_field() }}
        <input type="email" name="email" id="" placeholder="Email">
        <input type="password" name="password" id="" placeholder="password">
        <input type="submit" value="Entrar">
    </form>
    
@endsection