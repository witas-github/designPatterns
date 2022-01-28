<?php

class OrderPresenter
{
//    public function __construct(
//        private ComplaintFacade $complaintFacade,
//        private CustomerFacade  $customerFacade,
//        private OrderFacade     $orderFacade
//    )
//    {
//    }

    public function actionShowOrderDetail()
    {
        echo __METHOD__ . "<br /><br />";

        echo "This is information about complaint!<br />";
        echo "This is information about customer<br />";
        echo "This is information about order<br />";

    }

//    public function actionShowOrderDetail()
//    {
//        echo __METHOD__ . "<br /><br />";
//
//        echo $this->complaintFacade->getComplaintDetail();
//        echo $this->customerFacade->getCustomerDetail();
//        echo $this->orderFacade->getOrderDetail();
//    }

}