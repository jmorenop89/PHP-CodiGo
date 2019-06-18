<?php 

    class Form{

        public static function Open($action='',$method='post'){
            print("<form action='$action' method='$method'>");
        }

        public static function Close(){
            print("</form>");
        }

        public static function Text($name){
            print("<input type='text' name='$name'>");
        }

        public static function Select($name,$array){
            print("<select name='$name' >");
            foreach($array as $index => $value){
                print("<option value='$index'>$value</option>");
            }
            print("</select>");
        }
    }