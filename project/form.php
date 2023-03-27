<!DOCTYPE HTML>
<html>
<head>
<title>Feedback form</title>
<style>
* {
  box-sizing: border-box;
}

textarea {
  width: 50%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 15pt;
  resize: none;
}

input[type=text] {
   font-size: 15pt; 
   height: 30px; 
   width:280px;
}

input[type=float] {
   font-size: 15pt; 
   height: 30px; 
   width:280px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/*.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}*/

h2{
  background-color: #A9A9A9;
  padding: 10px;
  border-radius: 5px;
  font-size: 30px;
  }

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
mark { 
  background-color:#EAEDED;
  color: black;
  font-size: 25px;
}
body{
background-image: url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWVzdGhldGljJTIwYm9va3N8ZW58MHx8MHx8&w=1000&q=80.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

/* Add a black background color to the top navigation */
.topnav {
  background-color: #E8DAEF;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #A569BD;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #F4ECF7;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #D2B4DE;

  color: white;
}

</style>
</head>
<body>


<div>
<h2>Feedback Form</h2>


<div class="topnav">
  <a href="home.php">Home</a>
  <a href="index.php">Search</a>
  <a class="active" href="form.php">Feedback</a>
  <a href="about.php">About</a>
</div>


<hr>
<form method="post" action="sub.php">  
<mark>BookName:</mark> <input type="text" name="BookName" placeholder="bookname">
<br><br>
<mark>Author:</mark> <input type="text" name="Author" placeholder="author name">
<br><br>
<mark>Publication:</mark> <input type="text" name="Publication" placeholder="publication" >
<br><br>
<mark>Review:</mark> <textarea cols="32" name="Review" rows="5" placeholder="Feedback"></textarea>
<br><br>
<mark>Ratings:</mark> <input type="float" name="Ratings" placeholder="stars out of 5">
<br><br>
<input type="submit" name="save" value="Submit">
<br>
<br>
<br>
<br><br>
</form>

<br>
</div>
</body>

</html>
<?php
include "connect.php";
?>