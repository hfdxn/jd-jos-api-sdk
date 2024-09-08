<?php
namespace DraftCommitDraft;
class JosProductAll{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.JosProductAll";
    }
        
    private $product;
            
    public function setProduct($product){
        $this->params['product'] = $product ->getInstance();
    }
        
            
    private $images;
                                        
    public function setImages($images){
        $size = count($images);
        for ($i=0; $i<$size; $i++){
            $images [$i] = $images [$i] ->getInstance();
        }
        $this->params['images'] = $images;
    }
                                    
            
    private $skus;
                                        
    public function setSkus($skus){
        $size = count($skus);
        for ($i=0; $i<$size; $i++){
            $skus [$i] = $skus [$i] ->getInstance();
        }
        $this->params['skus'] = $skus;
    }
                                    
            
    private $rectangleImages;
                                        
    public function setRectangleImages($rectangleImages){
        $size = count($rectangleImages);
        for ($i=0; $i<$size; $i++){
            $rectangleImages [$i] = $rectangleImages [$i] ->getInstance();
        }
        $this->params['rectangleImages'] = $rectangleImages;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>