<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartoonistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cartoonists')->insert([
            [
                'name' => 'Drew Karpyshyn',
                'birth_year' => 1971,
                'nationality' => 'Canada'
            ],
            [
                'name' => 'Eric Nylund',
                'birth_year' => 1964,
                'nationality' => 'USA'
            ],
            [
                'name' => 'Piotr Kowalski',
                'birth_year' => 1973,
                'nationality' => 'Pologne'
            ],
        ]);
    }
}
