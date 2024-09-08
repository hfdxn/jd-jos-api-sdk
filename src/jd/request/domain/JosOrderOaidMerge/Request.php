<?php
namespace JosOrderOaidMerge;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jos.domain.query.OrderMergeOpenQuery";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $mergeList;
                                        
    public function setMergeList($mergeList){
        $size = count($mergeList);
        for ($i=0; $i<$size; $i++){
            $mergeList [$i] = $mergeList [$i] ->getInstance();
        }
        $this->params['mergeList'] = $mergeList;
    }
                                    
            
    private $venderCode;
    
    public function setVenderCode($venderCode){
        $this->params['venderCode'] = $venderCode;
    }

    public function getVenderCode(){
        return $this->venderCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>