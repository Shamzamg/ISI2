<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    //get the list of manga stored in the manga table.
    public function getAll(){
        # code ...
        $mangas = DB::table('manga')->select('id_manga', 'titre', 'prix', 'lib_genre', 'nom_dessinateur', 'prenom_dessinateur')
        ->join('dessinateur', 'dessinateur.id_dessinateur', '=', 'manga.id_dessinateur')
        ->join('genre', 'genre.id_genre', '=', 'manga.id_genre')
        ->get();
        return $mangas;
    }
}
