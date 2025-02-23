<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\Common\ORM\Models;

use App\Modules\TemplateStructure\Common\ORM\Factories\TemplateFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TemplateModel extends Model
{
    /** @see HasFactory<TemplateFactory> */
    use HasFactory, Notifiable;

    protected static function newFactory()
    {
        return TemplateFactory::new();
    }
}