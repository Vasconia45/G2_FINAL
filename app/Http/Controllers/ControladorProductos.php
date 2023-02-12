<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Comentario;
use App\Models\Recibo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class ControladorProductos extends Controller
{
    public function mostrar_lista_de_productos(){
        $productos=Producto::all();
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $nombre_marcas=DB::table("marcas")->select("nombre")->get();
        $cantidad_marcas=Marca::withCount(["productos"])->get();
        $nombre_categorias=DB::table("categorias")->select("nombre")->get();
        $cantidad_categorias=Categoria::withCount(["productos"])->get();
        return view("vistas_producto.lista_productos", ["productos" => $productos, "categorias" => $categorias, "marcas" => $marcas, "nombre_marcas" => $nombre_marcas , "nombre_categorias" => $nombre_categorias , "cantidad_marcas" => $cantidad_marcas , "cantidad_categorias" => $cantidad_categorias]);
    }

    public function mostrar_pedido(){
        $usuario=Auth::user();
        $pedido=Pedido::where('usuario_id', $usuario->id)->first();
        return view("vistas_producto.lista_compra",["pedido" => $pedido]);
    }

    public function comprar($id,Request $request){
        $usuario=Auth::user();
        $producto=Producto::find($id);
        $pedido=Pedido::where('usuario_id', $usuario->id)->first();
        if($pedido->productos()->where('producto_id', $producto->id)->exists() == false){
            $cantidad = $request->get("cantidad");
            $pedido->productos()->attach($producto,["cantidad" => $cantidad]);
        }
        else{
            foreach ($pedido->productos as $producto_recorridos) {
                if($producto->id==$producto_recorridos->id){
                    $cantidad = $producto_recorridos->pivot->cantidad;
                    $cantidad+=$request->get("cantidad");
                    $pedido->productos()->updateExistingPivot($producto, ['cantidad' => $cantidad]);
                }  
            }
        }
        foreach($pedido->productos as $producto_recorrido){
            $pedido->total+=($producto_recorrido->precio)*($producto_recorrido->pivot->cantidad);
            $pedido->save();
        }
        return redirect("/pedido");
    }

    public function quitar_producto($id){
        $usuario=Auth::user();
        $producto=Producto::find($id);
        $pedido=Pedido::where('usuario_id', $usuario->id)->first();
        foreach ($pedido->productos as $producto_recorridos) {
            if($producto->id==$producto_recorridos->id){
                $pedido->total=$pedido->total-(($producto->precio)*($producto_recorridos->pivot->cantidad));
                $pedido->save();
            }
        }
        $pedido->productos()->detach($producto);
        return redirect("/pedido");
    }


    public function buscarProducto(Request $request){
        $texto = $request->get("texto");
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $nombre_marcas=DB::table("marcas")->select("nombre")->get();
        $cantidad_marcas=Marca::withCount(["productos"])->get();
        $nombre_categorias=DB::table("categorias")->select("nombre")->get();
        $cantidad_categorias=Categoria::withCount(["productos"])->get();
        $categoria_seleccionada = $request->get("categorias");
        $marca_seleccionada = $request->get("marcas");
        if($categoria_seleccionada != 0 && $marca_seleccionada != 0){
            $productos = Producto::where('nombre', 'LIKE', '%' . $texto . '%')->where('categoria_id', 'LIKE', $categoria_seleccionada )->where('marca_id', 'LIKE', $marca_seleccionada )->get();
            return view("vistas_producto.lista_productos", ["productos" => $productos, "categorias" => $categorias, "marcas" => $marcas , "nombre_marcas" => $nombre_marcas , "nombre_categorias" => $nombre_categorias , "cantidad_marcas" => $cantidad_marcas , "cantidad_categorias" => $cantidad_categorias]);
        } else if($marca_seleccionada != 0 && $categoria_seleccionada == 0){
            $productos = Producto::where('nombre', 'LIKE', '%' . $texto . '%')->where('marca_id', 'LIKE', $marca_seleccionada )->get();
            return view("vistas_producto.lista_productos", ["productos" => $productos, "categorias" => $categorias, "marcas" => $marcas , "nombre_marcas" => $nombre_marcas , "nombre_categorias" => $nombre_categorias , "cantidad_marcas" => $cantidad_marcas , "cantidad_categorias" => $cantidad_categorias]);
        } else if($marca_seleccionada == 0 && $categoria_seleccionada != 0){
            $productos = Producto::where('nombre', 'LIKE', '%' . $texto . '%')->where('categoria_id', 'LIKE', $categoria_seleccionada )->get();
            return view("vistas_producto.lista_productos", ["productos" => $productos, "categorias" => $categorias, "marcas" => $marcas , "nombre_marcas" => $nombre_marcas , "nombre_categorias" => $nombre_categorias , "cantidad_marcas" => $cantidad_marcas , "cantidad_categorias" => $cantidad_categorias]);
        }
        $productos = Producto::where('nombre', 'LIKE', '%' . $texto . '%')->get();
        return view("vistas_producto.lista_productos", ["productos" => $productos, "categorias" => $categorias, "marcas" => $marcas , "nombre_marcas" => $nombre_marcas , "nombre_categorias" => $nombre_categorias , "cantidad_marcas" => $cantidad_marcas , "cantidad_categorias" => $cantidad_categorias]);
    }

    public function comentar($id,Request $request){
        $usuario=Auth::user();
        $producto=Producto::find($id);
        $comentario=new Comentario();
        $comentario->texto=$request->get("comentario");
        $comentario->puntuacion=$request->get("puntuacion");
        $comentario->producto()->associate($producto);
        $comentario->usuario()->associate($usuario)->save();
        return redirect("/lista_productos");
    }

    public function finalizar_compra(){
        $usuario=Auth::user();
        $pedido=Pedido::where('usuario_id', $usuario->id)->first();
        $recibo = new Recibo();
        $recibo->total = $pedido->total;
        $recibo->pedido()->associate($pedido);
        $recibo->save();
        $pedido->total=0;
        $pedido->save();
        $pedido->productos()->detach();
        return redirect("/")->with('message','Se ha realizado su compra');
    }
}
