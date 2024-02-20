<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/users.json");
        $data = json_decode($json);
        foreach ($data as $obj ) {
         User::create(array(
            'name' => $obj->name,
            'email' => $obj->email,
            'password' => $obj->password,
            'role_id' => $obj->role_id
         ));
        }
    }
}
