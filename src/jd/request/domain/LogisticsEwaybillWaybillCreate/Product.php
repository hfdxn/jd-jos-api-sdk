<?php
namespace LogisticsEwaybillWaybillCreate;
class Product{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ldop.alpha.waybill.api.dto.waybill.ProductDTO";
    }
        
    private $productCode;
    
    public function setProductCode($productCode){
        $this->params['productCode'] = $productCode;
    }

    public function getProductCode(){
        return $this->productCode;
    }
            
    private $productAttributes;
                                        
    public function setProductAttributes($productAttributes){
        $size = count($productAttributes);
        for ($i=0; $i<$size; $i++){
            $productAttributes [$i] = $productAttributes [$i] ->getInstance();
        }
        $this->params['productAttributes'] = $productAttributes;
    }
                                    
            
    private $productName;
    
    public function setProductName($productName){
        $this->params['productName'] = $productName;
    }

    public function getProductName(){
        return $this->productName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>