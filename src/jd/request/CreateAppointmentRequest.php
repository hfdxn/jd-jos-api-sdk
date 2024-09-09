<?php

namespace JdJos\jd\request;
class CreateAppointmentRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.createAppointment";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $clientInfo;

    public function setClientInfo($clientInfo){
        $this->apiParas['clientInfo'] = $clientInfo;
    }
    public function getClientInfo(){
        return $this->apiParas['clientInfo'];
    }
    private  $appointmentInfo;

    public function setAppointmentInfo($appointmentInfo){
        $this->apiParas['appointmentInfo'] = $appointmentInfo;
    }
    public function getAppointmentInfo(){
        return $this->apiParas['appointmentInfo'];
    }
}

?>