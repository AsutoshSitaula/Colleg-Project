<?php  
  
include_once('db.php');  
   
if(isset($_POST['celeb_name']))  //if we have name then we will insert it into the database
{  
  $celeb_name = $_POST['celeb_name'];  
    
  if(mysql_query("INSERT INTO project_asutosh VALUES('','$celeb_name')"))  
echo "Successful Insertion!";  
  else  
echo "Please try again";  
}  
      
$res = mysql_query("SELECT * FROM project_asutosh");  
?>  
   
<form action="." method="POST">  
Name: <input type="text" celeb_name="celeb_name"/><br />  
<input type="submit" value=" Enter "/>  
</form>  
   
<h1>List of companies ..</h1>  
< ?php  
while( $row = mysql_fetch_array($res) )  
  echo "$row[id]. $row[celeb_name]  
  <a href='edit.php?edit=$row[id]'>edit<br />";  
?>  