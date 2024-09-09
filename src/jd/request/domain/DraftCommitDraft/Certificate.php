<?php

namespace JdJos\jd\request\domain\DraftCommitDraft;
class Certificate{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.house.JosHouseSpuCertificate";
    }
        
    private $certificateBound;
    
    public function setCertificateBound($certificateBound){
        $this->params['certificateBound'] = $certificateBound;
    }

    public function getCertificateBound(){
        return $this->certificateBound;
    }
            
    private $certificateName;
    
    public function setCertificateName($certificateName){
        $this->params['certificateName'] = $certificateName;
    }

    public function getCertificateName(){
        return $this->certificateName;
    }
            
    private $certificateImg;
    
    public function setCertificateImg($certificateImg){
        $this->params['certificateImg'] = $certificateImg;
    }

    public function getCertificateImg(){
        return $this->certificateImg;
    }
            
    private $certificateTime;
    
    public function setCertificateTime($certificateTime){
        $this->params['certificateTime'] = $certificateTime;
    }

    public function getCertificateTime(){
        return $this->certificateTime;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>