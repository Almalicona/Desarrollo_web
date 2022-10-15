<?php

namespace App\Http\Controllers;

use App\Models\libro;
use App\Models\casa_editorial;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LibroController extends Controller
{
    public function login(){
        return view('crearLibro');
    }

 public function listaLibro(){
     $libro=DB::table('libro')
         ->select('libro.*')
         ->paginate(10);

    return view('listaLibro',compact('libro'));
}

    public function formLibro(){
    return view('crearLibro');
}

    public function guardarLibro(Request $request){
    try{
        $validar=$this->validate($request,[
            'nombre'=>'required',
            'fecha_apertura'=>'required',
            'nombre_autor'=>'required',
            'numro_serie'=>'required',
            

        ]);
        libro::create([
            'nombre'=>$validar['nombre'],
            'fecha_apertura'=>$validar['fecha_apertura'],
            'nombre_autor'=>$validar['nombre_autor'],
            'numro_serie'=>$validar['numro_serie'],
           
        ]);
    }catch (QueryException $queryException){
        Log::debug($queryException->getMessage());
        return redirect('/formLibro')->with('alertaQery', 'no');
    } catch (\Exception $exception){

        Log::debug($exception->getMessage());

        return redirect('/formLibro')->with('alerta', 'si');
    }
    return redirect('/')->with('Guardado', 'Guardado');
}

public function destroy($id){
    try {
       libro::destroy($id);
        return redirect('/')->with('libroEliminado', 'Eliminado');
    }catch (\Exception $exception){
        Log::debug($exception->getMessage());
        return redirect('/')->with('alerta','si');
    }
}
public function editformLibro($id){
    
$libro=libro::findOrFail($id);

return view('editLibro', compact('libro'));
}
public function editlibro(Request $request, $id ){
$dato=request()->except((['_token','_method']));
libro::where('id','=', $id)->update($dato);
return redirect('/');
}

}