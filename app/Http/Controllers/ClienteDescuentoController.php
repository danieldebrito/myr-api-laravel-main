<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\ClienteDescuento;


/**
 * Class ClienteDescuentoController
 * @package App\Http\Controllers
 */
class ClienteDescuentoController extends Controller
{
    public function show($id){
        $data = ClienteDescuento::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = ClienteDescuento::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $ClienteDescuentos = ClienteDescuento::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        ClienteDescuento::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        ClienteDescuento::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }
}
