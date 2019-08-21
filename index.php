
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
    <input type="number" name="number" min="1" max="10" >
    <br>

    
    

    
    <input type="submit" name="submitQuiz">
    </form>
</body>
</html>