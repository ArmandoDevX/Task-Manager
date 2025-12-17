<?php

namespace Database\Seeders;

use App\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

            $perms = [
                [
                    'name' => 'criar_tarefa',
                ],
                [
                    'name' => 'deletar_tarefa',
                ],
                [
                    'name' => 'editar_tarefa',
                ]
                ];

        foreach($perms as $perm){

            Permission::create($perm);
        }



    }
}
