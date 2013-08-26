<?php
    include('simple_html_dom.php');
$html = file_get_html('slashdotcopy.html');  
// Find all anchors, returns a array of element objects 
$ret = $html->find('a'); 
echo $ret . "<br />";
// Find (N)th anchor, returns element object or null if not found (zero based)
$ret = $html->find('a', 0); 
echo $ret . "<br />";
// Find lastest anchor, returns element object or null if not found (zero based)
$ret = $html->find('a', -1); 
echo $ret . "<br />";
// Find all &#60;div&#62; with the id attribute 
$ret = $html->find('div[id]'); 
echo $ret . "<br />";
// Find all &#60;div&#62; which attribute id=foo 
$ret = $html->find('div[id=foo]');
echo $ret . "<br />";
// Find all element which id=foo 
$ret = $html->find('#foo'); 
echo $ret . "<br />";
// Find all element which class=foo 
$ret = $html->find('.foo'); 
echo $ret . "<br />";
// Find all element has attribute id 
$ret = $html->find('*[id]');  
echo $ret . "<br />";
// Find all anchors and images  
$ret = $html->find('a, img');  
echo $ret . "<br />";
// Find all anchors and images with the "title" attribute 
$ret = $html->find('a[title], img[title]');
echo $ret . "<br />";
?>
