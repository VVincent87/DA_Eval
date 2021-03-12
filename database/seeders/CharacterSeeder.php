<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Shepard',
                'creation_year' => 2007,
                'affiliate_comic' => 'Mass Effect',
                'cartoonist' => 'Drew Karpyshyn',
            ],
            [
                'name' => 'John 117',
                'creation_year' => 2001,
                'affiliate_comic' => 'Halo',
                'cartoonist' => 'Eric Nylund',
            ],
            [
                'name' => 'Geralt de Riv',
                'creation_year' => 2017,
                'affiliate_comic' => 'The Witcher',
                'cartoonist' => 'Piotr Kowalski',
            ],
        ]);
    }
}