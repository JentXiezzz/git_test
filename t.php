<?php
var_dump(null?->test);

class Test{

    public function __construct(public $a=1,public $b = 2){
        echo $this->a."\n";
        echo $this->b."\n";
    }

    public function test(int|string $c):int|string{
        return $c+1;
    }
}

$test = new Test(b:5,a:9);
echo $test->test(c:9);