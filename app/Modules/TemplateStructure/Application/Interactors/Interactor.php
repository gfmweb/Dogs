<?php

namespace App\Modules\TemplateStructure\Application\Interactors;

use App\Common\Abstract\AbstractInteractor;

class Interactor extends AbstractInteractor
{
    public function handle(): void
    {
        dump('Список модулей');
        dump($this->container->getModules());
        dump('Получить модуль template');
        $template = $this->getModule('template');
        dump('Методы модуля template:');
        dump(get_class_methods($template));
        dump('Вызвать метод ЛИСТ');
        dump($template->list());
        dump('Вызвать метод КУРВА безопасно');
        dump($this->safeMethodCall($template,'kurva'));
        dump('Вызвать метод ЛИСТ безопасно');
        dump($this->safeMethodCall($template,'list'));
    }
}