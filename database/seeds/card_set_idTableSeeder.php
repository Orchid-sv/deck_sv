<?php

use Illuminate\Database\Seeder;

class card_set_idTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_set_id')->insert([
            [
                'card_set_id'=>'10000 ',
                'card_pack'=>"ベーシック"
            ],
            [
                'char_type'=>'10001 ',
                'card_pack'=>"ベーシック"
            ],
            [
                'char_type'=>'10002 ',
                'card_pack'=>"CLC"
            ],
            [
                'char_type'=>'10003 ',
                'card_pack'=>"DRK"
            ],
            [
                'char_type'=>'10004 ',
                'card_pack'=>"ROB"
            ],
            [
                'char_type'=>'10005 ',
                'card_pack'=>"TOG"
            ],
            [
                'char_type'=>'10006 ',
                'card_pack'=>"WLD"
            ],
            [
                'char_type'=>'10007 ',
                'card_pack'=>"SFL"
            ],
            [
                'char_type'=>'10008 ',
                'card_pack'=>"CGS"
            ],
            [
                'char_type'=>'10009 ',
                'card_pack'=>"DBN"
            ],
            [
                'char_type'=>'10010 ',
                'card_pack'=>"BOS"
            ],
            [
                'char_type'=>'10011 ',
                'card_pack'=>"OOT"
            ],
            [
                'char_type'=>'10012 ',
                'card_pack'=>"ALT"
            ],
            [
                'char_type'=>'10013 ',
                'card_pack'=>"STR"
            ],
            [
                'char_type'=>'10014 ',
                'card_pack'=>"ROG"
            ],
            [
                'char_type'=>'10015 ',
                'card_pack'=>"VEG"
            ],
            [
                'char_type'=>'10016 ',
                'card_pack'=>"UCL"
            ],
            [
                'char_type'=>'10017 ',
                'card_pack'=>"WUP"
            ]
        ]);
    }
}
