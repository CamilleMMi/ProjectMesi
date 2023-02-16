<style>
    legend {
        background-color: black;
        color: white;
        padding: 0.3em 2em;
    }
</style>
<h1>Mon compte</h1>
<form action="" method="POST" id="form">
    <fieldset>
        <legend>stylé mdr</legend>

        <img src="<?= ($user['photo_profile']) ?>">
        <br>

        <label for="photo_profile">Choisir une photo de profile</label>
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

<hr>

<a href="/create_post">Créer un post</a> | <a href="#">Voir tout mes posts</a>

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