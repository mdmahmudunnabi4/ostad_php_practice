
    <?php

$n1 = 1900;


if($n1 % 4 == 0 && $n1 % 100 == 0 && $n1 % 400 == 0){
    echo "{$n1} is a leap year";
}else if($n1 % 4 == 0 && $n1 % 100 == 0){
    echo "{$n1} is not a leap year";;
}else if($n1 % 4 == 0){
    echo "{$n1} is a leap year";
}else{
    echo "{$n1} is not a leap year";
}

echo "\n";

if(true && true){
    echo "wow1";
}
echo "\n";

if(true && false){
    echo "wow2";
}
echo "\n";

if(false && false){
    echo "wow3";
}
echo "\n";

if(false || true){
    echo "wow4";
}
?>



