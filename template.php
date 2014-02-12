<html>
    <head>
        <meta charset="UTF-8">
        <meta name="robot" content="noindex, nofollow">
        <meta name="description" content="A tutorial to built Minecraft with the cooperative game making platform CraftStudio.">
        <meta name="keywords" content="CraftStudio, gamedev, game development, Minecraft, tutorial">
        <meta name="author" content="">

        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title><?php echo $pageTitle; ?> - CraftSting Minecraft in CraftStudio</title>
    </head>
    <body>
        <header>

        </header>
<?php
if ( endsWith( $filePath, ".md" ) )
    echo Michelf\Markdown::defaultTransform( file_get_contents( $filePath ) );
elseif ( endsWith( $filePath, ".php" ) )
    include $filePath;
else
    echo file_get_contents( $filePath );
?>
        <footer>
            
        </footer>
    </body>
</html>