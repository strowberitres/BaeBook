<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Subscription</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/genty-demo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="../pic/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../pic/favicon-32x32.png">
    <link rel="manifest" href="pic/site.webmanifest">
    <style>
        body {
            background-image: url("../pic/bg2.jpg");
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: "Poppins", sans-serif;
            color: #fff;
        }

        .con {
            text-align: center;
        }

        .bronze {
            background-image: url("../pic/bg5.jpg");
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
            margin: auto;
        }

        h1 span {
            color: #e67e22;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
            width: 120px; /* Adjust the width as needed */
        }

        input,
        select,
        textarea {
            flex: 1;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #fff;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        select {
            cursor: pointer;
        }

        button {
            background-color: #E80051;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #d35400;
        }

        .success {
            margin-top: 15px;
            background-color: #2ecc71;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
        }

        h1 {
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    <div class="con">
        <h1>Gold Subscription</h1>

        <div class="bronze" id="#">
            <form action="greceipt.php" method="POST">

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Enter your Email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" placeholder="Enter your Phone" required>
                </div>

                <div class="form-group">
                    <label for="hours">Desired hours:</label>
                    <input type="number" name="hours" placeholder="$200 / hr" min="1" max="12" required>
                </div>

                <div class="form-group">
                    <label for="datebae">Enter a Bae:</label>
                    <input type="text" name="datebae" placeholder="Enter your chosen girl" required>
                </div>

                <div class="form-group">
                    <label for="DateLoc">Meetup location:</label>
                    <select name="DateLoc" required>
                        <option value="">------</option>
                        <option value="Night Club">Night Club</option>
                        <option value="Bar">Bar</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Coffee Shop">Coffee Shop</option>
                        <option value="Karaoke">Karaoke</option>
                        <option value="Mini Golf">Mini Golf</option>
                        <option value="Museum">Museum</option>
                        <option value="Park">Park</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Preferred date:</label>
                    <input type="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="appt">Preferred time:</label>
                    <input type="time" id="appt" name="appt" min="09:00" max="22:00" required>
                </div>

                <button type="submit" name="send" value="submit">Rent</button>

                <?php if (!empty($message)) : ?>
                    <div class="success">
                        <strong><?php echo $message; ?></strong>
                    </div>
                <?php endif; ?>

            </form>
        </div>
    </div>
</body>

</html>
