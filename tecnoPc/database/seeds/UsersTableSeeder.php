<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $adminRole = Role::where('name', 'Admin')->first();
      $autorRole = Role::where('name', 'Moderador')->first();
      $userRole = Role::where('name', 'Usuario')->first();

      $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin')
      ]);

      $autor = User::create([
        'name' => 'Moderador',
        'email' => 'moderador@moderador.com',
        'password' => bcrypt('moderador')
      ]);

      $user = User::create([
        'name' => 'Usuario',
        'email' => 'user@user.com',
        'password' => bcrypt('user')
      ]);

      $admin->roles()->attach($adminRole);
      $autor->roles()->attach($autorRole);
      $user->roles()->attach($userRole);

      factory(App\User::class, 50)->create();
    }
}
