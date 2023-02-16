<style>
    legend {
        background-color: black;
        color: white;
        padding: 0em 2em;
    }
</style>

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
