<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem veritatis cupiditate odit libero
                nobis repellendus? Tempore ratione exercitationem blanditiis atque beatae, eaque, nobis necessitatibus
                voluptatibus dolorem quia eos, neque laborum?</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Kalyani, Nadia, <br>India. Pin-Code-743241</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone-square"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>(+91)123456789/(+91)1234567880</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>ekarthelpcenter@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST" action="contact.php">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="product" required="required">
                        <span>Product Name</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="queries" required="required"></textarea>
                        <span>Type your Queries...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="btn" required="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>