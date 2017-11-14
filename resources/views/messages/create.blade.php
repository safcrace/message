@extends('layout')

@section('content')
    <h1>Contactos</h1>
    <h2>Escribeme</h2>

    @if( session()->has('info') )
        <h3> {{ session('info') }} </h3>      
    @else
        <form action="{{ route('mensajes.store') }}" method="POST">
            {{ csrf_field() }}
            <p><label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
            {!! $errors->first('nombre', '<span class="error">:message</span>')!!}</p>
            <p><label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
            {!! $errors->first('email', '<span class="error">:message</span>')!!}</p>
            <p><label for="mensaje">Mensaje</label>            
            <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="10">{{ old('mensaje') }}</textarea>
            {!! $errors->first('mensaje', '<span class="error">:message</span>')!!}</p>
            <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
    @endif
    
@endsection