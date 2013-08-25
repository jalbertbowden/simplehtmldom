<?php

    # don't forget the library
    include('simple_html_dom.php');
    
// Create DOM from URL
// $html = file_get_html('http://slashdot.org/');
$html = file_get_html('http://www.healthspace.ca/Clients/VDH/VBeach/VBeach_Website.nsf/Food-List-ByFirstLetterInName?OpenView&Count=100&RestrictToCategory=A');


// Find all article blocks
// foreach($html->find('div.article') as $article) {
foreach($html->find('table') as $article) {
    // $item['title']     = $article->find('div.title', 0)->plaintext;
    $item['title']     = $article->find('tr', 0)->plaintext;
    // $item['intro']    = $article->find('div.intro', 0)->plaintext;
    // $item['details'] = $article->find('div.details', 0)->plaintext;
    // $item['details'] = $article->find('div.body', 0)->plaintext;
    $articles[] = $item;
}

print_r($articles);
$html->find('table');
$newHTML = $html->find('table');
echo file_get_html($html)->plaintext;

// Example 
$html = str_get_html("http://www.healthspace.ca/Clients/VDH/VBeach/VBeach_Website.nsf/Food-List-ByFirstLetterInName?OpenView&Count=100&RestrictToCategory=A");  
$e = $html->find("table", 0); 

echo $e->tag; // Returns: " div" 

echo $e->outertext; // Returns: " <div>foo <b>bar</b></div>" 

echo $e->innertext; // Returns: " foo <b>bar</b>"

echo $e->plaintext; // Returns: " foo bar"





$es = $html->find('table td');
echo $es;

// Find all <li> in <ul>  
foreach($html->find('table') as $dataTable) {        
    foreach($dataTable->find('tr') as $dataTableRow) {              
        // do something...        
        echo $dataTableRow . "<br />";
    } 
} 
foreach($html->find('table') as $dTable) {
    // $item['title']     = $article->find('div.title', 0)->plaintext;
    $item['row']     = $dTable->find('tr td', 0)->plaintext;
    // $item['intro']    = $article->find('div.intro', 0)->plaintext;
    // $item['details'] = $article->find('div.details', 0)->plaintext;
    // $item['details'] = $article->find('div.body', 0)->plaintext;
    $dTables[] = $item;
}

print_r($dTables);

?>

