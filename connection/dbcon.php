<?php
define("DBHOST", "localhost");
define("DBNAME", "upload_db");
define("DBPASS", "");
define("DBUSER", "root");

$dbcon = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if ($dbcon) {
} else {
    echo "db fail";

}