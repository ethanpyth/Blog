<?php

include_once('Models/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('Controllers/blog/index.php');
}
