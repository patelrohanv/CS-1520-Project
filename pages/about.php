<html>

<head>
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/about.css">
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
            <div>
                <ul class="collapsible" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header active">
                            <span>Elevator Pitch</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                $file_handle = fopen("../info/elevator.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo $line;
                                }
                                fclose($file_handle);
                            ?>   
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="divider"></div>
            <div>
                <ul class="collapsible" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header active">
                            <span>Side Projects</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                                <li class="prjTitle"> <strong>Steel Hacks 2016</strong></li>
                                <a class="prjLink" href="https://github.com/patelrohanv/steelhacks2016">Link to Repo</a><br>
                                <?php
                                    echo "<span class=\"sideProject\">";
                                    $file_handle = fopen("../info/steelhacks16.txt", "r");
                                    while (!feof($file_handle)) {
                                        $line = fgets($file_handle);
                                        echo $line;
                                    }
                                    fclose($file_handle);
                                    echo "</span>";
                                    echo "<br>";
                                    echo "<br>";
                                ?> 
                                <li class="prjTitle"> <strong>Pitt Challenge Hackathon</strong> </li>
                                <a class="prjLink" href="https://github.com/patelrohanv/PittChallenge2017">Link to Repo</a><br>
                                <?php
                                    echo "<span class=\"sideProject\">";
                                    $file_handle = fopen("../info/pittChallenge.txt", "r");
                                    while (!feof($file_handle)) {
                                        $line = fgets($file_handle);
                                        echo $line;
                                    }
                                    fclose($file_handle);
                                    echo "</span>";
                                    echo "<br>";
                                    echo "<br>";
                                ?>    
                                <li class="prjTitle"> <strong>Steel Hacks 2017</strong> </li>
                                <a class="prjLink" href="https://github.com/patelrohanv/steelhacks2017">Link to Repo</a><br>
                                <a class="prjLink" href="https://devpost.com/software/hack-harassment-for-twitter">Link to DevPost</a><br>
                                <?php
                                    echo "<span class=\"sideProject\">";
                                    $file_handle = fopen("../info/steelHacks17.txt", "r");
                                    while (!feof($file_handle)) {
                                        $line = fgets($file_handle);
                                        echo $line;
                                    }
                                    fclose($file_handle);
                                    echo "</span>";
                                    echo "<br>";
                                    echo "<br>";
                                ?>  
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="divider"></div>
            <div>
                <ul class="collapsible" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header active">
                            <span>Hobbies/Interests</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $file_handle = fopen("../info/hobbies.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo "<li>";
                                    echo $line;
                                    echo "</li>";
                                }
                                fclose($file_handle);
                            ?>   
                            </ul>
                        </div>
                    </li>
                </ul>
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
</body>

</html>