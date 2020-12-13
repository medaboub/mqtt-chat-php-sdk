<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace telifoun\mqttchat;


class messages {    
     
  
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
    * @param type $limit   
    * @param type $before_messageid
    * @return type
    */
    public function getByPage($limit,$before_messageid=null){
    try{  
      $query=array("limit"=>$limit);
      if(isset($before_messageid) && ($before_messageid>0)){
       $query["before_messageid"]=$before_messageid;
      }   
      return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$this->_userid."/messages?".http_build_query($query)));
    }catch (\Exception $ex){
      return result::ko($ex);
    }      
    }
    
    /**
     * 
     * @param type $messageid
     * @return type
     */
    public function get($messageid){
    try{ 
      return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$this->_userid."/messages/".$messageid));
    }catch (\Exception $ex){
      return result::ko($ex);
    }      
    }
    
    /**
     * 
     * @param type $messageid
     * @return type
     */
    public function delete($messageid){
    try{ 
      return result::ok((new oauth2())->AuthenticatedRequest("DELETE",config::MQTTCHAT_REST_SERVER.config::REST_USERS_URL."/".$this->_userid."/messages/".$messageid));
    }catch (\Exception $ex){
      return result::ko($ex);
    }      
    }
   
    
    
}
