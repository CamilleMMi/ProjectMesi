<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, Bootstrap Table!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">
  </head>
<body>
    <h1>TABLEAU DE BORD - ADMIN</h1>

    <table
    id="table"
    data-toggle="table"
    data-url="/data_user">
    <thead>
        <tr>
        <th data-field="_id">ID</th>
        <th data-field="email">Email</th>
        <th data-field="compte_actif">Compte actif</th>
        <th data-field="role">Role</th>
        </tr>
    </thead>
    </table>
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
</html>