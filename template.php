<html>
    <head>
        <meta charset="UTF-8">
        <?php
        if ( strpos( $indexUrl, "localhost" ) === false )
            echo '<meta name="robot" content="index, follow">';
        else
            echo '<meta name="robot" content="noindex, nofollow">';
        ?>
        
        <meta name="description" content="A series of tutorials that aim to built a Minecraft-like with with the cooperative game making platform CraftStudio.">
        <meta name="keywords" content="CraftStudio, gamedev, game development, Minecraft, tutorial, florent, poujol">

        <link rel="stylesheet" type="text/css" href="<?php echo $indexUrl; ?>assets/css/stylesheet.css">
        <title><?php echo $pageTitle; ?> - Crafting Minecraft in CraftStudio</title>
    </head>
    <body>
        <header>

        </header>
<?php
if ( EndsWith( $filePath, ".md" ) )
    echo Michelf\Markdown::defaultTransform( file_get_contents( $filePath ) );
elseif ( EndsWith( $filePath, ".php" ) )
    include $filePath;
else
    echo file_get_contents( $filePath );
?>
        <footer>
            
        </footer>

        <script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo $indexUrl; ?>assets/js/script.js"></script>
    </body>
</html>