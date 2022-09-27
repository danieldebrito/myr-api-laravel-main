<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\Pedido;


/**
 * Class PedidoController
 * @package App\Http\Controllers
 */
class PedidoController extends Controller
{
    public function show($id){
        $data = Pedido::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = Pedido::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $Pedido = Pedido::create($request->all());
        
        return response()->json([
            'id' => $Pedido->id,
            'idCliente' => $Pedido->idCliente,
          ], 200);
    }

    public function update(Request $request, $id){

        Pedido::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        Pedido::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }

      public function pedidosCliente($id){

            $data = Pedido::get()->where('idCliente', 'like', $id);     
    
            return response()->json($data, 200);
    }
    

}
