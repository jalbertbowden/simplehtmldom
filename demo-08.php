<?php
    include('simple_html_dom.php');
$html = file_get_html('dummydata02.html'); 
echo "<h1>Get all <code>li</code> in <code>ul</code></h1>";
// Find all <li> in <ul>  
foreach($html->find('ul') as $ul) {        
    foreach($ul->find('li') as $li) {              
        // do something...
        echo $li . "<br />";
    } 
} 
echo "<h1>Get all Nested <code>ul</code></h1>";
foreach($html->find('ul') as $ul) {        
    foreach($ul->find('ul') as $ulSub) {
    	    foreach($ulSub->find('li') as $liSub) {
        // do something...
        echo $liSub . "<br />";
            }
    } 
}
echo "<h1>Get First <code>li</code> in First <code>ul</code></h1>";
// Find first <li> in first <ul>  
$e = $html->find('ul', 0)->find('li', 0);
echo $e;
?>
