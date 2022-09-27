<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\Pedidoitem;


/**
 * Class PedidoitemController
 * @package App\Http\Controllers
 */
class PedidoitemController extends Controller
{
    public function show($id){
        $data = Pedidoitem::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = Pedidoitem::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $Pedidoitems = Pedidoitem::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        Pedidoitem::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        Pedidoitem::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    public function pedidositemscliente($id){
        $data = Pedidoitem::get()->where('idCliente', 'like', $id)->where('idPedido', 'like', '-1');     
        return response()->json($data, 200);
    }

    
    public function pedidositemsclienteUpdateIdPedido(Request $request){

        $data = Pedidoitem::where('idCliente', '=', $request->idCliente)->where('idPedido', '=', '-1')->update(['idPedido' => $request->id]);

        // ItemTable::where('item_type_id', '=', 1)->update(['color' => 'black']);
        
        return response()->json([
            $request->id,
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    
}
