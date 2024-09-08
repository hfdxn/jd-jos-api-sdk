<?php
namespace Jd3csSparepartBrandQueryBrand;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SparePartBrandParam";
    }
        
    private $providerId;
    
    public function setProviderId($providerId){
        $this->params['providerId'] = $providerId;
    }

    public function getProviderId(){
        return $this->providerId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>