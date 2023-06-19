<h1>Tout mes posts</h1>

<?php if ($posts): ?>
    <?php else: ?><p style="color: grey">Vous n'avez pas encore poster quelque chose.</p>
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
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/post/<?= ($post['id']) ?>" class="btn btn-info">Voir plus</a>
                <a href="/post/<?= ($post['id']) ?>/edit" class="btn btn-warning">Modifier</a>
                <a href="/post/<?= ($post['id']) ?>/delete" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
