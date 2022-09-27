<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\JgoComponentes;


/**
 * Class JgoComponentesController
 * @package App\Http\Controllers
 */
class JgoComponentesController extends Controller
{
    public function show($id){
        $data = JgoComponentes::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = JgoComponentes::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $JgoComponentes = JgoComponentes::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        JgoComponentes::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        JgoComponentes::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    function str_limit($value, $limit = 100, $end = '...'){
		if (mb_strwidth($value, 'UTF-8') <= $limit) {
				return $value;
		}
		return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
}

    public function kitComponents(Request $jgo){
        $codigo = $jgo->codigoMeyroJuego;
        $material =  $jgo->idMaterial;

        $data = JgoComponentes::get()->where('codigoMeyroJuego', 'like', $codigo)->where('idMaterial', 'like', $material); //->where('incluidoJgo', 'like', '1');    
        
        
        return response($data, 200);

    }    
}
