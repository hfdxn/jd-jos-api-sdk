<?php
namespace YipCustomizedBatchQueryCustomServiceApplyResult;
class BatchApplyVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.customization.center.open.entity.customService.SkuServiceBatchApplyResultVo";
    }
        
    private $skuServiceApplyResultList;
                                        
    public function setSkuServiceApplyResultList($skuServiceApplyResultList){
        $size = count($skuServiceApplyResultList);
        for ($i=0; $i<$size; $i++){
            $skuServiceApplyResultList [$i] = $skuServiceApplyResultList [$i] ->getInstance();
        }
        $this->params['skuServiceApplyResultList'] = $skuServiceApplyResultList;
    }
                                    
            
    private $locale;
    
    public function setLocale($locale){
        $this->params['locale'] = $locale;
    }

    public function getLocale(){
        return $this->locale;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>