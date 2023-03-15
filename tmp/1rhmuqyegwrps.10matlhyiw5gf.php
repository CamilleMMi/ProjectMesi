<link href="/ui/style.css" rel="stylesheet" type="text/css">

<nav>
    <a href="/account">Aller sur mon compte</a>
    <a href="/create_post">Créer un post</a>
    <a href="/mygallery">Voir tous mes posts</a>
    <a href="/logout">Déconnexion</a>
</nav>

<?php if ($post['picture']): ?>
    <img src="../<?= ($post['picture']) ?>">
<?php endif; ?>

<h1>Post N°<?= ($post['_id']) ?></h1>

<fieldset>
    <legend><h3><?= ($post['title']) ?></h3></legend>
    <p><?= ($post['description']) ?></p>

    <hr>

    <br>
    <small><i>Posté le <?= ($post['post_date']) ?></i></small>
</fieldset>

<br>
<b>Like : <?= ($post['like_amount']) ?></b> | <b>Vues : <?= ($post['view_amount']) ?></b>

<br><hr>

<h2>Commentaires</h2>
