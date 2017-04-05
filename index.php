<?php include "./src/updateFunctions.php"; ?>
<html>

<head>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Compiled and minified Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <!-- Personal JavaScript-->
    <script src="js/main.js"></script>
    <script src="js/homepage.js"></script>
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
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header">
                            <span class="hint">College Year One</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                $f = "./info/yearOne.txt"; 
                                updateSimple($f);
                            ?>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <span>College Year Two</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                //include "./src/updateFunctions.php";
                                $f = "./info/yearTwo.txt";
                                updateSimple($f);
                            ?>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <span>College Year Three</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                //include "./src/updateFunctions.php";
                                $f = "./info/yearThree.txt";
                                updateSimple($f);
                            ?>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <span>College Year Four</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <span>
                            <?php
                                //include "./src/updateFunctions.php";
                                $f = "./info/yearFour.txt";
                                updateSimple($f);
                            ?>    
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="divider"></div>
            <div>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header">
                            <span>Programming Languages</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $f = "./info/programmingLang.txt";
                                updateList($f);
                            ?>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <span>Tools</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $f = "./info/tools.txt";
                                updateList($f);
                            ?>                                
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="divider"></div>
            <div>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header">
                            <span>Computer Science Courses</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $f = "./info/csCourses.txt";
                                updateList($f);
                            ?>    
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <span> Courses</span>
                        </div>
                        <div class="collapsible-body" class="myInfo">
                            <ul>
                            <?php
                                $f = "./info/courses.txt";
                                updateList($f);
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
    
</body>

</html>