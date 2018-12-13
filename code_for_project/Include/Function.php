<?php 
///chưa hoạt động
function custom_error_handler ()
{
    header("location: /WebAppFindGuide/Error.php");
}
set_error_handler('custom_error_handler');
?>
