<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/6.less', 'css/6.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1160</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script src="<?php echo $url_path ?>/js/6.js"></script>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet"  />
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/css/6.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/6.less', 'css/6.css');
        ?>
        
        <script src="js/jquery.min.js" ></script>
        <script src="js/6.js" ></script>

        <script src="js/bootstrap.min.js" ></script>
      
             
        
        <!-- <style>
            .container{
                width: 90% ;
                height: auto;
                margin-left: 25px;
            }
            
            
        </style> -->
    </head>
    
    <body>
        <?php  $dir_block.include'7-content.php'; ?>
    </body>

</html>