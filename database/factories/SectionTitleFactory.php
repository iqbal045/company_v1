<?php

namespace Database\Factories;

use App\Models\SectionTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionTitleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SectionTitle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'about_title'     => 'About Us',
            'about_desc'      => $this->faker->paragraph(4),
            'service_title'   => 'Our Services',
            'service_desc'    => $this->faker->paragraph(4),
            'portfolio_title' => 'Our Portfolios',
            'portfolio_desc'  => $this->faker->paragraph(4),
            'team_title'      => 'Meet Our Teams',
            'team_desc'       => $this->faker->paragraph(4),
            'feedback_title'  => 'Our Client Says',
            'feedback_desc'   => $this->faker->paragraph(4),
            'blog_title'      => 'Tech Blog',
            'blog_desc'       => $this->faker->paragraph(4),
            'feature_title'   => 'Feature Section',
            'feature_desc'    => $this->faker->paragraph(4),
            'contact_title'   => 'Get In Touch',
            'contact_desc'    => $this->faker->paragraph(4),
        ];
    }
}
