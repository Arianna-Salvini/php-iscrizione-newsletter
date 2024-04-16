<?php
$name = $_GET["name"];
$email = $_GET["email"];

// Function for email validation

function emailCheck($email)
{
    if (str_contains($email, '.') && str_contains($email, '@')) {
        return true;
    } else {
        return false;
    }
}

// Alert response

$messageValidation = emailCheck($email);

function generateAlertValidation($messageValidation)
{
    if ($messageValidation) {
        return [
            'text' => 'Email not valid',
            'alert' => 'alert-success'
        ];
    } else {
        return [
            'text' => 'Email not valid',
            'alert' => 'alert-danger',
        ];
    }
};

$message = generateAlertValidation($messageValidation);

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
    <header>
        <nav>
            Newsletter
        </nav>
    </header>
    <main>
        <h2>Iscriviti alla nostra Newsletter</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis blanditiis magnam placeat aliquam. Voluptatibus reiciendis alias non deserunt tempore totam a. Tempora, repudiandae quas autem, dolore consectetur excepturi dolores, expedita quasi a sit quae! Praesentium repellat eligendi necessitatibus cum repudiandae dolor enim ipsum quidem! Earum nemo aliquam voluptas ducimus rem!</p>
        <!-- form -->
        <form action="#" method="get">
            <input type="email" name="email" id="email" placeholder="Inserisci la tua email">
            <button type="submit">Invia</button>
        </form>
        <div class="alert <?php echo $message['alert'] ?> ">
            <p><?php echo $message['text'] ?></p>
        </div>
        <!-- Alert validation -->

    </main>
    <footer>
        <span>Boolean © by Classe 119</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>