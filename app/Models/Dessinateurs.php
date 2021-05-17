<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dessinateurs extends Model
{
    use HasFactory;

    //get the list of artists stored as 'dessinateurs' in the manga table.
    public function getAll(){
        $dessinateurs = DB::table('dessinateur')->get();
        return $dessinateurs;
    }
}
