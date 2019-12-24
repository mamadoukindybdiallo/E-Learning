<!DOCTYPE html>
<html>
<body>

<h2>The method Attribute</h2>
<p>This form will be submitted using the POST method:</p>
div>
<select name="categories_id" id="categories_id"
class="form-control">
< <option value=""></option>
@foreach($c as $key => $value)
<option value="{{$key}}" {{ $key == $cours->categories_id ?
'selected="selected"':''}}>{{$value}}</option>
@endforeach
</select>
</div>


<form action="/cours/create" method="POST">
    @csrf
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
  nom du cours:<br>
  <input type="text" name="nom">
  <br>

    <br>
  matiere :<br>

  <br><br>
      <div class="container">
  <h2>Dropdown Split Buttons</h2>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Mathematique</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
      <div class="dropdown-menu">
      <select name="Mathematique" id="Mathematique">
        <option value=""> --- </option>
        <option value="video"> Analyse numerique </option>
        <option value="audio"> Probabilite </option>
        <option value="pdf"> Algebre </option>
    </select>

    </div>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-secondary">Informatique</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
        <select name="Informatique" id="Informatique">
        <option value="">  </option>
        <option value="video"> Developpeur web </option>
        <option value="audio"> Science des donnees</option>
        <option value="pdf"> Reseaux et Telecommunications</option>
    </select>

    </div>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-success"></button>
    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
        <select name="Marketing" id="Marketing">
        <option value="">  </option>
        <option value="video"> Marketing video et mobile </option>
        <option value="audio"> Marketing sur les reseaux sociaux</option>
        <option value="pdf"> Marketing numerique</option>
    </select>

    </div>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-info">Finances et comptabilite</button>
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
        <select name="Finance et comptabilite" id="Finance et comptabilite">
        <option value="">  </option>
        <option value="video"> economie </option>
        <option value="audio"> finance</option>
        <option value="pdf">modelisations et analyses financieres </option>
    </select>

    </div>
  </div>
      </div>
    <br><br>
    Format du cours:<br>
    <select name="Format" id="Format">
        <option value=""> --- </option>
        <option value="video"> Video </option>
        <option value="audio"> Audio </option>
        <option value="pdf"> Pdf </option>
    </select>
  <br><br>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="description"></textarea>
  <input type="submit" value="Submit">
</form>

<p>After you submit, notice that, unlike the GET method, the form values is NOT visible in the address bar of the new browser tab.</p>

</body>
</html>
