<link href="/ui/style.css" rel="stylesheet" type="text/css">

<nav>
    <a href="/account">Aller sur mon compte</a>
    <a href="/create_post">Créer un post</a>
    <a href="/mygallery">Voir tous mes posts</a>
    <a href="/logout">Déconnexion</a>
</nav>

<h1>Tout mes posts</h1>

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
