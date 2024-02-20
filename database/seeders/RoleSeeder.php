<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $json = File::get("database/data/roles.json");
     $data = json_decode($json);
     foreach ($data as $obj) {
      Role::create(array(
      'name' =>$obj->name
      ));
     }
    }
}
