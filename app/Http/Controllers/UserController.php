<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario=User::orderBy('id','desc')->paginate(10);
        
        return view('admin.admin.index',['user'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("admin.admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $usuario=new User;
       $usuario->name=$request->get('name');
       $usuario->email=$request->get('email');
       $usuario->password=bcrypt($request->get('password'));
       //para mover la imagen
       if($request->hasFile("imagen")){
         //agarramos la imagen
        $imagen=$request->file("imagen");
         //renombrar la imagen
        $nombreimagen=Str::slug($request->get('name')).".".$imagen->guessExtension();
        //crear una ruta donde se guardar
        $ruta=public_path("img/user/");

        $imagen->move($ruta,$nombreimagen);
        //copy($imagen->getRealPath(),$ruta.$nombreimagen);
        $usuario->imagen=$nombreimagen;
       }

       $usuario->save();
       return Redirect::to('admin/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario=User::findOrfail($id);
        return view("admin.admin.edit",['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario=User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->update();
        return Redirect::to('admin/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario=DB::table('users')->where('id','=',$id)->delete();
        return Redirect::to('admin/admin');

    }
}
