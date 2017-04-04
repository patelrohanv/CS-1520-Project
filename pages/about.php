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
                                <li class="prjTitle"> Steel Hacks 2016</li>
                                <span class="sideProject"> We worked on a web application to datamine Twitter for certain keywords and populate a map on a webpage
                                        with where geographically those tweets were being made. This project was done using Python and Javascript.
                                    </span>
                                <br><a class="prjLink" href="https://github.com/patelrohanv/steelhacks2016">Link to Repo</a>
                                <br>
                                <br>
                                <li class="prjTitle"> Pitt Challenge Hackathon </li>
                                <span class="sideProject">We tried to create a web application that would use some simple machine learning and voice recognition to
                                    fill out a simple form about what precription medicine to take at what interval. We then tried to use a Python script to send 
                                    the person who filled out that form a reminder to take their medicine. 
                                    </span>
                                <br><a class="prjLink" href="https://github.com/patelrohanv/PittChallenge2017">Link to Repo</a>
                                <br>
                                <br>
                                <li class="prjTitle"> Steel Hacks 2017 </li>
                                <span class="sideProject"> We created a TwitterBot that would search for tweets containing profanity and a video game title.
                                    We would then sent a message to the user who made that tweet saying to be nicer on the Internet. This Bot won the #HackHarassment 
                                    category award.        
                                    </span>
                                <br><a class="prjLink" href="https://github.com/patelrohanv/steelhacks2017">Link to Repo</a>
                                <br><a class="prjLink" href="https://devpost.com/software/hack-harassment-for-twitter">Link to DevPost</a>
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