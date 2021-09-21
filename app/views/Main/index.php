<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
    <!-- <button class="btn btn-default" id="send">Button</button> -->
    <?php

use phpfw\libs\Pagination;
use phpfw\widgets\Menu\Menu;

    // new Menu([
    //     'tpl' => WWW . '/menu/select.php',
    //     'container' => 'select',
    //     'table' => 'categories',
    //     'cache' => 60,
    //     'cacheKey' => 'select'

    // ]);

    // new Menu([
    //     'tpl' => WWW . '/menu/my_menu.php',
    //     'container' => 'ul',
    //     'table' => 'categories',
    //     'cache' => 60,
    //     'cacheKey' => 'menu'

    // ]);
    ?>
    <?php if (!empty($posts)) : ?>
        <?php foreach ($posts as $post) : ?>
            <div>
            <h3><p><?= $post['title'] ?></p></h3>
            <div class="img"><img src="<?= $post['img'] ?>" width="533" height="222" alt="img"></div>
            <p><?= $post['exerpt'] ?></p>
            <p><a href="<?=$post->id?>"><?php __('read_more')?></a></p>
            <hr>
            </div>
        
            
        <?php endforeach ?>

        <p>Статей:<?= count($posts); ?> из <?= $total ?></p>

        <?php if ($pagination->countPages > 1) : ?>
            <?=$pagination?>
        <?php endif ?>
    <?php endif ?>
</div>