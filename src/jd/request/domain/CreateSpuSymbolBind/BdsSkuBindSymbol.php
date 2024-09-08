<?php
namespace CreateSpuSymbolBind;
class BdsSkuBindSymbol{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kechuangjie.rpc.domain.BdsSkuBindSymbol";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $spuId;
    
    public function setSpuId($spuId){
        $this->params['spuId'] = $spuId;
    }

    public function getSpuId(){
        return $this->spuId;
    }
            
    private $isSku;
    
    public function setIsSku($isSku){
        $this->params['isSku'] = $isSku;
    }

    public function getIsSku(){
        return $this->isSku;
    }
            
    private $itemFirstCateCd;
    
    public function setItemFirstCateCd($itemFirstCateCd){
        $this->params['itemFirstCateCd'] = $itemFirstCateCd;
    }

    public function getItemFirstCateCd(){
        return $this->itemFirstCateCd;
    }
            
    private $itemSecondCateCd;
    
    public function setItemSecondCateCd($itemSecondCateCd){
        $this->params['itemSecondCateCd'] = $itemSecondCateCd;
    }

    public function getItemSecondCateCd(){
        return $this->itemSecondCateCd;
    }
            
    private $itemThirdCateCd;
    
    public function setItemThirdCateCd($itemThirdCateCd){
        $this->params['itemThirdCateCd'] = $itemThirdCateCd;
    }

    public function getItemThirdCateCd(){
        return $this->itemThirdCateCd;
    }
            
    private $itemFourthCateCd;
    
    public function setItemFourthCateCd($itemFourthCateCd){
        $this->params['itemFourthCateCd'] = $itemFourthCateCd;
    }

    public function getItemFourthCateCd(){
        return $this->itemFourthCateCd;
    }
            
    private $symbolList;
                                        
    public function setSymbolList($symbolList){
        $size = count($symbolList);
        for ($i=0; $i<$size; $i++){
            $symbolList [$i] = $symbolList [$i] ->getInstance();
        }
        $this->params['symbolList'] = $symbolList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>