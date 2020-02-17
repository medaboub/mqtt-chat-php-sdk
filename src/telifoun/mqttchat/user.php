<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace telifoun\mqttchat;


class user {       
    /**
     * 
     */      
    const GENDER_MALE="0";
    const GENDER_FEMALE="1";
    /**
     *
     * @var type 
     */
    private $_userid;
    private $_profile_link;
    private $_avatar_link;
    private $_name;
    private $_gender;
    private $_surname;
    
               
   /**
    * 
    * @param type $username
    * @param type $password
    * @param type $name
    * @param type $surname
    * @param type $profile_link
    * @param type $avatar_link
    * @param type $role
    */
    public function __construct(){}
    
    
   /**
    * 
    * @param type $userid
    * @param type $name
    * @param type $surname
    * @param type $profile_link
    * @param type $avatar_link
    * @param type $gender
    */
    public function Set($userid,
                        $name,
                        $surname="",                       
                        $profile_link=null,
                        $avatar_link=null,
                        $gender=user::GENDER_MALE){
     $this->_userid=$userid;
     $this->_name=$name;
     $this->_surname=$surname;
     $this->_profile_link=$profile_link;
     $this->_avatar_link=$avatar_link;
     $this->_gender=$gender;
    }
    
   /**
     * 
     * @return type
     */
    public function Add(){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL,$this->toArray()));
    }catch (\Exception $ex){
    return result::ko($ex);
    }
    }
     
    
     
    /**
     * 
     * @return type
     */
    public function Get(){    
    try{        
    return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$this->_getUserid()));
    }catch(\Exception $ex){
    return result::ko($ex);   
    }    
    }
    
    
    
    /**
     * 
     * @return type
     */    
    public function Update(){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$this->_getUserid(),$this->toArray()));
    }catch (\Exception $ex){
    return result::ko($ex);
    }    
    }
    
    
    /**
     * 
     * @return type
     */    
    public function Remove(){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$this->_getUserid()));
    }catch (\Exception $ex){
    return result::ko($ex);
    }    
    }
    
  
    /**
     * 
     * @param type $userid
     */   
    public function friend_With($userid){
     try{
     $result=((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_getUserid(),array("userid"=>$userid)));  
     return result::ok($result);
     }catch (\Exception $ex) {     
     return result::ko($ex);
     }     
    }
    
    
    /**
     * 
     * @param type $userid
     */
     public function is_Friend_With($userid){
     try{
     $result=((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_getUserid()."?userid=".$userid));  
     return result::ok($result);
     }catch (\Exception $ex) {     
     return result::ko($ex);
     }       
     }
     
     /**
      * 
      * @param type $userid
      */
     public function not_Friend_With($userid){
      try{
      $result=((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_getUserid()."?".http_build_query(array("friend_id"=>$userid))));  
      return result::ok($result);
      }catch (\Exception $ex) {     
      return result::ko($ex);
      }         
     }
    
            
     /**
      * 
      * @param type $contactid
      * @return type
      */
     public function block_User($contactid){
       try{
       $result=((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_ACTIONS_URL."/".$this->_getUserid(),array("contactid"=>$contactid)));  
       return result::ok($result);
       }catch (\Exception $ex) {     
       return result::ko($ex);
       }        
     }
     
     
     /**
      * 
      * @param type $contactid
      * @return type
      */
     public function unblock_User($contactid){
      try{
       $result=((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_ACTIONS_URL."/".$this->_getUserid()."?".http_build_query(array("contactid"=>$contactid))));  
       return result::ok($result);
       }catch (\Exception $ex) {     
       return result::ko($ex);
       }           
     }
     
   
    
    /**
     * 
     * @param type $userid
     * @return type
     */
    public function getSettings(){
     try{
     $result=((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_SETTINGS_URL."/".$this->_getUserid()));  
     return result::ok($result);
     }catch (\Exception $ex) {     
     return result::ko($ex);
     }            
    }
    
    /**
     * 
     * @param type $settings
     * @return type
     */
    public function updateSettings($settings){
     try{
     $result=((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_SETTINGS_URL."/".$this->_getUserid(),$settings));  
     return result::ok($result);
     }catch (\Exception $ex) {     
     return result::ko($ex);
     }            
    }
    
   /**
    * 
    * @param type $contactid
    * @return type
    */
    public function deleteConversation($contactid){
      try{
       $result=((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_CHANNELS_URL."/".$this->_getUserid(),array("contactid"=>$contactid)));  
       return result::ok($result);
       }catch (\Exception $ex) {     
       return result::ko($ex);
       }              
    }
    
   
      
       
    /**
     * 
     * @param type $userid
     */
    public function _setUserid($userid){
       $this->_userid=$userid; 
    }
    
    /**
     * 
     * @return type
     */
    public function _getUserid(){
       return $this->_userid; 
    }
    
    /**
     * 
     * @return type
     */
    public function _getUserName(){
        return $this->_username;
    }
         
   
    /**
     * 
     * @param type $name
     */
    public function _setName($name){
        $this->_name=$name;
    }
    
    /**
     * 
     * @param type $surname
     */
    public function _setSurName($surname){
        $this->_surname=$surname;
    }
    /**
     * 
     * @param type $profile_link
     */
    public function _setProfileLink($profile_link){
        $this->_profile_link=$profile_link;
    }
    /**
     * 
     * @param type $avatar_link
     */
    public function _setAvatarLink($avatar_link){
        $this->_avatar_link=$avatar_link;
    }
    /**
     * 
     * @param type $gender
     */
    public function _setGender($gender){
      $this->_gender=$gender;  
    }      
    /**
     * 
     * @return type
     */
    public function toArray(){
        return array("userid"=>$this->_userid,
                     "name"=>$this->_name,
                     "surname"=>$this->_surname,
                     "profile_link"=>$this->_profile_link,
                     "avatar_link"=>$this->_avatar_link,
                     "gender"=>$this->_gender
                     );
    }
      
     
}