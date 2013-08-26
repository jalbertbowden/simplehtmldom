<?php
    include('simple_html_dom.php');
$html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');
$html->find('div[id=hello]', 0)->innertext = 'foo';   
$html->find('div', 1)->class = 'bar';   
echo $html;
?>
