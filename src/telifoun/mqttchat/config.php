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
    /** telifoun mqttchat oauth2 server url **/
    const OAUTH2_TOKEN_URL="http://10.0.0.100/mqttchatserver/oauth2/token";
    
    const REST_USERS_URL ="http://10.0.0.100/mqttchatserver/v1.0/users";

    const REST_LOGIN_URL="http://10.0.0.100/mqttchatserver/v1.0/login";
     
 }