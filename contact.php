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
      <h3>contact information&nbsp;</h3>
		<p>
		<?php 
		$file = fopen("contacts.txt", "r") or die("Fail to open file.");
		while(!feof($file)) {//output each line 
			echo fgets($file) . "<br>";
		}
		fclose($file);
		?>
      </p>
		</br></br>
	  <h3>secure section&nbsp;</h3>
		<p><a href="secret.html">log in to have a look!</a></p>
<strong></strong>    </article>
    <aside class="right_article"><img src="images/news.jpg" alt="" width="750" height="500" class="placeholder"/> </aside>
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
