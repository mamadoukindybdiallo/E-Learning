<form action="/product/edit/{{$cours->id}}"
method="post">
@csrf
@method('patch')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
    <div class="form-group">
        <label for="nom">Nom du cours</label>
        <input type="text" name="nom" class="form-control" value="{{$cours->nom}}">
    </div>
    <div class="form-group">
        <label for="Format">Format du cours</label>
        <input type="text" name="Format" class="form-control" value="{{$cours->Format}}">
    </div>
    <div class="form-group">
        <label for="Format">Format du cours</label>
        <select name="Format" class="form-control">
            <option value=""> --- </option>
            <option value="video" {{$cours->matiere == 'video'? 'selected="selected"':''}}> video </option>
            <option value="audio" {{$cours->matiere == 'video'? 'selected="selected"':''}}> audio </option>
            <option value="pdf" {{$cours->matiere == 'video'? 'selected="selected"':''}}> pdf </option>
        </select>
    </div>
    <div class="form-group">
        <select name="matiere" id="matiere">
            <option value=""> --- </option>
            <option value="Analyse numerique"> Analyse numerique </option>
            <option value="Probabilite"> Probabilite </option>
            <option value="Algebre"> Algebre </option>
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Enregistrer</button>
    </div>
</form>
