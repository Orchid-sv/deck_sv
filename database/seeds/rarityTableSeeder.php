<?php

use Illuminate\Database\Seeder;

class rarityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rarity')->insert([
            ['rarity'=>'ブロンズ'],
            ['rarity'=>'シルバー'],
            ['rarity'=>'ゴールド'],
            ['rarity'=>'レジェンド'],
        ]);
    }
}
