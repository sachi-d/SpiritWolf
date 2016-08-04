<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title>Articles | Spirit Wolf Sound</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/articlestyle.css">
        <link rel="shortcut icon" href="../images/icon.png">
    </head>
    <body >

        <?php
        include '../article_header.php';
        ?>
        <div class="col-md-12">
            <div class="col-md-1">  </div>
            <div class="col-md-10 article-body">
                <?php
                if ($handle = opendir('.')) {

                    while (false !== ($entry = readdir($handle))) {

                        if ($entry != "." && $entry != ".." && $entry != "images" && $entry != "index.php") {
                            $foo = $entry;
                            $foo = str_replace("_", " ", $foo);
                            $foo = str_replace(".php", "", $foo);
                            $foo = ucwords($foo);
                            ?>
                            <h1 class="article-link"><a href="<?php echo "$entry" ?>"><?php echo $foo ?></a><hr></h1>
                            <?php
                        }
                    }

                    closedir($handle);
                }
                ?>
            </div>
            <div class="col-md-1">            </div>
        </div>
<?php
include '../article_footer.php';
?>
    </body>
</html>

