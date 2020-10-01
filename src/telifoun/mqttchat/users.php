<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace telifoun\mqttchat;


class users {       
    /**
     * 
     */      
    const MALE="0";
    const FEMALE="1";
       
 
    public function __construct(){}
   
   
    
   /**
    * 
    * @param type $post_data
    * @return type
    */
    public function add($post_data){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL,$post_data));
    }catch (\Exception $ex){
    return result::ko($ex);
    }
    }
     
    
     
   /**
    * 
    * @param type $userid
    * @return type
    */
    public function get($userid){    
    try{        
    return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$userid));
    }catch(\Exception $ex){
    return result::ko($ex);   
    }    
    }
    
    
    
   /**
    * 
    * @param type $userid
    * @param type $post_data
    * @return type
    */
    public function update($userid,$post_data){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("PUT",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$userid,$post_data));
    }catch (\Exception $ex){
    return result::ko($ex);
    }    
    }
    
    
    
    /**
     * 
     * @param type $userid
     * @return type
     */
    public function delete($userid){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$userid));
    }catch (\Exception $ex){
    return result::ko($ex);
    }    
    }
    
                 
    /**
     * 
     * @param type $after_userid
     * @param type $limit
     * @param type $online
     * @param type $gender
     */
    public function getByPage($after_userid,$limit,$online=0,$gender=null){
    try{  
      $query=array("after_userid"=>$after_userid,"limit"=>$limit,"online"=>$online);
      if(isset($gender) && ($gender==0 || $gender==1)){
        $query["gender"]=$gender;
      }   
      return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."?".http_build_query($query)));
    }catch (\Exception $ex){
      return result::ko($ex);
    }      
    }
    
   
    /**
     * Be carefull this function will delete all domain users
     */
    public function deleteAll(){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL));
    }catch (\Exception $ex){
    return result::ko($ex);
    }        
    }
     
}