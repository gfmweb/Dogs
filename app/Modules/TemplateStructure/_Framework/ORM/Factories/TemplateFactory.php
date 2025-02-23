<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\Common\ORM\Factories;

use App\Modules\TemplateStructure\Common\ORM\Models\TemplateModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TemplateModel>
 */
class TemplateFactory extends Factory
{
    protected $model = TemplateModel::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName()
        ];
    }
}