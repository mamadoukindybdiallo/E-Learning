<h1>Je suis le dossier product</h1>


   </table>
   <!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>
<div>
    <p><a href="/cours/create">Ajouter un cours</a></p>

</div>
<br><br>
<p><a
href="/product/edit/{id}">Editer</a>
</p>
<table>
  <tr>
    <td>#</td>
    <th>nom cours</th>
      <th>Format cours</th>
      <th>categorie cours</th>
    <th>contenu cours</th>
    <th>duree du cours</th>
    <th>description du cours</th>
      <th>Editer</th>
  </tr>

     @foreach($cours as $cour)
           <tr>
               <th>#</th>
               <th>{{$cour->nom}}</th>
               <th>{{$cour->Format}}</th>
               <th>{{$cour->matiere}}</th>
               <th>{{$cour->contenu}}</th>
               <th>{{$cour->duree}}</th>
               <th>{{$cour->description}}</th>

                <th>
           <p><a href="{{route('editer_produit',['id'=>$cour->id])}}" class="text-primary">Editer</a>
</p>
       </th>
           </tr>
       @endforeach
</table>

</body>
</html>
