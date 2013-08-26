<?php
    include('simple_html_dom.php');
$html = file_get_html('dummydata03.html'); 
// Write a function with parameter "$element"
echo "<h1>Original Paragaph</h1>";
echo "<p>This paragraph has <b>plenty</b> of <code>b</code> elements; <b>here's one</b>, not here though, <b>here's another</b>, and <b>and this paragraph's fourth</b>.</p>";
function my_callback($element) {         
    // Hide all <b> tags          
    if ($element->tag=='b')                 
        $element->outertext = ''; 
}  

// Register the callback function with it's function name 
$html->set_callback('my_callback'); 
echo "<h1>Paragraph Sans <code>b</code> Elements</h1>";
// Callback function will be invoked while dumping 
echo $html;
?>
