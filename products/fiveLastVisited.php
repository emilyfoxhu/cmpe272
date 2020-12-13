<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BreadnSweets</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
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
        <li><a href="../destroy.php">Market</a></li>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="../about.html">ABOUT</a></li>
        <li><a href="../products.php">PRODUCTS</a></li>
        <li><a href="../services.html">SERVICES</a></li>
        <li><a href="../news.html">NEWS</a></li>
        <li><a href="../contact.php">CONTACTS</a></li>
		<li><a href="../user.html">USER</a></li>
      </ul>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
      <h3>&nbsp;</h3>
      <h3>Five Latest Visited Products(the most recent is at the top):</h3>
      <br/><br/>
        <table border="5" cellpadding="0" cellspacing="2">
            <tr><td bgcolor="#00bfff">Product Name</td></tr>
            <?php
            $count = 5;
            foreach (array_reverse($_COOKIE) as $key => $value){
                if ( $count > 0 )
                    print("<tr><td bgcolor='#faebd7'>$key</td></tr>");
                $count --;
            }
            ?>
        </table>
      <strong></strong>    </article>
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
    <p class="social_icon"><img src="../images/foot1.jpg" alt="" width="100" height="0" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/foot2.jpg" width="204" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/foot3.jpg" width="900" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="../images/foot4.jpg" width="1137" alt="" class="thumbnail"/></p>
  </div>
  <footer class="secondary_header footer">
    <div class="copyright">&copy;2020 - BREAD&amp;SWEETS WEBPAGE&nbsp; <strong>&nbsp;</strong></div>
  </footer>
</div>
</body>
</html>
