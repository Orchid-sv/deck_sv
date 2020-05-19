<?php

use Illuminate\Database\Seeder;
use App\ClassTable;

class classTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassTable::insert([
            ['class'=>'エルフ'],
            ['class'=>'ロイヤル'],
            ['class'=>'ウィッチ'],
            ['class'=>'ドラゴン'],
            ['class'=>'ネクロマンサー'],
            ['class'=>'ヴァンパイア'],
            ['class'=>'ビジョップ'],
            ['class'=>'ネメシス'],
            ['class'=>'ニュートラル']
        ]);
    }
}
