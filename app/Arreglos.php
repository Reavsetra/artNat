<?php
 
namespace arteNatural;

use Illuminate\Database\Eloquent\Model;

class Arreglos extends Model
{
    //
    public static function ArrList()
    {
        $path = public_path();
        $json = file_get_contents($path.'/js/arreglos.json');
        $data = json_decode($json);
        
        return $data->Arreglos;
    }
}
