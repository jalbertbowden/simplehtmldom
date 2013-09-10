 <?php
   include('simple_html_dom.php');  
    // Create DOM from URL
   $html = file_get_html('http://www.hiddenurl.com/whatever/');

   // Find all article blocks

   $con = mysql_connect("localhost","admin","mypasshere");
    mysql_select_db("dataminer", $con);
   if (!$con)
    {
  die(mysql_error());
    }else {
   foreach($html->find('li.search-result') as $sitelisting){

 // $debugquery = mysql_query("INSERT INTO extract (listing) VALUES ('$sitelisting')");
 $debugquery = mysql_query("INSERT INTO extract (listing) VALUES ('".mysql_real_escape_string($sitelisting)."') ");
    if (!$debugquery)
   {
   die(mysql_error());
  }
 }
 }
 mysql_close($con);
   ?>
