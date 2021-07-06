<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace telifoun\mqttchat;

class notifications {    
    
  
   public function __construct(){  
   }   
   
   
  
    /**
     * 
     * @param type $post_data
     * @return type
     */
    public function add($post_data){
    try{       
     return result::ok((new oauth2())->AuthenticatedRequest("POST",config::MQTTCHAT_REST_SERVER.config::REST_NOTIFICATIONS_URL,$post_data));
    }catch (\Exception $ex){
     return result::ko($ex);
    }
    } 
    
   
   
    /**
     * 
     * @param type $notification_id
     * @return type
     */
    public function get($notification_id){
    try{    
    return result::ok((new oauth2())->AuthenticatedRequest("GET",config::MQTTCHAT_REST_SERVER.config::REST_NOTIFICATIONS_URL."/".$notification_id."/"));
    }catch (\Exception $ex){
    return result::ko($ex);
    }      
    }   
    
        
}
