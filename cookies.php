<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

    $maincolor=$_POST['color'];
     echo$maincolor;
 setcookie("cook" ,$maincolor ,time()+3600 ,"/");
}
if(isset($_COOKIE['cook'])){
    $body=$_COOKIE['cook'];
    
}else{
    $body=$maincolor;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background_color:" <?php echo $body;?>>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"   method="POST">
<input type="color" name="color">
<input type="submit" name="submit">
    </form>
</body>
</html>