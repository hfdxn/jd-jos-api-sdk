<?php
namespace Jd3csSparepartProviderQueryProvider;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SparePartProviderParam";
    }
        
    private $companyType;
    
    public function setCompanyType($companyType){
        $this->params['companyType'] = $companyType;
    }

    public function getCompanyType(){
        return $this->companyType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>