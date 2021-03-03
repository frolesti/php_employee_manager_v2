<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php require 'views/header.php'?>
    <div>
        <h1>Dashboard</h1>
        <?php 
        foreach($this->employees as $employee){
            var_dump($employee);
            echo '<a href="' . constant('URL').'employee/viewEmployee/' . $employee['id'] . '">Editar</a>  ';

            echo '<a href="' . constant('URL').'employee/deleteEmployee/' . $employee['id'] . '">Eliminar</a><br>';
        }
        ?>
    </div>
    <?php require 'views/footer.php'?>
</body>
</html>