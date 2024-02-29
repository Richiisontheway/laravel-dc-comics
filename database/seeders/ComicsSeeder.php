<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics_data = config('comics');
        

        foreach ($comics_data as $index => $single_comics) {
            $comic = new Comic();
            $comic->title = $single_comics['title'];
            $comic->description = $single_comics['description'];
            $comic->thumb = $single_comics['thumb'];
            $replacePrice = str_replace('$','',$single_comics['price']);
            $comic->price = $replacePrice;
            $comic->series = $single_comics['series'];
            $comic->sale_date = $single_comics['sale_date'];
            $comic->type = $single_comics['type'];
            $comic->artist = implode($single_comics['artists']);
            $comic->writers = implode($single_comics['writers']);
            $comic->save();

        }
    }
}
