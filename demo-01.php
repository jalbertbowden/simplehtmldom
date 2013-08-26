<?php
    include('simple_html_dom.php');
    $html = file_get_html("http://www.google.com/");
    echo "<h1>Demo Scrapes Images From google.com and Echos Their <code>src=\"\"</code> Values</h1>";
    foreach($html->find("img") as $element)
    	    echo $element->src . "<br />";
?>
