<?php

namespace App\Http\Controllers\Administracion;

use \Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehiculo;
use App\User;
use App\Cuota;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\Environment\Console;
use Validator;

class CuotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar(Request $request)
    {  
        $x = $request->all();
        if(request()->ajax())
        { 
            $fecha= Cuota::with('users')
            ->where('fecha', $x)
            ->get();
//            $data= Cuota::all();
            return datatables()->of($fecha)
            ->addColumn('pago','Snnipets.selectpago')
            ->addColumn('monto','Snnipets.inputmonto')
            ->rawColumns(['pago','monto'])
            ->toJson();
//            return response()->json(['data'=>$fecha]);
        }
    }
    public function consultar(Request $request)
    {  
        $fecha1=$request->get('fecha1');
        Log::info($fecha1);        
        $fecha2=$request->get('fecha2');
        Log::info($fecha2);        
        $user=$request->get('user');
        Log::info($user);        
        if(request()->ajax())
        { 
            $fecha= Cuota::with('users')
            ->Fecha1($fecha1)
            ->Fecha2($fecha2)
            ->User($user)
            ->get();
            Log::info($fecha);
//            $data= Cuota::all();
            return datatables()->of($fecha)
            ->addColumn('pago','Snnipets.selectpago')
            ->addColumn('monto','Snnipets.inputmonto')
            ->rawColumns(['pago','monto'])
            ->toJson();
//            return response()->json(['data'=>$fecha]);
        }
    }
    public function index()
    {
        $users = User::select('id','nombres','apellidos')->get();
        //return response()->json(['data'=> $users]);
        Log::info($users);
        return view('Admin.Cuotas.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $params_array = $request->myRows; 
        foreach ($params_array AS $param => $paramdata){
            /* Cuota::where('id', $paramdata['ID'])
            ->update(['pago'=>$paramdata['Pago'],'monto'=>$paramdata['Monto']]); */             
            $datos = Cuota::find($paramdata['ID']);
            $datos->monto = $paramdata['Monto'];
            $datos->pago = $paramdata['Pago'];
            $datos->save();
        } 
        return response()->json(['data'=> 'Datos Agregados exitosamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}