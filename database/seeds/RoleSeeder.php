<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        Role::insert([
            [
                'name' => 'Admin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Operador',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Administrativo',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
