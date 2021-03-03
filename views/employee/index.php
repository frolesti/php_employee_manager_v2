<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>

    <?php require 'views/header.php'?>
    <div>
        <h1>Employee page</h1>

        <div><?php echo $this->message;?></div>
        <form action="<?php echo constant('URL');?>employee/insertEmployee" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" required>
            <label for="second_name">Second Name</label>
            <input type="text" name="second_name" required>
            <label for="age">Age</label>
            <input type="text" name="age" required>

            <input type="submit" value="Register Employee">
        </form>
    </div>

    <?php require 'views/footer.php'?>
</body>
</html>