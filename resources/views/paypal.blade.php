

<!DOCTYPE html>

<html>

<head>

	<title>LaravelCode - Paypal Integration Demo In PHP</title>

	<link rel="stylesheet" type="text/css" href="https://laravelcode.com/css/app.css">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<?php

		// test url

		//$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';

		// live url

		$paypalUrl='https://www.paypal.com/cgi-bin/webscr';

		$paypalId='vttodorov94@gmail.com';

	?>

	<div id="app">

        <nav class="navbar navbar-default navbar-static-top">

            <div class="container">

                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">

                        <span class="sr-only">Toggle Navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <!-- Branding Image -->

                    <a class="navbar-brand" href="https://laravelcode.com/">

                        LaravelCode Demo

                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Left Side Of Navbar -->

                    <ul class="nav navbar-nav">



                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">



                    </ul>

                </div>

            </div>

        </nav>

		<div class="container">

		    <div class="row">

		        <div class="col-md-12 col-md-offset-0">

		            <div class="panel panel-default">

		                <div class="panel-heading">Products List</div>

		                <div class="panel-body">

		                	<div class="col-md-4">

		                		<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

		                			<input type="hidden" name="business" value="<?php echo $paypalId; ?>">

								    <input type="hidden" name="cmd" value="_xclick">

								    <input type="hidden" name="item_name" value="It Solution Stuff">

								    <input type="hidden" name="item_number" value="1">

								    <input type="hidden" name="amount" value="1">

								    <input type="hidden" name="no_shipping" value="1">

								    <input type="hidden" name="currency_code" value="USD">

								    <input type="hidden" name="cancel_return" value="/cancel.php">

								    <input type="hidden" name="return" value="/success.php">

									<figure class="snip1249">

									  <div class="image">

									    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample85.jpg" alt="sample85"/><i class="ion-ios-star-outline"></i>

									  </div>

									  <figcaption>

									    <h3>Time Piece</h3>

									    <p>I'm killing time while I wait for life to shower me with meaning.</p>

									    <div class="price">

									      <s>$99.00</s>$84.00

									    </div>

									    <button  class="add-to-cart">Pay By Paypal</button>

									  </figcaption>

									</figure>

								</form>

		                	</div>

		                </div>

		            </div>

		        </div>

		    </div>

		</div>

    </div>


</body>

</html>
