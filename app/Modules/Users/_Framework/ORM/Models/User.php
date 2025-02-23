<?php

declare(strict_types=1);

namespace App\Modules\Users\_Framework\ORM\Models;

use App\Modules\Users\_Framework\ORM\Factories\UsersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    /** @see HasFactory<UsersFactory> */
    use HasFactory, Notifiable;

    protected static function newFactory()
    {
        return UsersFactory::new();
    }
}