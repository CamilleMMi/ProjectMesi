<link href="/ui/style.css" rel="stylesheet" type="text/css">

<nav>
    <a href="/account">Aller sur mon compte</a>
    <a href="/create_post">Créer un post</a>
    <a href="/mygallery">Voir tous mes posts</a>
    <a href="/logout">Déconnexion</a>
</nav>

<h1>Créer un post</h1>
<form action="" method="POST" id="form">
    <fieldset>
        <legend>Nouveau post</legend>
        <br>

        <label for="picture">Choisir un fichier (png, jpeg, gif)</label>
        <input type="file" id="picture" name="picture">
<br>
        <label for="title">Titre</label>
        <input type="text" id="title" name="title">
<br>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="5" cols="33"></textarea>
        <br>

        <input type="submit" value="Poster">
    </fieldset>
</form>

<div id="status"></div>

<script>

    const form = document.getElementById("form");
    const status = document.getElementById("status");
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
    
        const formdata = new FormData(form);
    
        const fetchOperations = async() => {
            status.innerHTML = `<i style="color: blue">En cours...</i>`;
    
            let response = await fetch('/upload_post',
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