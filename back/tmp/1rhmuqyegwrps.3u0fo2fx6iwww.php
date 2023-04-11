<img src="../<?= ($user['photo_profile']) ?>" width="100" height="100"><br>
<p><?= ($user['pseudo']) ?></p>
<hr>
<p><?= ($user['description']) ?></p>
<br>
<hr>

<h2>Gallerie de <?= ($user['pseudo']) ?></h2>
<?php if ($posts): ?>
    <?php else: ?><p style="color: grey">Aucun post</p>
<?php endif; ?>
<div class="list">
    <?php foreach (($posts?:[]) as $post): ?>
        <div>
            <?php if ($post['picture']): ?>
                <img src="../<?= ($post['picture']) ?>" width="100" height="100">
            <?php endif; ?>
            <h2><?= ($post['title']) ?></h2>
            <p><?= ($post['description']) ?></p>
            <p><small>Posté le <?= ($post['post_date']) ?></small></p>
            <a href="/post/<?= ($post['id']) ?>">Voir plus</a>
            <hr>
        </div>
    <?php endforeach; ?>
</div>