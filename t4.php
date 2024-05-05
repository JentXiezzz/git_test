<?php
$a = 0;
try{
    echo 1/$a."\n";
}catch(InvalidArgumentException $e){ 
    echo "".$e->getMessage()."\n";
}catch(DivisionByZeroError $e){
    echo "".$e->getMessage()."\n";
}finally{
    echo "finished\n";
}      
