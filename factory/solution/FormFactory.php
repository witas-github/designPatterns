<?php

use JetBrains\PhpStorm\Pure;

class FormFactory
{
    public const ADMIN_FORM = 'Admin';
    public const USER_FORM = 'User';

    /**
     * @throws Exception
     */
    #[Pure] public function createForm(
        string $type
    ): FormInterface
    {
        $className = ucfirst($type) . 'Form';
        if (class_exists($className)) {
            return new $className();
        } else {
            throw new Exception('Form does not exist');
        }
    }
}