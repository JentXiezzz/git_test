<?php
namespace App\Controller;

const APP = "app1";

class MyClass {
    const APP = "app2";
    
    public function hello() {
        echo APP;
        echo self::APP;
    }
}