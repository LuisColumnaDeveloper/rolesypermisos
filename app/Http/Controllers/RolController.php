<?php

namespace App\Http\Controllers;


use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $role = Role::create($request->all());

        //actualicen los permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)
                ->width('info', 'Rol gurdado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {   
        //dd($Role->id);
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::get();
        
        return view('roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //actualice el role
        $role->update($request->all());
        //actualicen los permisos
        $role->permissions()->sync($request->get('permissions'));
        
        return redirect()->route('roles.edit', $role->id)
        ->with('info', 'Rol actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('info', 'Eliminado correctamente');
    }

}
