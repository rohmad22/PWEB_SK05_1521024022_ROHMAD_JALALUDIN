<html>
<head>
    <title>Studi Kasus 5_4 Rohmad jalaludin</title>
	<style>
		table, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		td {
			padding: 2px;
		}
		table#t 	{
			text-align:center;
		}

	</style>
</head>
<body>
<table>


	<?php
	for ($x = 5; $x <= 100; $x++){
		echo '<tr>';
		for($y = $x; $y <= $x+4995; $y = $y + 5){
			echo "<td/>$y</td>";
		}
		echo '</tr>';
	};
	?>
</body>
</html>