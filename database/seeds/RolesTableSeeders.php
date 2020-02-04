<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permet de supprimer les seed eistants
        //a fixer
       // Role::truncate();

        Role::create([ 'name'=> 'admin' ]);
        Role::create([ 'name'=> 'auteur' ]);
        Role::create([ 'name'=> 'utilisateur' ]);
    }
}
