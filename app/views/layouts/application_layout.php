<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo WEB_ROOT . "css/custom.css" ?>" rel="stylesheet">
    <title><?php echo APP_NAME; ?></title>
</head>
<body>
<h1>Application Layout</h1>
<?php echo $yield; ?>
<?php echo $_SERVER['SCRIPT_FILENAME']; ?>
</body>
</html>
