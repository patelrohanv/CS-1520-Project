<html>

<head>
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Rohan Patel: Experience</title>
</head>

<body>
    <header>
        <?php
            include "../src/page_header.php";
        ?>
    </header>
    <main>
        <div class="container">
            <div>
                <ul class="collapsible" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header active">
                            <span>Giant Eagle</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <?php
                                $file_handle = fopen("../info/giantEagle.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo "<span>" . $line . "</span>";
                                    echo "<br>";
                                    echo "<br>";
                                }
                                fclose($file_handle);
                            ?> 
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header active">
                            <span>CosmoLex</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <?php
                                $file_handle = fopen("../info/cosmolex.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo "<span>" . $line . "</span>";
                                    echo "<br>";
                                    echo "<br>";
                                }
                                fclose($file_handle);
                            ?> 
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header active">
                            <span>Swanson School of Engineering</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <?php
                                $file_handle = fopen("../info/benedum.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo "<span>" . $line . "</span>";
                                    echo "<br>";
                                    echo "<br>";
                                }
                                fclose($file_handle);
                            ?> 
                        </div>
                    </li>
                </ul>
            </div>
            <div class="divider"></div>
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