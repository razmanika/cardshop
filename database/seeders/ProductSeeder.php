<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            'name'=>'FLEXIBLE',
            'price'=>'24',
            'category'=> 'cardistry',
            'description' => 'This is a most popular deck of card which can use for magic, cardisty and play',
            'gallery'=>'https://www.playingcards.ch/3890-large_default/tccpc-flexible-black-playing-cards.jpg'
        ],
        [
            'name'=>'MEMENTO MORI',
            'price'=>'49',
            'category'=> 'magic',
            'description' => 'This is a most popular deck of card which can use for magic, cardisty and play',
            'gallery'=>'https://i.pinimg.com/originals/8f/58/7d/8f587de1ce181a5997ef11ba08344ce1.jpg'
        ],
        [
            'name'=>'KNIGHTS Gold',
            'price'=>'50',
            'category'=> 'magic',
            'description' => 'This is a most popular deck of card which can use for magic, cardisty and play',
            'gallery'=>'https://jpgamesltd.co.uk/image/catalog/knights_PlayingCards7.jpg'
        ]]);
    }
}
