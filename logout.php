<?php
//This includes the session_start() to resume the session on this page. It identifies the sessions that needs to be destroyed
include_once 'includes/session.php'?>

<?php
// session_destroy detroys the session. Then the header () funtion redirects to the home page
    session_destroy();
    header('Location: index.php');
?>