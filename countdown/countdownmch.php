<!DOCTYPE html>
<html>
<body>
 
<?php
if($_GET){
    $n = $_GET["number"];  
}     
for ($x = $n; $x >= 0; $x--){
    echo "Time left: $x <br>";

}
    
?>	
 
</body>
</html>