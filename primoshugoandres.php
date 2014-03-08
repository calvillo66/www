<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$val=8;
$temp=2;
$foundNoPrime=false;
    while ($temp<$val-1){
        if($val%$temp!=0) {
            $temp=$temp+1;
            echo $temp . "<br>";
            echo "operacion:".$val%$temp . "<br>";
        } else {
            echo "no es primo";
            $foundNoPrime=true;
            $temp=$val+1;
        }
    }
    
    if($foundNoPrime==false){
        echo "es primo";
    }
    
?>
</body>
</html>