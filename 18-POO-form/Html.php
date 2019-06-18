<?php 

    class Html{

        public static function Style($url){
            print("<link rel='stylesheet' href='$url'>");
        }

        public static function Script($url){
            print("<script src='$url'></script>");
        }

    }