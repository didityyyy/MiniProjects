<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Tasks/Task1/receivedMessagesController.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received Messages</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/Tasks/Task1/assets/css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="container flex-center">

        <div class="received-messages flex-center-y">
            <h2 class="title">Received Messages</h2>
            <p class="success"></p>
            <?php if (mysqli_num_rows($results) > 0) : ?>
                <table>
                    <tr>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <!-- <th>Message</th> -->
                        <th></th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($results)) : ?>
                        <form method="POST">
                            <tr id="<?php echo $row['id']; ?>" name="idMessage">
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php
                                    if ($row['lastname'] == 'null' || $row['lastname'] == 'NULL') {
                                        echo '-';
                                    } else {
                                        echo $row['lastname'];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="/Tasks/Task1/receivedMessageDetails.php?id=<?php echo $row['id'] ?>">
                                        <div class="edit"><i class="fa-solid fa-pen"></i></div>
                                    </a>
                                </td>
                            </tr>
                        </form>
                    <?php endwhile; ?>
                </table>
            <?php else : ?>
                <p>No data</p>
            <?php endif; ?>

        </div>
    </div>

    <script src="/Tasks/Task1/assets/libs/jquery/jquery.js"></script>
    <script type="text/javascript" src="/Tasks/Task1/assets/js/receivedMessages.js?v=<?php echo time(); ?>"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/0dfb737c10.js" crossorigin="anonymous"></script>
</body>

</html>