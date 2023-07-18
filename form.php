<body bgcolor="darkgrey">
	<table border="1" align="center">
		<tr bgcolor="orange"><th>TICKET</th></tr>
		<tr>
		<td bgcolor="lightyellow">
		<?php 
		$film=$_POST['vfilm'];
		$cinema=$_POST['vcinema'];
		$people=$_POST['vpeople'];
		$date=$_POST['vdate'];
		$time=$_POST['vtime'];

		for ($i = 1; $i <= $people; $i++) {
		echo "---------------------";
		echo "<br>$cinema<br>";
		echo "---------------------<br>";
		echo "$film<br>";
		echo "$date, $time<br><br>";
		echo "Rp 35.000<br>";
		}
		echo "<br>--------------------------------<br>";
		$total = $people * 35000;
		echo "You can pay : Rp $total,-";
		echo "<br>--------------------------------<br>";

		$ticket = fopen("struk_tiket.txt", "a") or die("File cannot open!!");
		echo "<br><br><br>~HISTORY~<br>";
		$gabung = $date.", ".$time." | ".$people." pengunjung | ".$film." | ".$cinema." | Total : Rp ".$total.",-\n";
		fwrite($ticket, $gabung);
		fclose($ticket);

		echo "<pre>";
		include("struk_tiket.txt");
		echo "</pre>";
		?>
		</td>
		</tr>
	</table>
</body>