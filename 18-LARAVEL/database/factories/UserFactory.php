<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement($array = array ('Female', 'Male'));
        $name   = ($gender == "Female") ? $name = fake()->firstNameFemale()
                                        : $name = fake()->firstNameMale(); 
        $lastName = fake()->lastName();

        $url = "https://api.dicebear.com/7.x/adventurer/svg?seed=$name&gender=$gender" . ".svg";
        $fileName = $name . '_' . $lastName . '.svg';
        $destino = public_path("images/$fileName");
        copy($url, $destino);

        $email = strtolower($name).'_'.strtolower($lastName).fake()->numerify('##').'@example.com';

        return [
            'document'          => fake()->numerify('105#######'),
            'fullname'          => $name . ' ' . $lastName,
            'gender'            => $gender,
            'birthdate'         => fake()->dateTimeBetween($startDate = '-48 years', $endDate = '-18 years', $timezone = null),
            'phone'             => "(+57) - ".fake()->numerify('31########'),
            'photo'             => "$fileName", 
            'email'             => $email,
            'email_verified_at' => now(),
            'password'          => static::$password ??= Hash::make('12345'),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
