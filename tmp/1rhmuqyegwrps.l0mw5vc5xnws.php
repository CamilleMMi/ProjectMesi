<link href="/ui/style.css" rel="stylesheet" type="text/css">

<nav>
    <a href="/account">Aller sur mon compte</a>
    <a href="/create_post">Créer un post</a>
    <a href="/mygallery">Voir tous mes posts</a>
    <a href="/logout">Déconnexion</a>
</nav>

<h1>Mon compte</h1>
<form action="" method="POST" id="form">
    <fieldset>
        <legend>Modifier</legend>

        <img src="<?= ($user['photo_profile']) ?>" width="100" height="100">
        <small>Photo de profile actuelle</small>
        <br>

        <label for="photo_profile">Modifier la photo de profile</label>
        <input type="file" id="photo_profile" name="photo_profile">
<br>
        <label for="email">Email</label>
        <input type="mail" id="email" name="email" value="<?= ($user['email']) ?>">
<br>
        <a href="#">Modifier mon mot de passe</a>
<br>
        <input type="submit" value="mettre à jour">
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

        let response = await fetch('/update',
            {
                method: 'POST',
                body: formdata
            });
        if (response.ok) {
            status.innerHTML = `<b style="color: green">Mis à jour !</b>`;
        }
        else { console.log(response.status); }
    }

    fetchOperations();
})

</script>