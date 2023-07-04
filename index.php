<?php


    $isEmailValid = null;

    if (!empty($_GET['email'])){
        $isEmailValid = checkAtAndDot($_GET['email']);
    }

    function checkAtAndDot($haystack){
        if (str_contains($haystack, '@') && str_contains($haystack, '.') ){
            return true;
        }

        return false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <form class="col-12 mb-3" action="./index.php" method="GET">
                <h1>
                    Subscribe to our new newsletter OF ROARING news!
                </h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                </div>
                <input type="submit" value="Subscribe" class="btn btn-xl btn-primary">
            </form>
            <?php if ($isEmailValid === true) { ?>
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        ROAR! AWESOME! You have been subscribed to our new newsletter!
                    </div>
                </div>
            <?php } elseif ($isEmailValid === false) {?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        I am sorry, but your mail is not correct, please enter a valid email address to ROAR with us!
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>