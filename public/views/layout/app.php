<?php
    $cat = getCategories();
    $sub = getSubCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href=<?= CSS_FILE ?> />
    <title>Cycle Market</title>
</head>
<body>
    <header>
        <div>
            <img id="logo" src="logo.jpg">
            <form method="GET" action="#">
                <input name="search" type="text"/>
                <button type="submit">Submit</button>
            </form>
            <?php if(isConnectedUser()) : ?>
                <div>
                    <img src="">
                    <span>Bonjour<?php getCurrentUser()->getName() ?></span>
                </div>
            <?php endif ?>
        </div>
        <nav>
            <ul class="categories">
                <?php foreach ($cat as $c) : ?>
                    <li>
                        <span><?= $c->getName() ?></span>
                        <div class="sub-categories">
                            <ul>
                                <?php foreach ($sub as $s) : ?>
                                    <li>
                                        <?= $s->getName() ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>
    <?= $content ?>
</body>
<footer>
</footer>
</html>