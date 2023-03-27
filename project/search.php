<!DOCTYPE html>
<html>
<style>
body{
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
<body>
<?php 
include "connect.php"; 
include "style.css";


if($_POST["search"]==""){
echo "<h2>No results found</h2>";
echo "<h2><a href='index.php'>Exit</a></h2>";
}
else{
$search=trim($_POST["search"]);

$query=$db->prepare("SELECT* FROM recommendations WHERE BookName like '%$search%' or Review like '%$search%' ORDER BY Ratings DESC");
$query->execute(array());
$control=$query->fetchAll(PDO::FETCH_OBJ);
$count=$query->rowCount();
if($count>0) { ?>
  <div class="main-div">
  <h1>Recommended books based on searched name</h1><br>
  <div class="center-div">
  <div class="table-responsive">
  <table>
    <tr>
       <td><mark style="background-color:#ADD8E6;">BookName</mark></td>
        <td><mark style="background-color:#ADD8E6;">Author</mark></td>
        <td><mark style="background-color:#ADD8E6;">Publication</mark></td>
       <td><mark style="background-color:#ADD8E6;">Review</mark></td>
        <td><mark style="background-color:#ADD8E6;">Ratings</mark></td>
   </tr>
   <?php
foreach($control as $list){?>
  <tr>
     <td><?php echo $list->BookName;?></td>
     <td><?php echo $list->Author;?></td>
     <td><?php echo $list->Publication;?></td>
     <td><?php echo $list->Review;?></td>
     <td><?php echo $list->Ratings;?></td>
  </tr>
   
<?php }?>
</table>
<a href='home.php'>
        <button class="GFG">
            HOME
        </button>
    </a>
</div>
</div>
</div>

 
<?php }else{
echo "<h2>No results found</h2>";
/*<a href='home.php'>
        <button class="GFG">
            HOME
        </button>
    </a>*/
}

}


?>

</body>
</html>
