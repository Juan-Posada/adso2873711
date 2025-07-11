<?php

namespace Database\Seeders;
use App\Models\Pet;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new Pet;
        $pet->name  = 'Musha';
        $pet->kind  = 'Cat';
        $pet->weight= 1.5;
        $pet->age   = 5;
        $pet->breed = 'Native';
        $pet->location = 'New York';
        $pet->description = 'Is a white and beautiful cat';
        $pet->save();

        $pet = new Pet;
        $pet->name  = 'Nemo';
        $pet->kind  = 'Fish';
        $pet->weight= 0.2;
        $pet->age   = 1;
        $pet->breed = 'Clown Fish';
        $pet->location = 'Miami';
        $pet->description = 'Nemo is simply a fish';
        $pet->save();

        $pet = new Pet;
        $pet->name  = 'Porki';
        $pet->kind  = 'Pig';
        $pet->weight= 15.8;
        $pet->age   = 2;
        $pet->breed = 'Mini Pig';
        $pet->location = 'Washington D.C';
        $pet->description = 'Is a big and fat, but beauty animal';
        $pet->save();

        $pet = new Pet;
        $pet->name  = 'Adolf';
        $pet->kind  = 'Dog';
        $pet->weight= 8.8;
        $pet->age   = 8;
        $pet->breed = 'German Sheperd';
        $pet->location = 'Oklahoma';
        $pet->description = 'That name isn´t a description of it';
        $pet->save();


    }
}
