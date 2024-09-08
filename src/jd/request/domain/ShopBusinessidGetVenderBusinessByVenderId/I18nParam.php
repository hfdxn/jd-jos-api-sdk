<?php
namespace ShopBusinessidGetVenderBusinessByVenderId;
class I18nParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.seller.i18n.common.params.I18nParam";
    }
        
    private $businessUnit;
    
    public function setBusinessUnit($businessUnit){
        $this->params['businessUnit'] = $businessUnit;
    }

    public function getBusinessUnit(){
        return $this->businessUnit;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>