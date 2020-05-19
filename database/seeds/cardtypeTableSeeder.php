<?php

use Illuminate\Database\Seeder;

class cardtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cardtype')->insert([
            ['char_type'=>'フォロワー'],
            ['char_type'=>'アミュレット'],
            ['char_type'=>'アミュレット'],
            ['char_type'=>'スペル'],
        ]);
    }
}
