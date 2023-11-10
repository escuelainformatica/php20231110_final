<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Repo\LibroRepo;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function __construct(public LibroRepo $libroRepo) {
        // aqui inyectamos librorepo
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $libros=$this->libroRepo->listar();
      return view("libros.listar",['libros'=>$libros]);     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if(count($request->old())>0) {
            // fallo la validacion, asi que se deberia ejecuta lo siguiente
            $libro=new Libro($request->old());
        } else {
            $libro=new Libro();
        }
        $mensaje='';
        return view('libros.insertar',['libro'=>$libro,'mensaje'=>$mensaje]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibroRequest $request)
    {
        $libro=new Libro($request->all());
        try {
        $this->libroRepo->insertar($libro);      
        return redirect("libro/");
        } catch (\Exception $e) {
            $mensaje=$e->getMessage();
            return view('libros.insertar',['libro'=>$libro,'mensaje'=>$mensaje]);
        }
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
