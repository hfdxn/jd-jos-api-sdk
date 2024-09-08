<?php
namespace PromoActivityCreate;
class MemberDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.MemberDTO";
    }
        
    private $jdMemberDTO;
            
    public function setJdMemberDTO($jdMemberDTO){
        $this->params['jdMemberDTO'] = $jdMemberDTO ->getInstance();
    }
        
            
    private $plusMemeber;
    
    public function setPlusMemeber($plusMemeber){
        $this->params['plusMemeber'] = $plusMemeber;
    }

    public function getPlusMemeber(){
        return $this->plusMemeber;
    }
            
    private $qqMemeber;
    
    public function setQqMemeber($qqMemeber){
        $this->params['qqMemeber'] = $qqMemeber;
    }

    public function getQqMemeber(){
        return $this->qqMemeber;
    }
            
    private $shopMember;
    
    public function setShopMember($shopMember){
        $this->params['shopMember'] = $shopMember;
    }

    public function getShopMember(){
        return $this->shopMember;
    }
            
    private $samMember;
    
    public function setSamMember($samMember){
        $this->params['samMember'] = $samMember;
    }

    public function getSamMember(){
        return $this->samMember;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>