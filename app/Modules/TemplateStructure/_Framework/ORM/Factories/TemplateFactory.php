<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\_Framework\ORM\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<User>
 */
class TemplateFactory extends Factory
{
    protected $model = '';//User::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName()
        ];
    }
}