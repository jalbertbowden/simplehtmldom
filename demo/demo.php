<?php

    # don't forget the library
    include('simple_html_dom.php');
    
    # this is the global array we fill with article information
    $articles = array();

    # passing in the first page to parse, it will crawl to the end
    # on its own
    getArticles('http://net.tutsplus.com/page/78/');





        


function getArticles($page) {
    global $articles, $descriptions;
    
    $html = new simple_html_dom();
    $html->load_file($page);
    
    $items = $html->find('div[class=preview]');  
    
    foreach($items as $post) {
        # remember comments count as nodes
        $articles[] = array($post->children(3)->outertext,
                            $post->children(6)->outertext);
    }

    # lets see if there's a next page
    if($next = $html->find('a[class=nextpostslink]', 0)) {
        $URL = $next->href;
        echo "going on to $URL <<<\n";
        # memory leak clean up
        $html->clear();
        unset($html);
        
        getArticles($URL);
    }
}

?>


<html>
<head>
    <style>
        #main {
            margin: 80px auto;
            width: 600px;
        }
        h1 {
            font: bold20px/30px verdana, sans-serif;
            text-decoration: none;
        }
        p {
            font: 10px/14px verdana, sans-serif;
    </style>
</head>
<body>
    <div id="main">
<?php
    foreach($articles as $item) {
        echo $item[0];
        echo $item[1];
    }
?>
    </div>
</body>
</html>









