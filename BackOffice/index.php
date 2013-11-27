<?php
/**
 *  This file is part of amfPHP
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file license.txt.
 * @package Amfphp_BackOffice
 */
/**
 * entry point for back office 
 * @author Ariel Sommeria-klein
 *
 */
/**
 * includes
 */
require_once(dirname(__FILE__) . '/ClassLoader.php');
$accessManager = new Amfphp_BackOffice_AccessManager();
$isAccessGranted = $accessManager->isAccessGranted();
$config = new Amfphp_BackOffice_Config();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/amfphp_updates.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript">
            <?php echo 'var amfphpVersion = "' . AMFPHP_VERSION . '";'; ?>
        </script>  
   
    </head>
    <body>
        <?php require_once(dirname(__FILE__) . '/Header.inc.php'); ?>

        <div id='main'>
            <div id="left">
                <?php
                $accessManager = new Amfphp_BackOffice_AccessManager();
                if (!$isAccessGranted) {
                    ?>
                    <script>
                        window.location = './SignIn.php';
                    </script>
                    <?php
                    return;
                }
                ?>
            </div>

        </div>
        <?php require_once(dirname(__FILE__) . '/Footer.inc.php'); ?>
        
        <script>
            $(function () {	        
                    document.title = "AmfPHP Back Office";
                    $("#titleSpan").text("AmfPHP Back Office");
                    <?php if($config->fetchAmfphpUpdates){
                        echo 'showAmfphpUpdates();';
                    }?> 

                    
            });
            

                function resize(){
                    //dummy
                }
            
        </script>
        
    </body>    
</html>

