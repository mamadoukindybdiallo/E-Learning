<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \App\Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('products'));  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
        $c = \App\categories::pluck('nom','id');
return view('products.create', compact('c'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
'nom'=>'required|min:5',
'matiere' => 'required|min:5',
'Format' => 'required|max:10',
'description' => 'max:1000000'
]);
$cour = new Product();
$cour->nom = $request->input('nom');
$cour->matiere = $request->input('matiere');
$cour->Format = $request->input('Format');
$cour->description = $request->input('description');
$cour->category_id = $request->input('category_id');
$cour->save();
        $cour->categories_id = $request->input('categories_id');
        $request->validate([
            'nom' => 'required',
            'Format' => 'required',
            'matiere' => 'required',
            'description' => 'required',
        ]);
        $cour = new \App\Course();
        $cour->nom = $request->input('nom');
         $cour->matiere = $request->input('matiere');
        $cour->Format = $request->input('Format');
        $cour->description = $request->input('description');

        $cour->contenu = '--';
        $cour->duree = '--';
        $cour->save();
        return redirect('/');
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $c = \App\Categorie::pluck('nom','id');
        $cours = \App\Course::find($id);//on recupere le produit
        return view('products.edit', compact('cours','c'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cours = \App\Course::find($id);
        $request->validate([
            'nom' => 'required',
            'Format' => 'required',
            'matiere' => 'required',
            'description' => 'required',

        ]);
        $cours = Course::find($id);
       if($cours){
           $cours->update([
               'nom' => $request->input('nom'),
               'Format' => $request->input('Format'),
               'matiere' => $request->input('matiere'),
               'description' => $request->input('description'),
               'categories_id' => $request->input('categories_id'),
           ]);
       }
       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function home(){
        $cours = \App\Course::all();
        return view('products.home',compact('cours'));
        $c = \App\Categories::pluck('nom','id');
return view('products.home', compact('c'));
    }

}
