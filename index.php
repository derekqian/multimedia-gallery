<!-- Fresh Sliding Thumbnails Gallery with jQuery and PHP -->
<!-- by Codrops 2010 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Evan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Evan Qian's Albums" />
        <meta name="keywords" content="jquery, images, gallery, full page, thumbnails, scrolling, sliding, php, xml"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    </head>
    <body>
        <div class="albumbar">
            <span>
                Evan's photostream
            </span>
            <div id="albumSelect" class="albumSelect">
                <ul>
                    <?php
                    $firstAlbum = '';
                    $i=0;
                    if(file_exists('images')) {
                        $files = array_slice(scandir('images'), 2);
                        if(count($files)) {
                            natcasesort($files);
                            foreach($files as $file) {
                                if($file != '.' && $file != '..') {
                                    if($i===0)
                                        $firstAlbum = $file;
                                    else
                                        echo "<li><a>$file</a></li>";
                                    ++$i;
                                }
                            }
                        }
                    }
                    ?>
                </ul>
                <div class="title down"><?php echo $firstAlbum;?></div>
            </div>
        </div>
        <div id="loading"></div>
        <div id="preview">
            <div id="imageWrapper">               
            </div>  
        </div>
        <div id="thumbsWrapper">
        </div>
        <div class="infobar">
            <span id="description"></span>
        </div>
        <!-- The JavaScript -->
        <script src="jquery.min.js"></script>
        <script type="text/javascript" src="jquery.gallery.js"></script>
    </body>
</html>
