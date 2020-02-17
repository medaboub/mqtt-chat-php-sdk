<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace telifoun\mqttchat;
 
 class config{
     
    /** telifoun mqttchat Client_id **/
    const CLIENT_ID="FX5501";
    /** telifoun mqttchat Client_secret **/
    const CLIENT_SECRET="FX5502";
         
    /** telifoun mqttchat rest server **/
    const MQTTCHAT_REST_SERVER="http://cluster1.telifoun.com/rest" ;
     
    /** telifoun mqttchat oauth2 server url **/
    const OAUTH2_TOKEN_URL="/oauth2/token";
    
    const REST_USERS_URL ="/v1.0/users";
    
    const REST_FRIENDS_URL="/v1.0/friends";    
    
    const REST_SETTINGS_URL="/v1.0/settings";
    
    const REST_ACTIONS_URL="/v1.0/actions";
    
     
 }