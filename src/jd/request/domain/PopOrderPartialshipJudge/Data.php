<?php
namespace PopOrderPartialshipJudge;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.external.request.partialship.PartialShipmentQuery";
    }
        
    private $orderList;
                        
    public function setOrderList($orderList){
        $this->params['orderList'] = $orderList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>