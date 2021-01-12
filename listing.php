
   <?php    
    
     define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "sompod-test");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

        
       $sql = mysqli_select_db($db, DB_DATABASE) or die("unable to connect to database");    
    
if(isset($_GET['id'])){    
$sql1 = "delete from registration where id = '".$_GET['id']."'";    
$result = mysqli_query($sql, $sql1);    
}    
    
$sql1 = "select * from registration";    
$result = mysqli_query($sql, $sql1);    
?> 
    <?php    
 
    
while($row = mysqli_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->id;?>  
        </td>  
        <td>  
            <?php echo $row->fname;?>  
        </td>  
        <td>  
            <?php echo $row->mname;?>  
        </td>  
        <td>  
            <?php echo $row->lname;?>  
        </td>  
        <td>  
            <?php echo $row->pwd;?>  
        </td>  
        <td>  
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
        </td>  
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <?php } ?> 
<html>    
    <body onload="window.print()">    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>First Name</td>    
                <td>Middle Name</td>    
                <td>Last Name</td>    
                <td>Password</td>    
                <td>Confirm Password</td>    
                <td>Email</td>    
                <td>Contact No.</td>    
                <td>Gender</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>City</td>    
                <td>Country</td>    
                <td>Skills</td>    
                <td>Files</td>    
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html> 
