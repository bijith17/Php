<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <form action ="" method = "GET">  
         Username: <input type = "text" name = "username"> <br>  
         Blood Group: <input type = "text" name = "bloodgroup"> <br>  
        <input type="submit" name="" id=""> 
      </form>  
      Welcome <?php echo $_GET["username"]; ?> </br>  
      Your blood group is: <?php echo $_GET["bloodgroup"]; ?>  
   </body>  
</html> 