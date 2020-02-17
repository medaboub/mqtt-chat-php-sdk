<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of photo
 *
 * @author Administrateur
 */
namespace telifoun\mqttchat;

class photo {
    

       
    public function __construct(){
     
    }   
    
    /**
     * 
     * @param type $photoMAXPath
     * @param type $uploadDirectoryMIN
     * @param type $width
     */
    public function Thumbnail($photoMAXPath,
                              $uploadDirectoryMIN,
                              $width){
      try{      
      $pathinfo = pathinfo($photoMAXPath);
      $filename = $pathinfo['filename'];
      $ext = $pathinfo['extension'];	
      $thumb = new \PHPThumb\GD($photoMAXPath);
      $thumb->resize($width, $width);
      $thumb->save($uploadDirectoryMIN."/".$filename.".".$ext, $ext);      
      return result::ok(array("ok"=>true));      
      }catch (\Exception $ex){
      return result::ko($ex);
      }
    }
       
    
}
