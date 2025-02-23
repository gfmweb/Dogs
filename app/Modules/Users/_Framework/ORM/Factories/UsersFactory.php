<?php

declare(strict_types=1);

namespace App\Modules\Users\_Framework\ORM\Factories;

use App\Modules\Users\_Framework\ORM\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<User>
 */
class UsersFactory extends Factory
{
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName()
        ];
    }
}