<?php
$email = ($_GET["email"]) ?? '';

$message = null; //Add null message to avoid undefine warning

// Add condition to avoi alert at first loading of the page 
if (!empty($email)) {

    // Function for email validation -> string has to contain '.' and '@'
    function emailCheck($email)
    {
        if (str_contains($email, '.') && str_contains($email, '@')) {
            return true;
        } else {
            return false;
        }
    }

    // Alert response

    // Store reslt of email validation 
    $messageValidation = emailCheck($email);

    // Function to creat alert related responce with text and bootstrap class for each condition
    function generateAlertValidation($messageValidation)
    {
        if ($messageValidation) {
            return [
                'text' => 'Email valid',
                'alert' => 'alert-success',
                header('Location: ./models/thankyou.php'),
            ];
        } else {
            return [
                'text' => 'Email not valid',
                'alert' => 'alert-danger',
            ];
        }
    };

    // Store the result of function to have easy access after in code
    $message = generateAlertValidation($messageValidation);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header class="py-3 bg-primary fixed-top">
        <nav class="container text-light">
            Newsletter
        </nav>
    </header>
    <!-- /Header -->

    <main class="text-center my-5 d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 160px);">
        <div class="container position-relative">

            <!-- Alert validation massage for email input with close alert button -->
            <!-- Add if statement in rorder to eliminate the warning and ensure code work even if $message is null
            (check th if php syntax)  -->
            <?php if ($message !== null) : ?>
                <div class="alert <?php echo $message['alert'] ?> z-1 d-flex justify-content-center position-sticky ">
                    <p><?php echo $message['text'] ?></p>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!--Nesletter page -->
            <h2 class="text-primary-emphasis ">Iscriviti alla nostra Newsletter</h2>
            <p class="my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis blanditiis magnam placeat aliquam. Voluptatibus reiciendis alias non deserunt tempore totam a. Tempora, repudiandae quas autem, dolore consectetur excepturi dolores, expedita quasi a sit quae! Praesentium repellat eligendi necessitatibus cum repudiandae dolor enim ipsum quidem! Earum nemo aliquam voluptas ducimus rem!</p>

            <!-- Form -->
            <form class="mt-4 pb-3 d-flex justify-content-center" action="#" method="get">
                <!-- Change type of input from email to text in order to show the "not valid" alert an to see if pho check email works -->
                <input type="text" name="email" id="email" placeholder="Inserisci la tua email" class="rounded px-4 py-1">
                <button type="submit" class="btn btn-outline-primary rounded">Invia</button>
            </form>
        </div>
    </main>
    <!-- /Main -->

    <footer class="py-3 bg-primary fixed-bottom">
        <div class="container text-light">Boolean © by Classe 119</div>
    </footer>
    <!-- /Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>