<?php
	$variable = "8210424575531604"; //valid
	
	function ValidateLuhn(string $strNumber){
		$sum = array();
		$strNumber = preg_replace("/[^0-9]/", "", $strNumber);
		$arrNumber = str_split($strNumber);

 

		foreach($arrNumber as $intCtr => $value){
			array_push($sum,$intCtr-1 & 1 ? array_sum(str_split($value * 2)) : $value);
		}	

		return array_sum($sum) % 10 === 0;

	}

	if(isset($_POST['validate'])){


		if($_POST['validatecc']!=NULL){
			echo ValidateLuhn($_POST['validatecc']) ? '<div class="alert alert-success" role="alert">'.$_POST['validatecc'].' is valid!</div>': '<div class="alert alert-danger" role="alert">'.$_POST['validatecc'].' is invalid! </div>';
		}else{
			echo '<div class="alert alert-danger" role="alert">
  Input CC Number
</div>';
		} 
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title> ZyyberNux </title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 mt-5">
			
			<!-- Default form login -->
<form class="text-center border border-light p-5" action="" method="post">

    <p class="h4 mb-4">CC Validator</p>
    



  
    <input type="text" name="validatecc" class="form-control mb-4" placeholder="Enter CC Number" maxlength="16" onkeypress="return isNumberKey(event)"/>
    

   


    <button class="btn btn-danger btn-block my-4" type="submit" name="validate">Validate</button>

    

</form>
<!-- Default form login -->

		</div>
	</div>





</div>




</body>
</html>