<?php

if (extension_loaded("pgsql")) {
    echo "PostgreSQL arabirimi kurulu.";
} else {
    echo "PostgreSQL arabirimi kurulu değil.";
}


echo php_ini_loaded_file();

?>