{!!Form::open(array('url'=>'publicacion', 'method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
    <div class="form-group">
        <div class="input-group">
            <input type="text" name="searchText" size="40" class="form-control" placeholder="Buscar..." value="{{$searchText}}">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </span>
        </div>
    </div>
</form>
{{Form::close()}}