<?php
namespace YipCustomizedSkuCustomServiceBatchApply;
class BatchApplyVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.customization.center.open.entity.customService.SkuServiceBatchApplyVo";
    }
        
    private $skuServiceApplyList;
                                        
    public function setSkuServiceApplyList($skuServiceApplyList){
        $size = count($skuServiceApplyList);
        for ($i=0; $i<$size; $i++){
            $skuServiceApplyList [$i] = $skuServiceApplyList [$i] ->getInstance();
        }
        $this->params['skuServiceApplyList'] = $skuServiceApplyList;
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