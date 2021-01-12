<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sompod-test");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lname']);
$mname = mysqli_real_escape_string($link, $_REQUEST['mname']);
$pwd = mysqli_real_escape_string($link, $_REQUEST['pwd']);
 
// Attempt insert query execution
$sql = "INSERT INTO registration (fname, mname, lname, pwd) VALUES ('$first_name', '$mname' , '$last_name', '$pwd')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if(isset($_GET['id'])){    
$sql1 = "delete from registration where id = '".$_GET['id']."'";    
$result = mysqli_query($link, $sql1);    
}
 $sql = "select * from registration";    
$result = mysqli_query($link, $sql); 
?>

<html>    
    <body onload="window.print()">    
        <table width = "100%" border = "1" cellspacing = "3" cellpadding = "3">    
            <tr>    
                <td style="width: 5%;">Id</td>    
                <td style="width: 23.75%;">First Name</td>    
                <td style="width: 23.75%;">Middle Name</td>    
                <td style="width: 23.75%;">Last Name</td>    
                <td style="width: 23.75%;">Password</td>    
                <!--<td>Confirm Password</td>    
                <td>Email</td>    
                <td>Contact No.</td>    
                <td>Gender</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>City</td>    
                <td>Country</td>    
                <td>Skills</td>    
                <td>Files</td> -->   
                <!--<td colspan = "2">Action</td> -->   
            </tr>    
        </table>    
    </body>    
</html> 
<?php    

    
while($row = mysqli_fetch_object($result)){    
    
    
?>  <table width = "100%" border = "1" cellspacing = "3" cellpadding = "3"> 
    <tr>  
        <td style="width: 5%;">  
            <?php echo $row->id;?>  
        </td>  
        <td style="width: 23.75%;">  
            <?php echo $row->fname;?>  
        </td>  
        <td style="width: 23.75%;">  
            <?php echo $row->mname;?>  
        </td>  
        <td style="width: 23.75%;">  
            <?php echo $row->lname;?>  
        </td>  
        <td style="width: 23.75%;">  
            <?php echo $row->pwd;?>  
        </td>  
        <!--<td>  
            <?php echo $row->cnf;?>  
        </td>  
        <td>  
            <?php echo $row->mail;?>  
        </td>  
        <td>  
            <?php echo $row->number;?>  
        </td>  
        <td>
            <?php echo $row->sex;?>  
        </td>  
        <td>  
            <?php echo $row->address;?>  
        </td>  
        <td>  
            <?php echo $row->code;?>  
        </td>  
        <td>  
            <?php echo $row->city;?>  
        </td>  
        <td>  
            <?php echo $row->country;?>  
        </td>  
        <td>  
            <?php echo $row->skills;?>  
        </td>  
        <td>  
            <?php echo $row->attach_file;?>  
        </td>  -->
         
        <tr></table>   
            <?php }  
?> 
<?php // Close connection
mysqli_close($link); ?>