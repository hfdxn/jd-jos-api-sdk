<?php

namespace JdJos\jd\request\domain\JdiSupplyBatchAddOrUpdateSupplierStock;
class BatchSupplierStockDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.supply.chain.channel.sdk.dto.BatchSupplierStockDto";
    }
        
    private $supplierStockDtoList;
                                        
    public function setSupplierStockDtoList($supplierStockDtoList){
        $size = count($supplierStockDtoList);
        for ($i=0; $i<$size; $i++){
            $supplierStockDtoList [$i] = $supplierStockDtoList [$i] ->getInstance();
        }
        $this->params['supplierStockDtoList'] = $supplierStockDtoList;
    }
                                    
            
    private $supplierName;
    
    public function setSupplierName($supplierName){
        $this->params['supplierName'] = $supplierName;
    }

    public function getSupplierName(){
        return $this->supplierName;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>