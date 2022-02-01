<h1>Design patterns: factory</h1>
<?php

spl_autoload_register('autoload');

function autoload($className)
{
    if (str_contains($className, 'Factory')) {
        $path = 'solution/';
    } else {
        $path = 'classes/';
    }

    include $path.$className.'.php';
}


const AUTH_USER = 1;
const AUTH_ADMIN = 2;

$auth = AUTH_USER;

if ($auth === AUTH_USER) {
    $form = new UserForm();
} else {
    $form = new AdminForm();
}
echo $form->render();



//$formFactory = new FormFactory();
//echo ($formFactory->createForm(FormFactory::ADMIN_FORM)->render());
