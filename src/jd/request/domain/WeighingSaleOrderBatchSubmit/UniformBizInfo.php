<?php

namespace JdJos\jd\request\domain\WeighingSaleOrderBatchSubmit;
class UniformBizInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.tp.common.masterdata.UniformBizInfo";
    }
        
    private $data;
            
    public function setData($data){
        $this->params['data'] = $data ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>