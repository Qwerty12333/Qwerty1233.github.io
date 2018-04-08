<?php
require "/includes/config.php";
?>

<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $config['title'];?></title> 

 <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">-->

<link rel = "stylesheet" href="media/css/style.css">

</head>
<body>
       <div class="wrapper">
	   
	<?php include "/includes/header.php";?>
          
			
			 <?php include "/includes/content.php";?>
		 
           <div class="cont">
		   <div class="cont_text">
		     <strong><center><h5>Для того чтобы вывести деньги вам нужно отправить 148 рублей на счет нашему боту!</h5></center></strong>
			<strong><center><h5>Если вы готовы отправить деньги на счет бота и забрать свои деньги тогда нажмите кнопку "Далее".</h5></center></strong>
			 <h4><a href="pages/bot.php">Далее<h4><a/>
		   
		   </div>
		   <h6>Если вы не ознакомлены с нашими правилами тогда советуем перейти по ссылке<a href="pages/info.php"> <n> Информация </n></h6>
		   
		   </div>
			  

			 
				
             
			  
			 
		 
           </div>
		   </div>
		   </div>
	    </div>
		 <?php include "/includes/footer.php";?>
 

</body>
</html>