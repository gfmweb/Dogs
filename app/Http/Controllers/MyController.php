<?php

namespace App\Http\Controllers;

use App\Common\ModuleContainer;
use App\Modules\TemplateStructure\Application\Interactors\Interactor;
use Illuminate\Http\Request;


class MyController extends Controller
{

    public function index(Interactor $interactor)
    {
        $interactor->handle();
    }
}
