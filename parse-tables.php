<?php 
    include('simple_html_dom.php');
// Create DOM from URL
$html = file_get_html("http://www.healthspace.ca/Clients/VDH/VBeach/VBeach_Website.nsf/Food-List-ByFirstLetterInName?OpenView&Count=100&RestrictToCategory=A");
// echo $html;

// Find all article blocks
// foreach($html->find('table') as $table) {
    // $item['tr']     = $table->find('tr', 0)->plaintext;
    // $item['intro']    = $table->find('div.intro', 0)->plaintext;
    // $item['details'] = $table->find('div.details', 0)->plaintext;
    // $articles[] = $item;
// }

// print_r($articles);



// $str1 = $html->save();
// $str = str_replace("&nbsp;", "", $str1, $count);
// echo $count;
// Write a function with parameter "$element"
// function my_callback($element) {
        // Hide all <b> tags 
// if ($element->tag=='img[src=/Clients/VDH/VBeach/VBeach_Website.nsf/linksquare.gif]')
// $element->outertext = '';
// } 
// Register the callback function with it's function name
// $html->set_callback('my_callback');

// Find all td elements
// foreach($html->find('td') as $e)
//    echo $e->innertext . '<br>';
 



echo "<h1>Get all <code>td</code> from <code>tr</code> in a <code>table</code></h1>";
foreach($html->find('table') as $ul) {        
	echo "<ul>";
    foreach($ul->find('tr') as $ulSub) {
    	    echo "<li>";
    	    foreach($ulSub->find('td') as $liSub) {
        // do something...
        echo $liSub->innertext . " ";
            }
            echo "</li>";
    }
    echo "</ul>";
}
echo "<h1>Get First <code>li</code> in First <code>ul</code></h1>";
// Find first <li> in first <ul>  
$e = $html->find('table', 0)->find('tr', 0);
echo $e;
?>
