<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date'=>now()->subDay(rand(0,10))->format('d M, Y'),
            'img'=>'images/' . rand(7,10) . '.jpg',
            'link'=> fake()->sentence(10),
            'text'=> fake()->text(300)
        ];
    }
}
