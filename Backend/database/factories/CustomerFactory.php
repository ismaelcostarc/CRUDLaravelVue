<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'medical_record' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'cel' => $this->faker->phoneNumber,
            'zipcode' => $this->faker->postcode,
            'address' => $this->faker->streetAddress,
            'complement' => $this->faker->secondaryAddress,
            'address_number' => $this->faker->buildingNumber,
            'district' => $this->faker->word,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'birth' => $this->faker->date(),
            'age' => $this->faker->numberBetween(1,100),
            'gender' => $this->faker->randomElement(['Masculino', 'Feminino', 'Não declarar']),
            'rg' => $this->faker->randomNumber(),
            'organ_rg' => 'SSP',
            'cpf' => $this->faker->randomNumber()
        ];
    }
}
