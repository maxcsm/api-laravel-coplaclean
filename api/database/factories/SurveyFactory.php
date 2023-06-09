<?php

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class SurveyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Survey::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->realText(10),
            'category'=> 'questionnaire',
            'view' => rand(0, 1),
            'edited_by'=> rand(1, 10),
          //  'image' => $this->faker->image('storage_path',640,480, null, false)
        ];
    }
}
