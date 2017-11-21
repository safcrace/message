{{ csrf_field() }}

@if($showFields)
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $message->nombre or old('nombre')}}">
    {!! $errors->first('nombre', '<span class="error">:message</span>')!!}
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $message->email or old('email') }}">
    {!! $errors->first('email', '<span class="error">:message</span>')!!}
@endif
<label for="mensaje">Mensaje</label>
<label for="email">Email</label>
<textarea name="mensaje" id="mensaje" cols="30" rows="10">{{ $message->mensaje }}</textarea>
{!! $errors->first('mensaje', '<span class="error">:message</span>')!!}

<input type="submit" value="Enviar">

