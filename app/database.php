<?php

/* database connection stuff here
 * 
 */
 
  $DB_HOST = "locahost";
 $DB_DATABASE = "cosc";
 $DB_USER = "root";
 $DB_PASS= "";

function db_connect() {
    try {
        $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE . ';charset=utf8', DB_USER, DB_PASS);
        return $dbh;
    } catch (PDOException $e) {
        //We should set a global variable here so we know the DB is down
    }
}