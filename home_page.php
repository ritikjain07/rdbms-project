<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherry Clothing Brand</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        /* CSS styles for the home page */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .product-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .product-box {
            width: 30%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .product-box img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .buy-now-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }
        .buy-now-btn:hover {
            background-color: #45a049;
        }
        /* Styles for the footer */
        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Cherry Clothing Brand</h1>
        <p>Explore our latest collection and enjoy exclusive offers!</p>
        <div class="product-container">
            <div class="product-box">
                <img src="clothing_image_4.png" alt="Clothing Image 1">
                <a href="#" class="buy-now-btn" onclick="showThankYou()">Buy Now</a>
            </div>
            <div class="product-box">
                <img src="clothing_image_3.png" alt="Clothing Image 2">
                <a href="#" class="buy-now-btn" onclick="showThankYou()">Buy Now</a>
            </div>
            <div class="product-box">
                <img src="clothing_image_2.png" alt="Clothing Image 3">
                <a href="#" class="buy-now-btn" onclick="showThankYou()">Buy Now</a>
            </div>
        </div>
        <div class="footer">
            &copy; 2024 Cherry Clothing Brand. All rights reserved.
        </div>
    </div>

    <!-- Thank You Page -->
    <div id="thankYouPage" style="display: none;">
        <h1>Thank You for Your Purchase!</h1>
        <p>We appreciate your business.</p>
    </div>

    <script>
        function showThankYou() {
            document.getElementById("thankYouPage").style.display = "block";
        }
    </script>
</body>
</html>
