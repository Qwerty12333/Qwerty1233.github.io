<?php
require "../includes/config.php";
?>

<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<title> <?php echo $config['title'];?></title> 

 <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">-->

<link rel = "stylesheet" href="../media/css/style.css">

</head>
<body>
       <div class="wrapper">
	   
	<?php include "../includes/header.php";?>
          
			
			 <?php include "../includes/content.php";?>
		 
           <div class="cont">
		   <div class="cont_text">
		     <h8>Номер счета WebMoney(WMR): R556527838827</br></h8>
			<h8> Номер счета WebMoney(WMZ): Z211039751027</h8></br>
			<h7>(после того как вы отправите деньги на счет нашему боту он автоматически оправит вам вашу сумму на счет с которого были отправлены 148 рублей.</br>
			Если же вы отправляли деньги с банкомата или телефона тогда наш бот свяжеться с вами чтобы обсудить куда нужно перекинуть деньги!)</h7>
		   
		   </div>
		   <h6>Если вы не ознакомлены с нашими правилами тогда советуем перейти по ссылке<a href="/pages/info.php"> <n> Информация </n></h6>
		   
		   </div>
			  

			 
				
             
			  
			 
		 
           </div>
		   </div>
		   </div>
	    </div>
		 <?php include "../includes/footer.php";?>
 

</body>
</html>