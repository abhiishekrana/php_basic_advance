<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userInput.php" method="post">
        Name : <input type="text" name="username" placeholder="Enter name">
        Name : <input type="text" name="age" placeholder="Enter age">
        <input type="submit">

        <br>
        Your name is  
        <?php
           echo $_POST["username"];

        ?>
        <br>
        Your age is 
        <?php
           echo $_POST["age"];

        ?>

</form>
</body>
</html>