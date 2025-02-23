<?php

namespace App\Http\Controllers;

use App\Common\ModuleContainer;
use Illuminate\Http\Request;


class MyController extends Controller
{
    public function __construct(private ModuleContainer $container)
    {

    }
    public function index()
    {
        $usersModule = $this->container->getModule('template');
        dump($usersModule);
        $usersContainer = $usersModule->getContainer();
        dump($usersContainer);
        dump($usersContainer->list());

        $usersModule = $this->container->getModule('users');
        dump($usersModule);
        $usersContainer = $usersModule->getContainer();
        dump($usersContainer);
        dump($usersContainer->list());

    }
}
