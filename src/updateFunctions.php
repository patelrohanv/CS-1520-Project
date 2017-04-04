<?php
    function updateList($f){
            $file_handle = fopen($f, "r");
            while (!feof($file_handle)) {
                $line = fgets($file_handle);
                echo "<li>";
                echo $line;
                echo "</li>";
            }
            fclose($file_handle);
    }

    function updateProjects($f){
        echo "<span class=\"sideProject\">";
        $file_handle = fopen($f, "r");
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            echo $line;
        }
        fclose($file_handle);
        echo "</span>";
        echo "<br>";
        echo "<br>";
    }

    function updateSimple($f){
            $file_handle = fopen($f, "r");
            while (!feof($file_handle)) {
                $line = fgets($file_handle);
                echo $line;
            }
            fclose($file_handle);
    }

    function updateWork($f){
            $file_handle = fopen($f, "r");
            while (!feof($file_handle)) {
                $line = fgets($file_handle);
                echo "<span>" . $line . "</span>";
                echo "<br>";
                echo "<br>";
            }
            fclose($file_handle);
    }
?>