<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\Descuento;


/**
 * Class DescuentoController
 * @package App\Http\Controllers
 */
class DescuentoController extends Controller
{
    public function show($id){
        $data = Descuento::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = Descuento::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $Descuentos = Descuento::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        Descuento::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        Descuento::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }
}
