<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pets = [
            "Max", "Bella", "Charlie", "Luna", "Rocky", "Lucy", "Cooper", "Milo", "Daisy", "Buddy",
            "Bailey", "Lola", "Toby", "Sadie", "Duke", "Maggie", "Bear", "Chloe", "Tucker", "Stella",
            "Jack", "Zoey", "Oliver", "Penny", "Bentley", "Roxy", "Zeus", "Coco", "Murphy", "Gracie",
            "Leo", "Nala", "Jax", "Ruby", "Winston", "Rosie", "Finn", "Lilly", "Moose", "Mia",
            "Sam", "Abby", "Ranger", "Sasha", "Louie", "Emma", "Boomer", "Ellie", "Diesel", "Ginger",
            "Henry", "Loki", "George", "Hazel", "Buster", "Pepper", "Otis", "Annie", "Marley", "Belle",
            "Ollie", "Harley", "Scout", "Willow", "Apollo", "Izzy", "Beau", "Lexi", "Simba", "Maddie",
            "Ace", "Millie", "Thor", "Holly", "Shadow", "Callie", "Tank", "Honey", "Bruno", "Dixie",
            "Kobe", "Lulu", "Rusty", "Piper", "Cash", "Sandy", "Jackson", "Fiona", "Frankie", "Princess",
            "Rudy", "Cleo", "Romeo", "Angel", "Blue", "Raven", "Zeke", "Trixie", "Chance", "Josie",
            "Archie", "Cookie", "Remy", "Olive", "Benny", "Nova", "Chico", "Maya", "Chester", "Sally",
            "Hunter", "Nina", "Porter", "Baby", "Kylo", "Athena", "Rocco", "Bonnie", "Copper", "Pearl",
            "Gizmo", "Dolly", "Rufus", "Mocha", "Jake", "Missy", "King", "Nikki", "Lucky", "Pumpkin",
            "Diesel", "Pixie", "Tank", "Heidi", "Sammy", "Toffee", "Benji", "Cupcake", "Hank", "Zelda",
            "Oscar", "Winnie", "Peanut", "Mittens", "Andy", "Snowy", "Violet", "Ash", "Snickers", "Blaze",
            "Bambi", "Sky", "Junior", "Fudge", "Cosmo", "Peaches", "Mickey", "Riley", "Teddy", "Tinker",
            "Goofy", "Marshy", "Smokey", "Dusty", "Moe", "Socks", "Yuki", "Cloud", "Bolt", "Juno",
            "Shadow", "Freckles", "Waffles", "Jazz", "Mango", "Hershey", "Fluffy", "Tango", "Casper", "Maple",
            "Churro", "Nacho", "Toast", "Pickle", "Doodle", "Kira", "Ziggy", "Basil", "Oreo", "Miso"
        ];
        return [
            'name'        => $pets[array_rand($pets)].fake()->numerify('###'),
            'kind'        => fake()->randomElement(['Dog', 'Dog', 'Dog', 'Cat', 'Cat', 'Bird', 'Mouse', 'Fish', 'Pig']),
            'weight'      => fake()->numberBetween(1, 80),
            'age'         => fake()->numberBetween(2, true),
            'breed'       => fake()->colorName(),
            'location'    => fake()->city,
            'description' => fake()->sentence(25),
            'created_at'  => now()
        ];
    }
}
