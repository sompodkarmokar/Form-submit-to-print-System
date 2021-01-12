<?php  
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "sompod-test");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

        
       $sql = mysqli_select_db($db, DB_DATABASE) or die("unable to connect to database"); 
?>   
   <html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
        <h2>Sign Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Middle Name:</label>    
                    <input type = "text" name = "mname" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "lname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/> 
                       
                </div>  
                  <input type = "submit"/>
            </div>    
        </form>    
    </body>    
</html>    