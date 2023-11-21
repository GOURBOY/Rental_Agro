<?php

	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
	.img1{
		filter: blur(4px);	 
		display:absolute;
			
	}
	.dis{
		position:absolute;
		height:350px;
		width:500px;
		top:200px;
		left: 500px;
		background-color: rgba(232, 223, 95, 0.749);
		
	}
</style>
</head>
<body>


	<div>
	<img  class="img1" src="farm.jpg" width="1550px" height="800px">

	<div class="dis"><h1><center>Merchant Check Out Page</center></h1>
	<form method="post" action="../../Paytm_Gateway_Final_Implementation/please_wait.html">
	<center><table border="12">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID* :</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID* :</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="20" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID* :</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="20" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel* :</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="20" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount* :</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						id="amountInput" readonly>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="PAY" type="submit" style="width:189px;"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		
	</form>  </div>
	
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script> 
	 var amount = sessionStorage.getItem('amount');
	
    // Set the value of the input field
    document.getElementById('amountInput').value = amount;

    // Now, you can use the 'amount' variable in this page as needed
    console.log('Amount:', amount);

	</script>
</body>
</html>