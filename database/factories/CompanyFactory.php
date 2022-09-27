<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition()
    {
        return [
            'name'=>$this->faker->name ,
            'address'=>$this->faker->address,
            'website'=>$this->faker->domainName,
            'email'=>$this->faker->email,
        ];
    }
}
