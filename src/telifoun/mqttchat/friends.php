<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace telifoun\mqttchat;


class friends {    
    
  
    /**
     *
     * @var type 
     */
    private $_userid; 
  
  
   /**
    * 
    * @param type $userid
    */
   public function __construct($userid){
    $this->_userid=$userid;
   }
  /**
   * 
   * @param type $userid
   */
    public function add($userid){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_userid,array("userid"=>$userid)));
    }catch (\Exception $ex){
    return result::ko($ex);
    }      
    } 
    
    /**
     * 
     * @param type $userid
     * @return type
     */
    public function remove($userid){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_userid."/".$userid));
    }catch (\Exception $ex){
    return result::ko($ex);
    }         
    }
   
    /**
     * 
     * @param type $userid
     * @return type
     */
    public function is_friend($userid){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_userid."/".$userid));
    }catch (\Exception $ex){
    return result::ko($ex);
    }      
    }   
    
    /**
     * 
     * @param type $offset
     * @param type $limit
     * @return type
     */
    public function getAll($offset,$limit){
    try{  
    $query=array("offset"=>$offset,"limit"=>$limit);     
    return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_userid."/"."?".http_build_query($query)));
    }catch (\Exception $ex){
      return result::ko($ex);
    }      
    }
    
    
    
   /**
    * 
    */ 
   public function removeAll(){
   try{    
    return result::ok((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_FRIENDS_URL."/".$this->_userid));
    }catch (\Exception $ex){
    return result::ko($ex);
    }       
   } 
   
   
   
    
    
}
