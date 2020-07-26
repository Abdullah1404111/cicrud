<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('standard_time')){
   function standard_time($time){
         $dateTime = gmdate("F d, Y - H:i", strtotime($time));
         return $dateTime;
       }
   }   
