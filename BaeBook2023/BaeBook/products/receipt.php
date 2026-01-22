<?php
$message = "";

if (!empty($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $hours = $_POST["hours"];
    $DateLoc = $_POST["DateLoc"];
    $datebae = $_POST["datebae"];
    $date = $_POST["date"];
    $appt = $_POST["appt"];

    $multiplier = 100;
    $totalCost = $hours * $multiplier;
    date_default_timezone_set('Asia/Manila');

    $message = "Here's what we received.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/genty-demo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="../pic/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../pic/favicon-32x32.png">
    <link rel="manifest" href="pic/site.webmanifest">
	<!-- html2pdf CDN-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
	</script>

	<style>

		body{
			position: relative;
			height: 100vh;
			width: 100%;
			background-image:url("../pic/bg2.jpg") ;
			background-size: cover;
			background-position: center;
            overflow:hidden;
       }

        .invoice-box{
            background-color: white;
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
			font-size: 13px;
			line-height: 15px;
			font-family: 'Poppins', sans-serif;
        }
        
        .invoice-box table{
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td{
            padding: 5px;
            vertical-align: top;
        }

      
        .invoice-box table tr td:nth-child(2){
            text-align: right;
        }
        
        .invoice-box table tr.top table td{
            padding-bottom: 20px;
        }

        .invoice-box table tr.info td{
            padding-bottom: 40px;
        }
        .invoice-box table tr.heading td{
            color: white;
            margin-top: 10px;
            background-image: linear-gradient(to top, rgb(229, 0, 38), rgb(255 0 128));
            border-bottom: 2px solid #ddd;
            font-weight: bold;
        }
        .invoice-box table tr.details td{
            padding-bottom: 20px;
        }
        .invoice-box table tr.items td{
            border-bottom: 1px solid #ddd;
        }

        .container {
            text-align: center; 
        }

        .button button{
            margin: 25px;
            background-image: linear-gradient(to top, rgb(229, 0, 38), rgb(255 0 128));
            color: white;
            display: inline-block;
            width: 50%;
            padding: 10px;
            text-decoration: none;
            border: none;
        }

	</style>
</head>

<body>
	<div class="container" >
		
        <?php if (!empty($message)) : ?>
            <h3 style=" font-family: 'Poppins', sans-serif; text-align: center;"><strong><?php echo $message; ?></strong></h3>
        <?php endif; ?>

<div class="invoice-box" id="pdf-content">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <!-- next table -->
                <table>
                    <tr>
                        <td>
                            <h1 style=" padding: 0 7px; font-size: 15px;
                                        background-image: linear-gradient(to right, rgb(229, 0, 38), rgb(255 0 128));
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;
                                        font-family: 'Genty Demo', sans-serif;">BaeBook</h1>
                        </td>
                        <td>
                           Find your perfect companion! <br>
                            Created: <?php echo date("H:i:s Y-m-d"); ?> <br>
                        </td> 
                    </tr>
                </table>

                <!-- end the table -->
            </td>
        </tr>

        <tr class="info">
            <td colspan="2">
                <!-- inner tbale s-->
                <table>
                    <tr>
                        <td>
                        Name: <strong><?php echo $name; ?></strong><br>
                        Phone:<strong>+<?php echo $phone; ?></strong>
                        </td>
                        <td>Email: <strong><?php echo $email; ?></strong> <br>
                       <br></td>
                       
                        <td>
                            
                        </td>
                    </tr>
                </table>

                <!-- inner table end -->

            </td>
        </tr>

        <tr class="heading">
            <td>
             Label
        </td>
        <td></td>
      
    </tr>

    <tr class="items">
        <td>Girlfriend</td>
        <td><strong><?php echo $datebae; ?></strong></td>
    </tr>

    

    <tr class="items">
        <td>Desired hours</td>
        <td><strong> <?php echo $hours; ?></strong></td>
    </tr>

    <tr class="items">
        <td>Date Location</td>
        <td> <strong><?php echo $DateLoc; ?></strong></td>
    </tr>

    <tr class="items">
        <td>Meet up Time</td>
        <td><strong><?php echo $appt; ?></strong></td>
    </tr>

    <tr class="items">
        <td>Date</td>
        <td><strong><?php echo $date; ?></strong></td>
    </tr>
    <tr class="heading">
     <td>Payment Method</td>
        <td>Check #</td>
    </tr>

    <tr class="details">
        <td>Check</td>
        <td><strong>1001</strong></td>
    </tr>

    <tr class="heading">
        <td>Total Cost</td>
        <td></td>
    </tr>

    <tr class="heading">
        <td><?php echo "$". $totalCost; ?></td>
        <td></td>
       
    </tr>
    
    </table>
		</div>

        <button class="button" id="button">download receipt</button>
        
	</div>
</body>

<!-- Add this script tag after including html2pdf.bundle.js -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let button = document.getElementById("button");

        button.addEventListener("click", function () {
            var element = document.getElementById("pdf-content");

            html2pdf(element);
        });
    });
</script>

</html>
