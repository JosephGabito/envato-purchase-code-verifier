<!DOCTYPE html>
<html>
<head>
	<title>Sample Envato Purchase Code Verifier</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<!-- // Include the EnvatoPurchaseCodeVerifier.php file that holds the verifier class.--> 
		<?php require_once 'EnvatoPurchaseCodeVerifier.php'; ?>
		<!-- // Create your own access token at (https://build.envato.com/create-token)-->
		<?php $access_token = 'TiTAZg0KTXtFFzibzxJkVi4ueJp6fh6Z'; ?>
		<!-- // Create new instance of EnvatoPurchaseCodeVerifier. -->
		<!-- // Pass your own access token -->
		<?php $purchase = new EnvatoPurchaseCodeVerifier($access_token); ?>

		<?php $buyer_purchase_code = filter_input(INPUT_POST, 'purchase_code', FILTER_DEFAULT); ?>

		<!-- check if user submits the form -->
		<?php if ( ! empty( $buyer_purchase_code ) ) { ?>

			<?php $verified = $purchase->verified($buyer_purchase_code); ?>
			<!-- User purchase code is good!-->
			<?php if ( $verified ) { ?>
				<?php
					 $item_id = $verified->item->id; 
					 $item_name = $verified->item->name; 
					 $buyer = $verified->buyer; 
					 $license = $verified->license; 
					 $amount = $verified->amount; 
					 $sold_at = $verified->sold_at; 
					 $supported_until = $verified->supported_until;
				 ?>
				 <h1>Valid Purchase Code</h1>
				 <table>
					<tr><td>Item ID:</td><td><?php echo $item_id; ?></td></tr>
					<tr><td>Item Name:</td><td><?php echo $item_name; ?></td></tr>
					<tr><td>Buyer:</td><td><?php echo $buyer; ?></td></tr>
					<tr><td>License:</td><td><?php echo $license; ?></td></tr>
					<tr><td>Amount:</td><td><?php echo $amount; ?></td></tr>
					<tr><td>Sold At:</td><td><?php echo $sold_at; ?></td></tr>
					<tr><td>Supported Until:</td><td><?php echo $supported_until; ?></td></tr>
				</table>
			<?php } else { ?>
				<!-- Invalid purchase code -->
				<h1>Invalid Purchase Code</h1>
			<?php } ?>

		<?php } else  { ?>
			<form action="index.php" method="post">
				<label>Purchase Code: </label>
				<input type="text" name="purchase_code" placeholder="Type or paste the buyer's purchase code here"><br>
				<input type="submit">
			</form>
		<?php } ?>

		
	</div>
</body>
</html>