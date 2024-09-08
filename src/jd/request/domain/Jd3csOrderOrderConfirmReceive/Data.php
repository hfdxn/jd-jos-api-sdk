<?php
namespace Jd3csOrderOrderConfirmReceive;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.OrderInfoConfirmParam";
    }
        
    private $orderNos;
                        
    public function setOrderNos($orderNos){
        $this->params['orderNos'] = $orderNos;
    }
                    
            
    private $confirmType;
    
    public function setConfirmType($confirmType){
        $this->params['confirmType'] = $confirmType;
    }

    public function getConfirmType(){
        return $this->confirmType;
    }
            
    private $changeInfoList;
                                        
    public function setChangeInfoList($changeInfoList){
        $size = count($changeInfoList);
        for ($i=0; $i<$size; $i++){
            $changeInfoList [$i] = $changeInfoList [$i] ->getInstance();
        }
        $this->params['changeInfoList'] = $changeInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>