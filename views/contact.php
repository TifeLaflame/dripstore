<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- views file acts as a template file  -->
    <?=$message?>
    <form action="post">
        <input type="text" name="" id="">
    </form>
    <?php
    foreach($arrNavLinks as $link)
    {?>
        <a href="index.php?action=<?=$link->url?>"><?=$link->name?></a> <br/>
    <?php
    }
    ?>
    <?=$news?>
</body>
</html>