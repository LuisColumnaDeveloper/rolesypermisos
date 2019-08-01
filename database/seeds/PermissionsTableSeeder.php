<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //Users
        Permission::create([
            'name'              =>'Navegar usuarios',
            'slug'              =>'users.index',
            'description'       =>'Lista y navega todos los usuarios del sistema'
        ]);

        Permission::create([
            'name'              =>'Ver detalle de usuario',
            'slug'              =>'users.show',
            'description'       =>'Ver en detalla cada usuario del sistema'
        ]);

        Permission::create([
            'name'              =>'Edición de usuarios',
            'slug'              =>'users.edit',
            'description'       =>'Editar cualquier dato del usuario del sistema'
        ]);
        
        Permission::create([
            'name'              =>'Eliminar usuario',
            'slug'              =>'users.destroy',
            'description'       =>'Eliminar cualquier del usuario del sistema'
        ]);

        //Roles
        Permission::create([
            'name'              =>'Navegar roles',
            'slug'              =>'roles.index',
            'description'       =>'Lista y navega todos los roles del sistema'
        ]);
        Permission::create([
            'name'              =>'Ver detalle de rol',
            'slug'              =>'roles.show',
            'description'       =>'Ver en detalla cada rol del sistema'
        ]);
        Permission::create([
            'name'              =>'Ceración de roles',
            'slug'              =>'roles.create',
            'description'       =>'Editar cualquier dato del rol del sistema'
        ]);
        Permission::create([
            'name'              =>'Edición de roles',
            'slug'              =>'roles.edit',
            'description'       =>'Editar cualquier dato del rol del sistema'
        ]);
        Permission::create([
            'name'              =>'Eliminar rol',
            'slug'              =>'roles.destroy',
            'description'       =>'Eliminar cualquier del rol del sistema'
        ]);

          //Products
          Permission::create([
            'name'              =>'Navegar productos',
            'slug'              =>'products.index',
            'description'       =>'Lista y navega todos los productos del sistema'
        ]);
        Permission::create([
            'name'              =>'Ver detalle de producto',
            'slug'              =>'products.show',
            'description'       =>'Ver en detalla cada producto del sistema'
        ]);
        Permission::create([
            'name'              =>'Ceración de productos',
            'slug'              =>'products.create',
            'description'       =>'Editar cualquier dato del producto del sistema'
        ]);
        Permission::create([
            'name'              =>'Edición de productos',
            'slug'              =>'products.edit',
            'description'       =>'Editar cualquier dato del producto del sistema'
        ]);
        Permission::create([
            'name'              =>'Eliminar producto',
            'slug'              =>'products.destroy',
            'description'       =>'Eliminar cualquier del producto del sistema'
        ]);
    }
}
