<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace telifoun\mqttchat;

class result{
    /**
     * 
     * @param type $data
     * @return type
     */
    static function ok($data){
     return json_decode($data,true);     
    }
    /**
     * 
     * @param type $ex
     * @return type
     */
    static function ko($ex){
     return array("ok"=>false,"response"=>array("code"=>$ex->getCode(),"error"=>$ex->getMessage()));     
    }
    
    
}