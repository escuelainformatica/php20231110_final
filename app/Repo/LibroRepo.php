<?php
namespace App\Repo;
use App\Models\Libro;
class LibroRepo {
    public function listar() {
        return  Libro::all();
    }
    public function insertar(Libro $libro) {
        $libro->save();
        //Libro::saved($libro);
    }
}