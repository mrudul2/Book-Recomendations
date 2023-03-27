<!DOCTUPE html>
<html>


<style>
.mySlides {display:none;}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width:950px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  /* background: rgb(0, 0, 0); Fallback color */
  /* background: rgba(0, 0, 0, 0.5);  Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  text-align: center;
  font-size: 30px;
}

body{
background-image: url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWVzdGhldGljJTIwYm9va3N8ZW58MHx8MHx8&w=1000&q=80.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  text=align: center;
}

.info{
  background-color:#D2B48C;
  padding: 18px;
   border-radius: 10px;
}

.topnav {
  background-color: #8B4513;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
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
<body>

<div class="topnav">
  <a href="home.php">Home</a>
  <a href="index.php">Search</a>
  <a href="form.php">Feedback</a>
  <a class="active" href="about.php">About</a>
</div>
<br>
 <div class="container">
  <div class="center">
    <img class="mySlides" src="https://s.gr-assets.com/assets/about/headerImages/About-Carousel-1-4ecdb327a458a36e6e897abe7839e3b9.jpg" alt="About carousel 1" style="width:100%">
    <img class="mySlides" src="https://s.gr-assets.com/assets/about/headerImages/About-Carousel-2-9009546b74c49cece686733bbbf5e5d7.jpg" alt="About carousel 2" style="width:100%">
    <img class="mySlides" src="https://s.gr-assets.com/assets/about/headerImages/About-Carousel-3-735e3eb6fd44644fc310139d9e2ebbed.jpg" alt="About carousel 3" style="width:100%">
   </div>
  <div class="content">
    <p><div>
      The right book in the right hands at the right time
     </div>
     <div>
       can change the world.
     </div></p>
  </div>
 </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<br><br>

<div class="info">
   <h2>Who We Are</h2>
    <p>
      Bringing answer to your "<b>WhichBooks</b> will this subject need?" question. WhichBooks is a website for students or professors looking for book recommendations. Our mission is to help people find the 'Tech Books' that they want for making our future generations more and more technologically advance. We are out here helping you get our grades up or helping you with your research.
    </p>
</div>
<br>
<div class="info">
   <h2>A Few Things You Can Do On WhichBooks</h2>
   <ul id='goodreadsFeaturesList'>
     <li>WhichBooks is completely FREE!</li>
     <li>Top book recommendations based on certified feedbacks.</li>
     <li>Find your next study book in one click!</li>
     <li>Give detailed feedback on books that help you.</li>
  </ul>
</div>
<br>
<div class="info">
  <h2>A Message From Our Founder</h2>
    <p>
   Books play a significant role in our life. They say that “When you open a book, you open a new world”. I believe that everyone would agree with this statement as books have become
   inevitable to mankind. For the majority of people, books are part of their everyday life. A book is like a best friend who will never walk away from you.
   Books are packed with knowledge, insights into a happy life, life lessons, love, fear, prayer and helpful advice. One can read about anything under the sun. 
  Books have been here for centuries and without them today’s knowledge of our past ancestors, cultures and civilizations would have been impossible. 
  </p>
  <p>
  A book communicates knowledge, and not only knowledge but wisdom of all kinds. They say that “The more you read, the more well-read you are”.
  In simple terms what this means is that the more you read the more exposed you are, your attitudes, your ideas and your imagination changes. 
  I believe that my personality, behaviour, ideas and knowledge are all built on the books I have read. Nothing can add to our intellect more than reading a book.
  </p>
<p>
<b>Knowledge is power, and power is best shared among readers.</b>
</p>
</div>
<br>
<div class="info">
<pre style="font-size:15px;">
Founders: Mrudul Joshi
          Disha Shete</pre>
</div> 
</div>
</body>
</html>
