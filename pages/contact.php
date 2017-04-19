<html>

<head>
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <title>Rohan Patel: About</title>
</head>

<body>
    <header>
        <?php
            include "../src/page_header.php";
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row" id="contactForm">
                <form class="col s12" action="../src/formAction.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="phone" type="tel" class="validate">
                            <label for="passphoneword" data-error="wrong" data-success="right">Phone Number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="message" type="text" class="validate">
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="page-footer">
        <?php
            include "../src/footer.php";
        ?>
    </footer>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Compiled and minified Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <!-- Personal JavaScript -->
    <script src="../js/main.js"></script>
    <script src="../js/contact.js"></script>
</body>

</html>