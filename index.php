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
		 
           <?php include "contents.php";?>
			  

			 
				<?php include "sidebars.php";?>
             
			  
			 
		 
           </div>
		   </div>
		   </div>
	    </div>
		
		

 <?php include "/includes/footer.php";?>
 

</body>
</html>