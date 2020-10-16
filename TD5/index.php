<!DOCTYPE html>
<html>
    <body>
        <?php
          //  require_once '/home/ann2/tilliere/public_html/PHP/TD-PHP/TD5/lib/File.php';
            $DS = DIRECTORY_SEPARATOR;
            $ROOT_FOLDER = __DIR__;
            require_once $ROOT_FOLDER . $DS.join($DS, array('lib','File.php'));
            require_once File::build_path(array('controller','routeur.php'));


        ?>
    </body>
</html>


