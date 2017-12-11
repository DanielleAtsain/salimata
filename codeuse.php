<?php 
$host="localhost";
$user="root";
$mdp="";
$db="db_codeuse";
$link = mysqli_connect($host,$user,$mdp);
mysqli_select_db($link,$db);
 ?>


<html>
	<head></head>
	<body>
		<form action="" name="form1" method="Post">
			nom : <input type="text" name="nom" value=""><br>
			prenom : <input type="text" name="prenom" value=""><br>
			telephone : <input type="text" name="tel" value=""><br>
			email : <input type="text" name="email" value=""><br>
			description : <br><textarea name="description"></textarea><br>
			<input type="submit" value="enregistrer" name="submit">
		</form>
		<?php 
			if (isset($_POST["submit"])) {
				/*echo $_POST["nom"]."<br>";
				echo $_POST["prenom"]."<br>";
				echo $_POST["tel"]."<br>";
				echo $_POST["email"]."<br>";
				echo $_POST["description"]."<br>";
				die();*/
				$sql="INSERT INTO codeuses (nom,prenom,tel,adresse,description)
				 VALUES('".$_POST["nom"]."',
				 		'".$_POST["prenom"]."',
				 		'".$_POST["tel"]."',
				 		'".$_POST["email"]."',
				 		'".$_POST["description"]."');";//die($sql);
				$result=mysqli_query($link,$sql);
				if ($result) {
					echo "insertion reussie";
				}else{
					echo mysqli_error($link);
					die();
				}
			}
		?>
	</body>
</html>