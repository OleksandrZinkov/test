<?php


require_once 'libs.php';

define('MESSAGES_FILE', 'messages.dat');
define('TEMPLATES DIR', __DIR__. DIRECTORY SEPARATOR. 'templates'. DIRECTORY);
$records=readAll(MESSAGES_FILE);

include TEMPLATES_DIR . 'guestbook.html';

//$data=[
//'usernsme'=>'pupkin',
//'message'=>'pupkin\'s message'

//];
/////

