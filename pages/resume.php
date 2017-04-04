<html>

<head>
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/resume.css">
    <title>Rohan Patel: Resume</title>
</head>

<body>
    <header>
        <?php
            include "../src/page_header.php";
        ?>
    </header>
    <main>
        <div class="container">
            <object id="resume" width="850" height="1100" data="../documents/rohan_resume.pdf"></object>
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
</body>

</html>