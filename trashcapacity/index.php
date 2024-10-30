<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring ketinggian dan volume tampat sampah</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">
		.tangki {
			border-style: solid;
			width: 300px;
			height: 300px;
            left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-bottom-left-radius: 20px;
			border-bottom-right-radius: 20px;

		}

		.sampah {
			
            left: 50%;
			bottom: 0px;
			transform: translate(-50%);
			position: absolute;
			border-bottom-left-radius: 20px;
			border-bottom-right-radius: 20px;
			background-color: aqua;
		}

		.penutup {

            border-style: solid;
			width: 300px;
			height: 40px;
            left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;

		}

		.pegangan {

			border-style: solid;
			width: 40px;
			height: 20px;
            left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;

		}
	</style>


    <script type="text/javascript">
       $(document).ready(function() {
         setInterval(function() {
            $("#data").load('data.php')

		 }, 1000);

	   });
	</script>
</head>

<body>

	<div class="container" style="text-align: center;">
		<img src="#" styles="width: 120px; margin-top: 25px;">
		<h3>Sistem monitoring ketinggian dan volume tempat sampah<br> berbasis web
		</h3>

		<div style="font-size: 20px;">Tempat sampah (Tinggi max : 3 Meter)</div>

		<div id="data"></div>

		<img src="#" style="margin-top: 15px;">

	</div>

</body>



</html>