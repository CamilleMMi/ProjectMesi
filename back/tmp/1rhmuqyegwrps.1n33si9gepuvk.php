<div class="list">
    <?php foreach (($posts?:[]) as $post): ?>
        <div>
            <?php if ($post['picture']): ?>
                <img src="../<?= ($post['picture']) ?>" width="100" height="100">
            <?php endif; ?>
            <h2><?= ($post['title']) ?></h2>
            <p><?= ($post['description']) ?></p>
            <p><small>Posté le <?= ($post['post_date']) ?> <br>
                par <a href="/<?= ($post['user']['pseudo']) ?>/profil"><img src="../<?= ($post['user']['photo_profile']) ?>" width="50" height="50"><b><?= ($post['user']['pseudo']) ?></b></a></small></p>
            <a href="/post/<?= ($post['_id']) ?>">Voir plus</a>
            <hr>
        </div>
    <?php endforeach; ?>
</div>