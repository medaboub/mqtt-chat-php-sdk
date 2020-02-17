<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace telifoun\mqttchat;
 
 class config{
     
    /** telifoun mqttchat app_id **/
    const APP_ID="mqttchat-87226030";
    /** telifoun mqttchat app_secret **/
    const APP_SECRET="mqttchat-56vvfbvnpe0uvuid";  
    
    
    /** telifoun mqttchat rest server **/
    const MQTTCHAT_REST_SERVER="http://cluster1.telifoun.com/rest" ;    
     
    /** telifoun mqttchat oauth2 server url **/
    const OAUTH2_TOKEN_URL="/oauth2/token";
    
     /** telifoun mqttchat users url **/
    const REST_USERS_URL ="/v1.0/users";
    
     /** telifoun mqttchat ofriends url **/
    const REST_FRIENDS_URL="/v1.0/friends";    
    
     /** telifoun mqttchat settings url **/
    const REST_SETTINGS_URL="/v1.0/settings";
    
     /** telifoun mqttchat actions url **/
    const REST_ACTIONS_URL="/v1.0/actions";
    
     
 }