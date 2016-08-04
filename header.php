<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="shortcut icon" href="images/wolf.png">
    </head>
    <body>-->
<div id="page-header" class="col-md-12" >
    <div class="col-md-12" style="height: 30px">
        <ul id="navigation1">
            <li >
                <a href="login.html">Login</a>
            </li>
            <li >
                <a href="createaccount.html">Create Account</a>
            </li>
        </ul>
    </div>
    <a href="index.php"><img id="header-logo" src="images/MergedLayers.png" alt="Spirit Wolf Sound"></a>
    <div class="col-md-12" >
        <ul id="navigation2">
            <li >
                <a href="index.php">Home</a>
            </li>
            <li >
                <a href="about.php">About</a>
            </li>
            <li class="dropdown">
                <a href="articles/" class="dropbtn">Articles</a>
                <div class="dropdown-content">
                    <?php
                    $dir = "./articles";
                    if ($handle = opendir($dir)) {

                        while (false !== ($entry = readdir($handle))) {

                            if ($entry != "." && $entry != ".." && $entry != "images" && $entry != "index.php") {
                                $foo = $entry;
                                $foo = str_replace("_", " ", $foo);
                                $foo = str_replace(".php", "", $foo);
                                $foo = ucwords($foo);
                                ?>
                                <a class="dropdown-content-a" href="<?php echo "articles/$entry" ?>"><?php echo $foo ?></a>
                                <?php
                            }
                        }

                        closedir($handle);
                    }
                    ?>
                </div>
            </li>
            <li >
                <a href="forum.php">Forum</a>
            </li>
        </ul>
    </div>
</div>

<!--    </body>
</html>-->
