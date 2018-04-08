 
 
       <div id="header">
		 <div class="header_logo">
           <div class="score">
   <?php $article = mysqli_query($connection, "SELECT * FROM `articles`" );  
   $art = mysqli_fetch_assoc($article);
   mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 20 ");

?>

			<ul><li><b><a href="#">Ваш счет: <?php echo $art ['views']; ?> руб.</a></li></b></ul><br>
				<div class="up">
			     <ul><li><a href="/money.php">Вывести</a></li></ul>
				  </div>
				 </div>
			    <center> <h1>Официальный сайт tigr</h1></center>
			   <center> <h3>Зарабатывай вместе с нами!</h3></center>
			  </div>
			 </div>