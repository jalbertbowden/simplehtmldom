<?php
    include('simple_html_dom.php');
$html = file_get_html('slashdotcopy.html');  

// Find all article blocks  
foreach($html->find('article') as $article) {      
    $item['header'] = $article->find('header', 0)->plaintext;      
    $item['body']    = $article->find('div.body', 0)->plaintext;      
    $item['footer'] = $article->find('footer', 0)->plaintext;      
    $articles[] = $item;  
}  

print_r($articles);
?>
