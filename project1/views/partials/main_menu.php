<?php
$menu = [
    '/' => 'HOME',
    '/blog' => 'БЛОГ',
    '/catalog' => 'КАТАЛОГ',
    '/login' => 'ЛОГИН'
]
?>

<navigation class="nav">
    <div class="nav-block">
        <navigation-logo class="nav-logo">
            <a class="nav-logo-text" href="./index_blog.html">MY SHOP</a>
        </navigation-logo>
        <navigation-link class="nav-link">
            <?php foreach ($menu as $link => $item): ?>
            <a class="nav-link1" href="<?=$link?>"><?=$item?></a>
            <?php endforeach; ?>
        </navigation-link>
    </div>
    <navigation-button>
        <button class="nav-button">&#128722;&nbsp;Cart</button>
    </navigation-button>
</navigation>
