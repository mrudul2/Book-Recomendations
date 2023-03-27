<!DOCTYPE html>
<html>
<head>
<style>
.mycss{
  font-size: 22px;
  background-color: #f2f2f2;
  }
.mycssa{
 background-color: #f2f2f2;
 font-size: 30px;
  }

div{
background-image: url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWVzdGhldGljJTIwYm9va3N8ZW58MHx8MHx8&w=1000&q=80.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.GFG {
       background-color: #f2f2f2;
       border: 2px solid black;
       color: black;
       padding: 5px 10px;
       text-align: center;
       display: inline-block;
       font-size: 20px;
       margin: 10px 30px;
       cursor: pointer;
     }
</style>
</head>
<div>
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="whichbooks";

$con=mysqli_connect($server_name,$username,$password,$database_name);
if(!$con)
{
  die("connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['save']))
{
$BookName= $_POST['BookName'];
$Author= $_POST['Author'];
$Publication = $_POST['Publication']; 
$Review= $_POST['Review'];
$Ratings= $_POST['Ratings'];

$sql_query="INSERT INTO recommendations(BookName,Author,Publication,Review,Ratings)VALUES('$BookName','$Author','$Publication','$Review','$Ratings')";

if(mysqli_query($con,$sql_query))
{
echo "New entry";
}
else{
echo "Error:" .$sql."".mysqli_error($con);
}
mysqli_close($con);
}

echo "<p class='mycssa'><br><u><b>Your Feedback</b></u><br></p>";

echo "<p class='mycss'><br><b>BookName:</b> $BookName</p>";
echo "<br>";
echo "<p class='mycss'><br><b>Author:</b> $Author<br></p>";
echo "<br>";
echo "<p class='mycss'><br><b>Publication:</b> $Publication</p>";
echo "<br>";
echo "<p class='mycss'><br><b>Review: </b>$Review</p>";
echo "<br>";
echo "<p class='mycss'><br><b>Ratings:</b>$Ratings<br></p>"
?>
<a href='home.php'>
        <button class="GFG">
            HOME
        </button>
    </a>
</div>
</html>

