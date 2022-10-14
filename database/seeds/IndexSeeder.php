<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $superAdmin = Role::create([
            'name' => 'Super Admin',
        ]);

        $admin = Role::create([
            'name' => 'Admin',
        ]);

        $permission = Permission::create([
            'name' => 'see_category',
        ]);

        $admin->givePermissionTo($permission);

        $permission = Permission::create([
            'name' => 'create_category',
        ]);

        $admin->givePermissionTo($permission);

        $permission = Permission::create([
            'name' => 'edit_category',
        ]);

        $admin->givePermissionTo($permission);

        $permission = Permission::create([
            'name' => 'delete_category',
        ]);

        $admin->givePermissionTo($permission);

        $data   = [
            'name'      => 'Admin Berita',
            'email'     => 'super@mail.com',
            'password'  => Hash::make('12345678')
        ];

        $user = User::create($data);

        $user->syncRoles('Super Admin');

        $data   = [
            'name'      => $faker->name,
            'email'     => 'admin@mail.com',
            'password'  => Hash::make('12345678')
        ];

        $user = User::create($data);

        $user->syncRoles('Admin');
    }
}
