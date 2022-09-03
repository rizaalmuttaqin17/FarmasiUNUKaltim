<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
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
            'name' => $this->faker->word,
        'email' => $this->faker->word,
        'email_verified_at' => $this->faker->date('Y-m-d H:i:s'),
        'password' => $this->faker->word,
        'photo' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'agama' => $this->faker->word,
        'jenis_kelamin' => $this->faker->word,
        'tempat_lahir' => $this->faker->word,
        'tanggal_lahir' => $this->faker->word,
        'telepon' => $this->faker->word,
        'alamat' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
