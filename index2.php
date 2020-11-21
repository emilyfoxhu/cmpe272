<!DOCTYPE html>
<html>
<head>
    <title>Voting</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
    
</head>
<body>
    <div data-role="page" id="firstPage">
        <div data-role="header">
            Q1:Do you want to have a pet?
        </div>
        <div data-role="content">
			<form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
          <a href="#secondPage">Next</a>
        </div>
		 
			
    </div>
    <div data-role="page" id="secondPage">
        <div data-role="header">
        	Q2:Do you like dog?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#thirdPage">Next</a>
    </div>
	
    <div data-role="page" id="thirdPage">
        <div data-role="header">
        	Q3:Do you like cat?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#fourthPage">Next</a>
    </div>
	
	<div data-role="page" id="fourthPage">
        <div data-role="header">
        	Q4:Do you like fish?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#fifthPage">Next</a>
    </div>
	
	
	<div data-role="page" id="fifthPage">
        <div data-role="header">
        	Q5:Do you like to keep more than one pet at home?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#sixthPage">Next</a>
    </div>
	
	<div data-role="page" id="sixthPage">
        <div data-role="header">
        	Q6:Do you like quiet pet?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#seventhPage">Next</a>
    </div>
	
	<div data-role="page" id="seventhPage">
        <div data-role="header">
        	Q7:Will you take care of your pet every day?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#eightthPage">Next</a>
    </div>
	
	<div data-role="page" id="eightthPage">
        <div data-role="header">
        	Q8:Will your parents agree to have pet?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#ninthPage">Next</a>
    </div>
	
	<div data-role="page" id="ninthPage">
        <div data-role="header">
        	Q9:Do you like to play with your pet?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#tenthPage">Next</a>
    </div>
	
	<div data-role="page" id="tenthPage">
        <div data-role="header">
        	Q10:Will you give your pet a name?
        </div>
        <div data-role="content">
            <form method = "post" action = "backend.php">
				<p>
					<label for="rating">Select:</label>
					<select name = "select">
						<option value="" disabled selected>choose</option>
						<option value=1>yes</option>
						<option value=0>no</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Submit">
				</p>
			</form>
        <a href="#finalPage">Next</a>
    </div>
	
	<div data-role="page" id="finalPage">
        <div data-role="header">
        	Your Answer:
			<?php
			$servername="us-cdbr-east-02.cleardb.com";
			$username="b4f09a430a2ca0";
			$password="ca8322d2";
			$dbname = "heroku_b359504503ae920";

			if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
				 die("Cannot connect to database");

			$sql1 = "SELECT choose from heroku_b359504503ae920.yes";
            $result1 = mysqli_query($conn, $sql1);
			?>
        </div>
        <div data-role="content">
            <a href="#finalPage">Submit</a>
        </div>
        <div data-role="footer">
            Footer of final page
        </div>
    </div>
</html>

<script type = "text/javascript"> (function(d, w) { var x = d.getElementsByTagName('SCRIPT')[0]; var f = function() { var _id = 'lexity-pixel'; var _s = d.createElement('script'); _s.id = _id; _s.type = 'text/javascript'; _s.async = true; _s.src = "//np.lexity.com/embed/YW/866f949dfc4b938ab836dd1f5449b291?id=195e5314a8ea"; if (!document.getElementById(_id)) { x.parentNode.insertBefore(_s, x); } }; w.attachEvent ? w.attachEvent('onload', f) : w.addEventListener('load', f, false); }(document, window)); </script>