<?php
namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id'     => Book::factory(),
            'content'     => fake()->paragraph(),
            'page_number' => fake()->numberBetween(1, 500),
            'start_index' => fake()->numberBetween(0, 1000),
            'end_index'   => fake()->numberBetween(1001, 2000),
        ];
    }
}
