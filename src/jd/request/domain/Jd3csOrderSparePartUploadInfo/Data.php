<?php
namespace Jd3csOrderSparePartUploadInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.UploadSparePartParam";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $deliverNoList;
                        
    public function setDeliverNoList($deliverNoList){
        $this->params['deliverNoList'] = $deliverNoList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>