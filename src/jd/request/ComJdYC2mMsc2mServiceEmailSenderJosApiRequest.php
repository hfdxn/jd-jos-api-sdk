<?php
class ComJdYC2mMsc2mServiceEmailSenderJosApiRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.y.c2m.msc2m.service.EmailSenderJosApi";
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
                                                        		                                    	                   			private $lastName;
    	                        
	public function setLastName($lastName){
		$this->lastName = $lastName;
         $this->apiParas["lastName"] = $lastName;
	}

	public function getLastName(){
	  return $this->lastName;
	}

                        	                   			private $firstName;
    	                        
	public function setFirstName($firstName){
		$this->firstName = $firstName;
         $this->apiParas["firstName"] = $firstName;
	}

	public function getFirstName(){
	  return $this->firstName;
	}

                        	                   			private $password;
    	                        
	public function setPassword($password){
		$this->password = $password;
         $this->apiParas["password"] = $password;
	}

	public function getPassword(){
	  return $this->password;
	}

                        	                   			private $phoneNumber;
    	                        
	public function setPhoneNumber($phoneNumber){
		$this->phoneNumber = $phoneNumber;
         $this->apiParas["phoneNumber"] = $phoneNumber;
	}

	public function getPhoneNumber(){
	  return $this->phoneNumber;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $domain;
    	                        
	public function setDomain($domain){
		$this->domain = $domain;
         $this->apiParas["domain"] = $domain;
	}

	public function getDomain(){
	  return $this->domain;
	}

                        	                   			private $companyName;
    	                        
	public function setCompanyName($companyName){
		$this->companyName = $companyName;
         $this->apiParas["companyName"] = $companyName;
	}

	public function getCompanyName(){
	  return $this->companyName;
	}

                        	                   			private $postalCode;
    	                        
	public function setPostalCode($postalCode){
		$this->postalCode = $postalCode;
         $this->apiParas["postalCode"] = $postalCode;
	}

	public function getPostalCode(){
	  return $this->postalCode;
	}

                        	                   			private $addressLine1;
    	                        
	public function setAddressLine1($addressLine1){
		$this->addressLine1 = $addressLine1;
         $this->apiParas["addressLine1"] = $addressLine1;
	}

	public function getAddressLine1(){
	  return $this->addressLine1;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $userName;
    	                        
	public function setUserName($userName){
		$this->userName = $userName;
         $this->apiParas["userName"] = $userName;
	}

	public function getUserName(){
	  return $this->userName;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                            }





        
 

