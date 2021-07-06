<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace telifoun\mqttchat;
 
 class config{
     
    /** telifoun mqttchat app_id **/
    const APP_ID="mqttchat-62949509";
    /** telifoun mqttchat app_secret **/
    const APP_SECRET="mqttchat-cyvepgwhc2xoud30";  
    
    
    /** telifoun mqttchat rest server **/
    //const MQTTCHAT_REST_SERVER="https://cluster1.telifoun.com/api/v1.0" ;   
   const MQTTCHAT_REST_SERVER="http://10.0.1.3/api/v1.0" ;   
     /** telifoun mqttchat users url **/
    const REST_USERS_URL ="/users";
    
     /** telifoun mqttchat friends url **/
    const REST_FRIENDS_URL="/friends";    
    
    
    /** telifoun mqttchat notifications url **/
    const REST_NOTIFICATIONS_URL="/notifications";    
    
     
 }