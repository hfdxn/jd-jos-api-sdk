<?php
namespace PromoActivityCreate;
class OperatePermission{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.OperatePermissionDTO";
    }
        
    private $allowOthersOperate;
    
    public function setAllowOthersOperate($allowOthersOperate){
        $this->params['allowOthersOperate'] = $allowOthersOperate;
    }

    public function getAllowOthersOperate(){
        return $this->allowOthersOperate;
    }
            
    private $allowOthersCheck;
    
    public function setAllowOthersCheck($allowOthersCheck){
        $this->params['allowOthersCheck'] = $allowOthersCheck;
    }

    public function getAllowOthersCheck(){
        return $this->allowOthersCheck;
    }
            
    private $allowOtherUserOperate;
    
    public function setAllowOtherUserOperate($allowOtherUserOperate){
        $this->params['allowOtherUserOperate'] = $allowOtherUserOperate;
    }

    public function getAllowOtherUserOperate(){
        return $this->allowOtherUserOperate;
    }
            
    private $allowOtherUserCheck;
    
    public function setAllowOtherUserCheck($allowOtherUserCheck){
        $this->params['allowOtherUserCheck'] = $allowOtherUserCheck;
    }

    public function getAllowOtherUserCheck(){
        return $this->allowOtherUserCheck;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>