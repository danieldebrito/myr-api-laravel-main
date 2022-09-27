<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\ClienteUtilidad;


/**
 * Class ClienteUtilidadController
 * @package App\Http\Controllers
 */
class ClienteUtilidadController extends Controller
{
    public function show($id){
        $data = ClienteUtilidad::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = ClienteUtilidad::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $ClienteUtilidads = ClienteUtilidad::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        ClienteUtilidad::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        ClienteUtilidad::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }
}
