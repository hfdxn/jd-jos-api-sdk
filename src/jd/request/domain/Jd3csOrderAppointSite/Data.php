<?php
namespace Jd3csOrderAppointSite;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.AppointSite";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $siteCode;
    
    public function setSiteCode($siteCode){
        $this->params['siteCode'] = $siteCode;
    }

    public function getSiteCode(){
        return $this->siteCode;
    }
            
    private $siteMobile;
    
    public function setSiteMobile($siteMobile){
        $this->params['siteMobile'] = $siteMobile;
    }

    public function getSiteMobile(){
        return $this->siteMobile;
    }
            
    private $siteJdId;
    
    public function setSiteJdId($siteJdId){
        $this->params['siteJdId'] = $siteJdId;
    }

    public function getSiteJdId(){
        return $this->siteJdId;
    }
            
    private $siteName;
    
    public function setSiteName($siteName){
        $this->params['siteName'] = $siteName;
    }

    public function getSiteName(){
        return $this->siteName;
    }
            
    private $siteAddress;
    
    public function setSiteAddress($siteAddress){
        $this->params['siteAddress'] = $siteAddress;
    }

    public function getSiteAddress(){
        return $this->siteAddress;
    }
            
    private $unifiedCode;
    
    public function setUnifiedCode($unifiedCode){
        $this->params['unifiedCode'] = $unifiedCode;
    }

    public function getUnifiedCode(){
        return $this->unifiedCode;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $siteContact;
    
    public function setSiteContact($siteContact){
        $this->params['siteContact'] = $siteContact;
    }

    public function getSiteContact(){
        return $this->siteContact;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>