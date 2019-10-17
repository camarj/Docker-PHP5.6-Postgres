<?php

// Connect to the database
$dbconn = pg_connect("host=db dbname=docker_test user=admin password=vgetpa10");
// Show the client and server versions
print_r(pg_version($dbconn));