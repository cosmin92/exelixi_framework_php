<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .header {
            margin: 0;
            padding: 10px;
            background-color: red;
        }

        .body {
            margin: 0;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1><?php echo 'ERROR: ' . $title; ?></h1>
</div>
<div class="body">
    <?php echo $content; ?>
</div>


</body>
</html>