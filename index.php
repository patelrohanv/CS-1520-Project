<html>

<head>
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Rohan Patel: Home</title>
</head>

<body>
    <header>
        <?php
            include "./src/main_header.php";
        ?>
        <div class="parallax-container">
            <div class="parallax"><img src="./images/code_m.jpeg"></div>
        </div>
    </header>
    <main>

        <div class="container">
            <div>
                <ul class="collapsible" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header active">
                            <span class="hint">College Year One</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                $file_handle = fopen("./info/yearOne.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo $line;
                                }
                                fclose($file_handle);
                            ?>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header active">
                            <span>College Year Two</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                $file_handle = fopen("./info/yearTwo.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo $line;
                                }
                                fclose($file_handle);
                            ?>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header active">
                            <span>College Year Three</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                $file_handle = fopen("./info/yearThree.txt", "r");
                                while (!feof($file_handle)) {
                                    $line = fgets($file_handle);
                                    echo $line;
                                }
                                fclose($file_handle);
                            ?>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header active">
                            <span>College Year Four</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                $file_handle = fopen("./info/yearFour.txt", "r");
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
                            <span>Programming Languages</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $file_handle = fopen("./info/programLang.txt", "r");
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
                    <li>
                        <div class="collapsible-header active">
                            <span>Tools</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $file_handle = fopen("./info/tools.txt", "r");
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
            <div class="divider"></div>
            <div>
                <ul class="collapsible active active" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header active">
                            <span>Computer Science Courses</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $file_handle = fopen("./info/csCourses.txt", "r");
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
                    <li>
                        <div class="collapsible-header active">
                            <span> Courses</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $file_handle = fopen("./info/courses.txt", "r");
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
            include "./src/footer.php";
        ?>
    </footer>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Compiled and minified Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <!-- Personal JavaScript-->
    <script src="js/main.js"></script>
    <script src="js/homepage.js"></script>
</body>

</html>