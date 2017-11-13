@extends('layout')

@section('content')
    <h1>Editar Mensaje</h1>
    <form action="{{ route('mensajes.update', $message->id) }}" method="POST">
            {{ method_field('PUT')}}
            {{ csrf_field() }}
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ $message->nombre }}">
            {!! $errors->first('nombre', '<span class="error">:message</span>')!!}
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $message->email }}">
            {!! $errors->first('email', '<span class="error">:message</span>')!!}
            <label for="mensaje">Mensaje</label>
            <label for="email">Email</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10">{{ $message->mensaje }}</textarea>
            {!! $errors->first('mensaje', '<span class="error">:message</span>')!!}
            <input type="submit" value="Enviar">
    </form>
   
    
@endsection