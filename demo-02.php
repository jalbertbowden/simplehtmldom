<?php
    include('simple_html_dom.php');
    $html = file_get_html("http://www.google.com/");
    echo "<h1>Demo Scrapes Anchor Elements From google.com and Echo Their <code>href=\"\"</code> Values</h1>";
    foreach($html->find("a") as $element)
    	    echo $element->href . "<br />";
?>
