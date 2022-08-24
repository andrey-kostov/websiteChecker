<?php 
    $newWebsiteData = $_POST['newWebsite'];    
    file_put_contents('list.json', json_encode($newWebsiteData));

?>