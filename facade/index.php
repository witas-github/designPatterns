<h1>Design patterns: facade</h1>
<?php

spl_autoload_register('autoload');

function autoload($className)
{
    if (str_contains($className, 'Facade')) {
        $path = 'solution/';
    } else {
        $path = 'classes/';
    }

    include $path.$className.'.php';
}

$orderPresenter = new OrderPresenter();
$orderPresenter->actionShowOrderDetail();
echo "<br /><br />";

$orderPresenter = new ComplaintPresenter();
$orderPresenter->actionShowComplaintDetail();


//$complaintFacade = new ComplaintFacade();
//$customerFacade = new CustomerFacade();
//$orderFacade = new OrderFacade();
//
//$orderPresenter = new OrderPresenter(
//    $complaintFacade,
//    $customerFacade,
//    $orderFacade
//);
//$orderPresenter->actionShowOrderDetail();
//echo "<br /><br />";
//
//
//$orderPresenter = new ComplaintPresenter(
//    $complaintFacade,
//    $customerFacade,
//    $orderFacade
//);
//$orderPresenter->actionShowComplaintDetail();