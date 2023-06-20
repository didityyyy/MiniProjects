<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Tasks/Task1/receivedMessagesController.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/Tasks/Task1/assets/css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="container flex-center">

    <div class="back"><a href="/Tasks/Task1/receivedMessages.php"><i class="fa-solid fa-arrow-left"></i></a></div>

        <div class="flex-center-y">
            <h2 class="title">Message</h2>

            <p class="success"></p>
            
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" value="<?php echo $row['firstname']; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" value="<?php if ($row['lastname'] == 'null' || $row['lastname'] == 'NULL') {
                                        echo '-';
                                    } else {
                                        echo $row['lastname'];
                                    } ?>">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" value="<?php echo $row['subject']; ?>">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" rows="5"><?php echo $row['message']; ?></textarea>
                </div>

                <div class="flex-center">
                    <button class="small-btn" id="btnEdit">Edit</button>
                    <button class="small-btn" id="btnDelete">Delete</button>
                </div>
            </form>

            <!-- Modal Box -->
            <div class="modalbox-bg">
                <div class="modalbox">
                    <div id="closeModalbox"><i class="fa-solid fa-xmark"></i></div>
                    <div class="text flex-center-y">
                        <p>This message will be deleted</p>

                        <form method="POST" class="flex-center">
                            <button class="small-btn" id="btnConfirmDelete" name="btnConfirmDelete">Confirm</button>
                            <button class="small-btn" id="btnCancel">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/Tasks/Task1/assets/libs/jquery/jquery.js"></script>
    <script type="text/javascript" src="/Tasks/Task1/assets/js/receivedMessages.js?v=<?php echo time(); ?>"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/0dfb737c10.js" crossorigin="anonymous"></script>
</body>

</html>