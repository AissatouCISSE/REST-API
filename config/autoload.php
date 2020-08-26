<?php
//namespace app;
class Autoloader{
    static function register()
    {
        spl_autoload_register(array(__class__,"autoload"));
    }
    static function autoload($class)
    {
        $m= str_replace("\\","/", $class);
         //echo __DIR__.$m.".php";
        //echo $m;
        // die();
        $n= str_replace("\\","/", __DIR__.$m.".php");
        // echo $n;
        // die();
        //echo $n;
         //$b=str_replace("config","",$n);
         $b=str_replace("config","src/",$n);
        //  echo $b;
        //  die();
        require $b;
        //die();
        //include_once $m.".php";
        //var_dump($class);
        //die();
        // if(file_exists("../Models/".$class.".php"))
        // {
        // require_once "../Models/".$class.".php";
        // }else if(file_exists("../Controllers/".$class.".php"))
        // {
        // require_once "../Controllers/".$class.".php";
        // }
        
        //namespace
        // if(file_exists(str_replace("\\","/", $class.".php")))
        // {
        //     require_once str_replace("\\","/", $class.".php");
        // }else{
        //     die("Merci d'utiliser le mot cle USE SUIVI DE ".$class);
        // }
      
    }
}
Autoloader::register();
?>