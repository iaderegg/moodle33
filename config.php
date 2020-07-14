<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle33';
$CFG->dbuser    = 'iaderegg';
$CFG->dbpass    = 'iaderegg';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost/moodle33';
$CFG->dataroot  = '/var/www/moodledata33';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;

//$CFG->debug = 6143;         // DEBUG_DEVELOPER // NOT FOR PRODUCTION SERVERS!
// for Moodle 2.0 - 2.2, use:  $CFG->debug = 38911;  
//$CFG->debugdisplay = true;   // NOT FOR PRODUCTION SERVERS!
 

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
