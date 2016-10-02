<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Results</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://www.travisharley.com/css/normalize.css" type="text/css">
        <link rel="stylesheet" href="http://www.travisharley.com/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="container bg-white">
            <h2>Form Results</h2>
        <?php
        //printing out results for use
            //print_r($_POST);
            
            //set default values
            if (isset($_POST['submit'])) {
                $name = isset($_POST['name']) ? $_POST['name'] : "";
                $email = isset($_POST['email']) ? $_POST['email'] : "";
                $major = isset($_POST['major']) ? $_POST['major'] : "";
                $visited = isset($_POST['visited']) ? $_POST['visited'] : "";
                $comment = isset($_POST['comment']) ? $_POST['comment'] : "";
            } else {
                //otherwise set to empty.
                $name = "";
                $email = "";
                $major = "";
                $visited = "";
                $comment = "";
            }
        ?>

        <?php
        //print out what the values are.
            echo "Name: {$name} <br> ";
            echo "Email: Mail To: <a href='../'>{$email}</a> <br> "; //escape character
            echo "Major: {$major} <br>";
            echo "Places Visited: <br>";
            if (!empty($visited)){
                foreach($visited as $i){
                    echo "{$i} <br>";
                }
            }
            echo "Comments: {$comment}";
        ?>
        
        </div>
        
    </body>
</html>