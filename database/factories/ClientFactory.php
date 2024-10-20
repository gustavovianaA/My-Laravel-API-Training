<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['Individual', 'Business']);
        $name = $type == 'Individual' ? $this->faker->name() : $this->faker->company();

        return [
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->email(),
            'phone' => $this->faker->regexify('[0-9]{11}'),
            'address' => $this->faker->streetAddress(),
            'city'=> $this->faker->city(),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->regexify('[0-9]{5}-[0-9]{3}') //Brazilian Postal Code
        ];

    }

    /**
     * Create registers based on type.
     *
     * @return array
     */
    public function clientByType($type)
    {
        $name = $type === 'Individual' ? $this->faker->name() : $this->faker->company();

        return $this->state(function (array $attributes) use ($type , $name) {
            return [
                'name' => $name,
                'type' => $type,
                'email' => $this->faker->email(),
                'phone' => $this->faker->regexify('[0-9]{11}'),
                'address' => $this->faker->streetAddress(),
                'city'=> $this->faker->city(),
                'state' => $this->faker->state(),
                'postal_code' => $this->faker->regexify('[0-9]{5}-[0-9]{3}') //Brazilian Postal Code
            ];
        });

    }

    //TODO: Create a trait for validation of CEP
}
