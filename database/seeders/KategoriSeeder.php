<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/kategories.json");
        $data = json_decode($json);
        foreach ($data as $obj ) {
         Kategori::create(array(
            'name' => $obj->name
         ));
        }
    }
}
