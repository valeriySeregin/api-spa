<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'short_description' => $this->faker->text(30),
            'body' =>$this->faker->text(300),
            'creation_date' => \Carbon\Carbon::now()
                ->addDays(rand(0, 30))
                ->addMinutes(rand(0, 60 * 23))
                ->addSeconds(rand(0, 60))
        ];
    }
}
