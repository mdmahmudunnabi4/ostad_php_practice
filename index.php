
    <?php

$n1 = true;
$n2 = false;
$n3 = false;

if($n1){
    if($n2){
        if($n3){
            echo"Hello";
        }else{
            echo"on 1"; 
        }
    }else{
        echo"on 2";
    }
}else{
    echo"on 3";
}

echo "\n";

if($n1 && $n2 && $n3){
    echo "hello";
}else if($n1 && $n2){
    echo"on 1";
}else if($n1){
    echo "no 2";
}else{
    echo"on 3";
}
?>