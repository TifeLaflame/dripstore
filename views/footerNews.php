<h2>Footer News Links</h2>
<ul>
    <?php 
    foreach($data as $newsItem)
    {?>
        <li><?=$newsItem->name?></li>
    <?php
    }
    ?>
</ul>