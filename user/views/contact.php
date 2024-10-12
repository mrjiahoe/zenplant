
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!--=============== favicon ===============-->
    <link rel="icon" type="image/png" href="./user/assets/img/logo.png">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== CSS ===============-->
    <style>
        <?php include './user/assets/css/styles.css'?>
    </style>
</head>

<body>
    <?php require dirname(__DIR__).'/components/header.php'; ?>
    


    <!--==================== MAIN ====================-->
    <section class="contact_Card">
        <div class="contact__left">
            <div class="container">
                <form action="action_page.php">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:200px"></textarea>

                    <input type="submit" value="Submit">

                </form>
            </div>
        </div>
        <div class="contact__right">
            <h1>contact us now:</h1>
        </div>
    </section>

    <script src="./user/assets/js/main.js"></script>

</body>

</html>