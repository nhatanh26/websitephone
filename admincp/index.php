<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminncp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
</head>
<div>
    <h3 class="title_admin">wellcome to AdminCP</h3>
    <div class="wrapper">
    <?php 
        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
    ?>
    </div>
</body>
</html>