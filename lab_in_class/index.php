<!DOCTYPE html>
<html>
<head>
<title>doraemon</title>
<style type="text/css">
	canvas{margin:50px auto; display: block;}
</style>
</head>
<body>
	<canvas width="400" height="600" id="canvas"></canvas>
	<script type="text/javascript">
	window.onload=function(){
		var cxt=document.getElementById('canvas').getContext('2d');
		cxt.beginPath();
		cxt.lineWidth=1;
		cxt.strokeStyle="black";
		cxt.arc(200,175,175,0.6*Math.PI,0.3*Math.PI);
		var head = cxt.createRadialGradient(260,25,8,200,175,175);
		head.addColorStop(0,"white");
		head.addColorStop(1,"#16B3DC");
		cxt.fillStyle=head;
		cxt.fill();
		cxt.stroke();
		//face
		cxt.beginPath();
		cxt.fillStyle="white";
		cxt.moveTo(110,110);
		cxt.quadraticCurveTo(-10,200,120,315);
		cxt.lineTo(280,315);
		cxt.quadraticCurveTo(410,210,290,110);
		cxt.lineTo(110,110);
		cxt.fill();
		cxt.stroke();
		//eye
		cxt.beginPath();
		cxt.lineWidth=1;
		cxt.fillStyle="white";
		cxt.moveTo(110,100);
		cxt.bezierCurveTo(110,25,200,25,200,100);
		cxt.bezierCurveTo(200,175,110,175,110,100);
		cxt.moveTo(200,100);
		cxt.bezierCurveTo(200,25,290,25,290,100);
		cxt.bezierCurveTo(290,175,200,175,200,100);
		cxt.fill();
		cxt.stroke();

		//nose
		cxt.beginPath();
		cxt.arc(200,165,25,0,2*Math.PI);
		var radial = cxt.createRadialGradient(212,155,3,200,165,25);
		radial.addColorStop(0,"white");
		radial.addColorStop(1,"#D05823");
		cxt.fillStyle=radial;
    	cxt.fill();
		cxt.stroke();
        
		//eye
		cxt.beginPath();
		cxt.fillStyle="black";
		doraemon(cxt,230,110);
		cxt.fill();
		cxt.stroke();
		cxt.beginPath();
		cxt.fillStyle="black";
		doraemon(cxt,170,110);
		cxt.fill();
		cxt.stroke();	
	}
	function doraemon(cxt,x,y){
		cxt.arc(x,y,12,1,2*Math.PI);
	}
	</script>
</div>
</body>
</html>
