<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="icon" type="image/x-icon" href="public/images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="public/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="public/css/contactus.css">
    <title>Guitar Store</title>
</head>
<body>
   
    <?php
        require_once("inc/navigation.php")
    ?>

    <section class="contact">
        <div class="container center">
            <div class="form">
                <h2>Contact us</h2>
                <form action="#">
                    <div class="input-box">
                        <div class="input-field field">
                            <input type="text" placeholder="Full name" id="name" class="item" autocomplete="off">
                            <div class="error-txt">Full name can't be blank</div>
                        </div>
                        <div class="input-field field">
                            <input type="text" placeholder="E-mail" id="email" class="item" autocomplete="off">
                            <div class="error-txt">Email Address can't be blank</div>
                        </div>
                    </div>
                    <div class="input-box">
                        <div class="input-field field">
                            <input type="text" placeholder="Phone number" id="phone" class="item" autocomplete="off">
                            <div class="error-txt">Phone number can't be blank</div>
                        </div>
                        <div class="input-field field">
                            <input type="text" placeholder="Subject" id="subject" class="item" autocomplete="off">
                            <div class="error-txt">Subject can't be blank</div>
                        </div>
                    </div>
                    <div class="textarea-field field">
                        <textarea name="" id="message" cols="30" rows="10" placeholder="Enter your question" class="item" autocomplete="off"></textarea>
                        <div class="error-txt">Message can't be blank</div>
                    </div>
                    <button type="submit" class="menuBtn change">Send Question</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="public/js/script.js"></script>
    <?php
        require_once("inc/footer.php")
    ?>

</body>
</html>