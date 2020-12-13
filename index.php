<?php
list($sid, $ext) = explode('-', $_GET['sessid']);
//echo 'sid is' .$sid . '\n';
if($sid) {
    session_id($sid);
    session_start();
}
else {
    session_regenerate_id();
    session_start();
}
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BreadnSweets</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/brush-script-std:n4:default;unifrakturcook:n7:default;devonshire:n4:default.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
        <h1 class="title"> Bread &amp; Sweets</h1>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li><a href="destroy.php">Market</a></li>
        <li><a href="index.php">HOME</a></li>
		<li><a href="about.html">ABOUT</a></li>
        <li><a href="products.php">PRODUCTS</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="news.html">NEWS</a></li>
        <li><a href="contact.php">CONTACTS</a></li>
		<li><a href="user.html">USER</a></li>
      </ul>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
      <h3>&nbsp;</h3>
      <h3>Home_—— our story begins</h3>
      <p>To find the perfect formula, we first need the perfect ingredients. From 2020, we will make better use of the kitchen to make cakes for friends and family. The cakes we made are delicious, unlike anyone else's tasted. Friends and family members have met their needs and are getting more and more happiness.&nbsp;</p>
      <p>We plan to spread our company's unique recipes and cake-making tools around the world. There is a certain gap in making the most delicious cake in the world, but we have not compromised. We use real eggs, butter and cream cheese to make the most satisfying desserts. Including freshly baked bread, cakes, yogurt, coffee, we are still trying more new tricks.</p>
      <p>We customize birthday cakes for children, and we can provide fast express service, which can be reached the next day. Remember to store the cake in the refrigerator.&nbsp;</p>
      <p>The Bread&amp;Sweets brand has grown nationwide and has established a total of 400 branches in 10 countries. Each bakery still retains the warmth and nostalgia of its hometown. Therefore, whether you like to enjoy cakes, breads, coffee, or desserts, you can be sure that what we provide is the perfect one.&nbsp;</p>
<strong></strong>    </article>
    <aside class="right_article"><img src="images/placeholder.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
  <div class="row"> </div>
  <div class="row blockDisplay">
    <div class="column_half left_half">
      <h2 class="column_title"><strong>J O I N</strong></h2>
    </div>
    <div class="column_half right_half">
      <h2 class="column_title"><strong>U S !</strong></h2>
    </div>
  </div>
  <div class="social">
    <p class="social_icon"><img src="images/foot1.jpg" alt="" width="100" height="0" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/foot2.jpg" width="204" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/foot3.jpg" width="900" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/foot4.jpg" width="1137" alt="" class="thumbnail"/></p>
  </div>
  <footer class="secondary_header footer">
    <div class="copyright">&copy;2020 - BREAD&amp;SWEETS WEBPAGE&nbsp; <strong>&nbsp;</strong></div>
  </footer>
</div>
</body>
</html>
