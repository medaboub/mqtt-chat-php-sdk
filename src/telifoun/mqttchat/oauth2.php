<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace telifoun\mqttchat;

class oauth2 {
    
    private $_provider;   
   
    /**
     * 
     */
    public function __construct(){ 
    $this->_provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => config::CLIENT_ID,    // The client ID assigned to you by the provider
    'clientSecret'            => config::CLIENT_SECRET,   // The client password assigned to you by the provider
    'urlAccessToken'          =>config::OAUTH2_TOKEN_URL,
    'redirectUri'             => '',
    'urlAuthorize'            => '',
    'urlResourceOwnerDetails' => ''
    ]);    
    }
    
    
    /**
     * 
     */
    private function _getAccessToken(){
      try {          
      $accessToken = $this->_provider ->getAccessToken('client_credentials');  
      return $accessToken->getToken() ;
      } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $ex) {
      throw new myException ("OAUTH2 server error : " .$ex->getMessage(),0);
      }  
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
        $options['body'] = json_encode($data);
        $options['headers']['content-type'] = 'application/json';
        $request= $this->_provider->getAuthenticatedRequest(
            $method,
            $url,
            $this->_getAccessToken(),
            $options
        );
        return $this->_provider->getParsedResponse($request);     
     }catch(\Exception $ex){
      throw new myException ($ex->getMessage(),0);
     }
    }
    
    
}