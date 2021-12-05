@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="category" id="category"
    placeholder="Nombre publicación" value="{{old('category', $category -> category)}}">
</div>

<div class="form-group">

<textarea class="form-control" name="description_category" id="description_category" cols="30" rows="10"
        placeholder="Contenido de la publicación">
        {{old('description_category', $category -> content_publication)}}
    </textarea>
</div>
<button type="submit" class="btn btn-success btn-sm">Aceptar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
