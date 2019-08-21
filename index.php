
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTERMEDIATE-EX-2</title>
</head>

<body>

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

    <input type="radio" name="image" value="car"> Car<br><br>
  <input type="radio" name="image" value="cat">Cat<br><br>
  <input type="radio" name="image" value="balloon"> Balloon

    
    
    <br>
    <br>
    <input type="submit" name="submitQuiz">
    </form>
</body>
</html>