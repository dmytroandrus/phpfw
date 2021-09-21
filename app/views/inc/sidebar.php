<div id="sidebar">
    <div class="categories">
        <h2><?php __('categories'); ?></h2>
        <ul>
            <?php foreach ($categories as $category) : ?>
                <li>
                    <?=$category->title ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="recent_posts">
        <h2><?php __('recent_posts'); ?></h2>
        <ul>
            <?php foreach ($allPosts as $post) : ?>
                <li>
                    <?= $post['title'] ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>