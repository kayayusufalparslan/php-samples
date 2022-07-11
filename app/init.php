<?php

//helperlar otomatik olarak burada yüklenecek
//class dosyaları yüklenecek
//veritabanı bağlantısı yapılacak
//ayarlar yapılacak

// 

spl_autoload_register(function ($class) {   
    $classFile = realpath('.') . '/app/classes/class.' . strtolower($class) . '.php'; 
    if(file_exists($classFile)){
        require $classFile;
    }   
}); 

Helper::Load();

?>