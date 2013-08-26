<?php
    include('simple_html_dom.php');
$html = file_get_html('dummydata01.html');  
// Find all <li> in <ul>   
$es = $html->find('ul li');  
echo $es . "<br />";
// Find all <li> in <ul>  
foreach($html->find('ul') as $ul) {        
    foreach($ul->find('li') as $li) {              
        // do something...
        echo $li . "<br />";
    } 
} 
// Find Nested <div> tags  
$es = $html->find('div div div');   
echo $es . "<br />";
foreach($html->find('div') as $nestedDivLevel1) {
  foreach($nestedDivLevel1->find('div') as $nestedDivLevel2) {
  	  foreach($nestedDivLevel2->find('div') as $nestedDivLevel3) { 
  echo $nestedDivLevel3 . "<br />";
  }
  }
}
// Find all <td> in <table> which class=hello   
$es = $html->find('table.hello td');  
echo $es . "<br />";
foreach($html->find('table.hello td') as $es) {
  echo $es . "<br />";
}
// Find all td elements with class of aligncenter
$es = $html->find('table td.aligncenter');
echo $es . "<br />";
foreach($html->find('table td.aligncenter') as $es) {
  echo $es . "<br />";
}
?>
