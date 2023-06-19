<?php if ($post['picture']): ?>
    <img src="../<?= ($post['picture']) ?>">
<?php endif; ?>

<h1>Post N°<span id="post_id"><?= ($post['_id']) ?></span></h1>

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
<form action="" class="form-group" method="POST" id="form">
[pseudo]
<label for="body">Commentaire</label>
<textarea class="form-control" id="body" name="body" rows="5" cols="33">Ecrire un commentaire</textarea>
<button class="btn btn-success" type="submit">Envoyer</button>
</form>

<div id="status"></div>

<hr>

<!-- Liste de tous les commentaires -->

<div id="liste_commentaires">
    <?php foreach (($commentaires?:[]) as $commentaire): ?>
        <div class="form-group">
            <b><?= ($commentaire['user']['pseudo']) ?></b>
            <p class="form-control" id="body" name="body" rows="5" cols="33"><?= ($commentaire['body']) ?></p>
            <i>Posté le <?= ($commentaire['date']) ?></i>
        </div>
    <?php endforeach; ?>
</div>

<script>
    const form = document.getElementById("form");
    const status = document.getElementById("status");

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formdata = new FormData(form);

        const fetchOperations = async() => {
            status.innerHTML = `<i style="color: blue">En cours...</i>`;

            let response = await fetch('/post/' + document.getElementById("post_id").textContent + '/send_comment',
                {
                    method: 'POST',
                    body: formdata
                });
            if (response.ok) {
                status.innerHTML = `<b style="color: green">Post crées !</b>`;
                console.log(response.url);
                window.location.href = response.url;
            }
            else { console.log(response.status); }
        }
        fetchOperations();
    })
</script>

