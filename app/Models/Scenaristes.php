<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenaristes extends Model
{
    use HasFactory;

    //get the list of scriptwriters stored as 'scenaristes' in the scenariste table.
    public function getAll(){
        $scenaristes = DB::table('scenariste')->get();
        return $scenaristes;
    }
}
