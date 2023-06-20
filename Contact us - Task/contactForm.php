<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/Tasks/Task1/assets/css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="container flex-center">


        <div class="contact-us flex-center-y">
            <h2 class="title">Contact us</h2>

            <form method="POST" class="flex-center-y contact-us-form">

                <p class="success"></p>
                <p class="error-message"></p>

                <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                    <small class="error" id="errorEmail"></small>
                    <input type="text" id="email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject <span>*</span></label>
                    <small class="error" id="errorSubject"></small>
                    <input type="text" id="subject">
                </div>
                <div class="form-group">
                    <label for="firstname">First Name <span>*</span></label>
                    <small class="error" id="errorFN"></small>
                    <input type="text" id="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname">
                </div>
                <div class="form-group">
                    <label for="message">Message <span>*</span></label>
                    <small class="error" id="errorMessage"></small>
                    <textarea id="message" rows="5"></textarea>
                </div>

                <button type="submit" id="send-button">Send</button>
            </form>
        </div>
    </div>

    <script src="/Tasks/Task1/assets/libs/jquery/jquery.js"></script>
    <script type="text/javascript" src="/Tasks/Task1/assets/js/contactForm.js?v=<?php echo time(); ?>"></script>

</body>

</html>