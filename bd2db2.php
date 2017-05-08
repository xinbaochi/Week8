<?php 
			
	$link = @mysqli_connect(
			'localhost',
			'root',
			'v85112',
			'campreply'
			);

	if($link){
	echo "DB Connection!";
	}else{
	echo "DB Connection Failed<br>";
	}

	mysqli_query($link,"SET NAMES utf8");
	
	$Name=$_POST["Name"];
	$id=$_POST["id"];
	$h=$_POST["hnum"];
	$c=$_POST["cnum"];
	$medal=$_POST["medal"];
	$main=$_POST["main"];
	
	$sql2="INSERT INTO bd1 (name,id,hnum,cnum,medal,main) VALUES ('$Name','$id','$h','$c','$medal','$main')";
	$result=mysqli_query($link,$sql2);
	$result = mysqli_query($link, "SELECT * FROM bd1");

	echo "<table border=1 rules='all' cellpadding='10'>";

	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		echo "<td>";
		echo $row["no"];
		$id=$row["no"];
		echo "</td><td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["id"];
		echo "</td><td>";
		echo $row["hnum"];
		echo "</td><td>";
		echo $row["cnum"];
		echo "</td><td>";
		echo $row["medal"];
		echo "</td><td>";
		echo $row["main"];
		echo "</td>";
		echo "</tr>";
	}

	echo "</table>";

	echo "</div>";

	echo "<br>";
	echo "<br>";

	echo "<div class='align-center'>";
	echo "<a href='bdcamp.html'>";
	echo "<input type='submit' value='重新填選' class='align-center'>";
	echo "</a>";
	echo "&nbsp";
	echo "&nbsp";
	echo "<a href='https://forum.gamer.com.tw/A.php?bsn=17532'>";
	echo "<input type='button' value='關閉試窗' onclick='window.close()' class='align-center'>";
	echo "</a>";
	echo "</div>";

mysqli_close($link);
?>
