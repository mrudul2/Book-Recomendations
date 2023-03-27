<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewpoint" content="width=device-width, intial-scale=1.0">
   <title>Search</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
   <style>
     body {
       background-image: url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWVzdGhldGljJTIwYm9va3N8ZW58MHx8MHx8&w=1000&q=80.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;  
       background-size: cover;
}
     .search-box{
           
            position:absolute;
            top:30%;
            left:35%;
            
               }
 
     i{
        padding:10px 5px;
      }
     button{
        border:none;
        background-color:#ffd000;
        outline:none;
        cursor:pointer;
           }
    input[type=text] {
  width: 280px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  
}


input[type=text]:focus {
  width: 150%;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

/* Add a black background color to the top navigation */
.topnav {
  background-color: #8B4513;
  overflow: hidden;
}

.topnav a {
  float: left;
  color: #F4A460;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #F5DEB3;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #DEB887;
  color: white;
}


</style>
</head>
<body>
 <div class="topnav">
  <a href="home.php">Home</a>
  <a class="active" href="index.php">Search</a>
  <a href="form.php">Feedback</a>
  <a href="about.php">About</a>
</div>

    <div class="search-box">
     <form action="search.php" method="POST">
        <i class="fa fa-search"></i>
        <input type="text" name="search" placeholder="Type the book name to search">
     </form>

</body>
</html>