<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css?<?php echo time(); ?>">

    <title>Laboratory 3</title>
</head>

<!-- The scrollable area -->

<body data-spy="scroll" data-target=".navbar" data-offset="100">

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Laboratory 3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-items">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-items">
            <ul class="nav navbar-nav ml-auto">
                <a class="nav-link" href="#navbar">navbar</a>
                <a class="nav-link" href="#breadcrumb">breadcrumb</a>
                <a class="nav-link" href="#carousel">carousel</a>
                <a class="nav-link" href="#accordion">accordion</a>
                <a class="nav-link" href="#form">form</a>
                <a class="nav-link" href="#modal">modal</a>
                <a class="nav-link" href="#tooltip">tooltip</a>
            </ul>
        </div>
    </nav>

    <main class="container">
        <div class="space"></div>

        <h4 id="navbar">navbar</h4>
        <p>1. navbar navigation element with scrollspy element</p>
        <div class="space"></div>

        <h4 id="breadcrumb">breadcrumb</h4>
        <p>2. breadcrumb navigation</p>
        <?php include "sections/breadcrumb.php";?>
        <div class="space"></div>

        <h4 id="carousel">carousel</h4>
        <p>3. carousel element with controls, indicators and captions:</p>
        <?php include "sections/carousel.php";?>
        <div class="space"></div>

        <h4 id="accordion">accordion</h4>
        <p>4. accordion (set of elements that can be rolled up and unfolded by clicking on them)</p>
        <?php include "sections/accordion.php";?>
        <div class="space"></div>

        <h4 id="form">form</h4>
        <p>5. a form in which page visitor will be able to enter their name, surname, e-mail, telephone number,
            street, house number / flat number, zip code, city and province and click on the "Submit" or "Reset"
            button</p>
        <?php include "sections/form.php";?>
        <div class="space"></div>

        <h4 id="modal">modal</h4>
        <p>6. element, clicking on which will display a modal window that takes up the entire available width
            and height of the display device</p>
        <?php include "sections/modal.php";?>
        <div class="space"></div>

        <h4 id="tooltip">tooltip</h4>
        <p>7. tooltips elements that provide tips (hints) when the mouse cursor is placed over a specific
            interactive element or text fragment</p>
        <div class="space"></div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>