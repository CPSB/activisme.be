<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // ['name' => ''],
            ['name' => 'Mailing actie'],
            ['name' => 'Link'],
            ['name' => 'Petitie'],
            ['name' => 'Crowdfund'],
            ['name' => 'Manifestatie']
        ];

        $table = DB::table('types');
        $table->delete();
        $table->insert($data);
    }
}
