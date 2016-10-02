<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Basic Form</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="http://www.travisharley.com/css/normalize.css" type="text/css">
        <link rel="stylesheet" href="http://www.travisharley.com/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="container bg-white">
            <form action="results.php" method="POST">
            <h2>Basic Form Example</h2> 
            Name: <input type="text" name="name" placeholder="Name:">
            <br><br>
            Email: <input type="text" name="email" placeholder="Email:">


                
            <h2>Major:</h2>    
            <ul>
                <li><span> Web Dev and Design</span><input type="radio" name="major" value="Web Dev and Design"></li>    
                <li><span> Computer Science</span><input type="radio" name="major" value="Computer Science"></li>    
                <li><span> CIT</span><input type="radio" name="major" value="CIT"></li>    
                <li><span> Computer Engineering</span><input type="radio" name="major" value="Computer Engineering"></li>    
            </ul>

            <h2>Places you have visited:</h2>
            <ul>
                <li><span> North America</span><input type="checkbox" name="visited[]" value="North America"></li>    
                <li><span> South America</span><input type="checkbox" name="visited[]" value="South America"></li>    
                <li><span> Europe</span><input type="checkbox" name="visited[]" value="Europe"></li>    
                <li><span> Asia</span><input type="checkbox" name="visited[]" value="Asia"></li>    
                <li><span> Australia</span><input type="checkbox" name="visited[]" value="Australia"></li>    
                <li><span> Africa</span><input type="checkbox" name="visited[]" value="Africa"></li>    
                <li><span> Antarctica</span><input type="checkbox" name="visited[]" value="Antarctica"></li>    
            </ul>
                
            <h2>Comments</h2>
            <textarea name="comment" rows="5" cols="40" value=""></textarea><br />
                
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                
              
        </form>
        </div>
        
    </body>
</html>