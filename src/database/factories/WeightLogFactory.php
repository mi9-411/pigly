<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WeightLog;

class WeightLogFactory extends Factory
{

    protected $model = WeightLog::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+5 week'),
            'weight' => $this->faker->numberBetween(55,57),
            'calories' => $this->faker->numberBetween(300,600),
            'exercise_time' => $this->faker->time($max = '01:00:00'),
            'exercise_content' => $this->faker->text(100)
        ];
    }
}
