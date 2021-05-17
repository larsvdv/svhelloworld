<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => Str::random(10).'@hz.nl',
            'address' => ucwords($this->faker->word).' '.rand(1, 999),
            'zip_code' => '4321 AB',
            'city' => $this->faker->city,
            'password' => bcrypt(Str::random(10)),
            'activated' => true,
            'verified' => true,
        ];
    }

    public function admin()
    {
        $user = $factory->raw(User::class);
        return array_merge($user, [
            'account_type' => 'admin',
        ]);
    }
}
