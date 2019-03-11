<form action="{{ action('ComentarioController@store')}}" method="POST" >
    {{ csrf_field() }}
    <input type="hidden" name="foto_id" value="{{ $foto->id }}">
    <input type="hidden" name="status_id" value="1">

    <div class="input-group">
        
        <textarea class="form-control" name="contenido" rows="1" placeholder="Agrega un comentario..." required>{{ old('texto') }}</textarea>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </span>    
    </div>
</form>