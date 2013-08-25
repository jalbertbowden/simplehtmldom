<?php
    include('simple_html_dom.php');
$html = file_get_html('http://www.healthspace.ca/Clients/VDH/VBeach/VBeach_Website.nsf/Food-List-ByFirstLetterInName?OpenView&Count=100&RestrictToCategory=A');  

// Find all article blocks  
foreach($html->find('table') as $article) {      
    $item['title'] = $article->find('tr', 0)->plaintext;      
    // $item['intro']    = $article->find('div.intro', 0)->plaintext;      
    // $item['details'] = $article->find('div.details', 0)->plaintext;
        $headers['title'] = $article->find('tr', 0)->plaintext;
        echo "<h1>Table Headers: " . $headers . "</h1>";
    $articles[] = $item;
            foreach($article->find('tr, 0') as $dataTableRowHeaders) {              
        // do something...    
foreach($dataTableRowHeaders->find('td') as $dataTableRowHeadersData) {
        echo $dataTableRowHeadersData . "<br />";
    }
    	    }
    
        foreach($article->find('tr') as $dataTableRow) {              
        // do something...    

        echo $dataTableRow . "<br />";
    } 
}  

print_r($articles);
?>
