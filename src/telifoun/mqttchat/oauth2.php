<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace telifoun\mqttchat;

class oauth2 {
    
   
    /**
     *
     * @var type 
     */
    private $_rest_client;    
    /**
     * 
     * @param type $app_secret
     */
    public function __construct(){       
      $this->_rest_client = new \GuzzleHttp\Client();
    }       
    
    /**
     * 
     * @param type $method
     * @param type $url
     * @param type $data
     * @return type
     */
    public function AuthenticatedRequest($method,$url,$data=array()){  
     try {  
       $res= $this->_rest_client->request($method,$url,[
           'auth' => [config::APP_ID, config::APP_SECRET],
           'body' => json_encode($data)
       ]);        
       return $res->getBody()->getContents();  
     }catch(\Exception $ex){
      throw new myException ($ex->getMessage(),0);
     }
    }
    
    
}