
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTERMEDIATE-EX-2</title>
</head>

<?php
if(isset($_POST['submitForm']) && (isset($_POST['favcolor']))){
        #set the background color of the page to user selection. 
        $bg_color = $_POST['favcolor'];

        echo<<<END

        <style>


            body{
                background-color: $bg_color;
            }

        </style>



END;
    }

?>




<body>
<?php
$cat='<img src="images/cat.png">';
$car='<img src="images/car.jpg">';
$ballon='<img src="images/balloon.jpg">';
$img = $_POST['image'];
 if(isset($_POST['submitForm'])&&(isset($_POST['image']))&& (isset($_POST['number']))){
    for($n=1;$n <= $_POST['number'];$n++){
        echo "$img";
    }
 }
?>
    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

    <b>Please enter a number: </b>
    <!--<limit the user to range 1-10>-->
    <input type="number" name="number" min="1" max="10" >
    <br>
    <br>

    <b>Please select a colour: </b>
    <!--<User will be able to select a color and will get a hexidecimal value back>-->
    <input type="color" name="favcolor" value="#ff0000">
    <br>
    <br>

    <b>Please select an image you would like to see: </b>
    <br>

    <input type="radio" name="image" value='<img src="images/car.jpg">'> Car<br><br>
  <input type="radio" name="image" value='<img src="images/cat.png">'>Cat<br><br>
  <input type="radio" name="image" value='<img src="images/balloon.jpg">'> Balloon
    <br>
    <br>
    <input type="submit" name="submitForm">
    </form>
</body>
</html>