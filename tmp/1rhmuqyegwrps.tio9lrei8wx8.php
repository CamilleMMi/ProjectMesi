<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">
  </head>
<body>
  <style>
    .admin {
      background-color: #FF5733 !important;
      color: white;
    }

    .client {
      background-color: #FFC300 !important;
      color: white;
    }

    .artist {
      background-color: #79CB03 !important;
      color: white;
    }

    .visitor {
      background-color: #03BEC1 !important;
      color: white;
    }

    .inactif {
      background-color: #9a001a !important;
      color: white;
      font-weight: bolder;
    }

    .actif {
      background-color: #d3ff96 !important;
    }

    .btn-success {
      background-color: #79CB03 !important;
      border-color: #79CB03 !important;
    }
  </style>

    <h1>TABLEAU DE BORD - ADMIN</h1>

    <table
    id="table"
    data-toggle="table"
    data-pagination="true"
    data-sortable="true"
    data-show-columns-search="true"
    data-filter-control="true"
    data-row-style="rowStyleFirst"
    data-url="/data_user">
    <thead>
        <tr>
        <th data-field="actions" data-align="center" data-formatter="formatterUser">Actions</th>
        <th data-field="_id" data-filter-control="input">ID</th>
        <th data-field="email" data-filter-control="input">Email</th>
        <th data-field="compte_actif" data-filter-control="select" data-cell-style="cellStyleStatut">Compte actif</th>
        <th data-field="role" data-filter-control="select" data-cell-style="formatterRole">Role</th>
        </tr>
    </thead>
    </table>
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.2/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
</html>

<script>
function formatterUser(value, row, index, field) {
    const buttons = `<a href="/admin/${row._id}/info" class="btn btnEdit btn-info"><i class="bi bi-search"></i></a>
                     <a href="/admin/${row._id}/edit" class="btn btnEdit btn-warning"><i class="bi bi-pencil-square"></i></a>`;
    const activateButton = row.compte_actif != 0 ? `<a href="/dashboard/${row._id}/updateStatut" class="btn btn-danger delete"><i class="bi bi-trash-fill"></i></a>` : `<a href="/dashboard/${row._id}/updateStatut" class="btn btn-success delete"><i class="bi bi-plus-circle-fill"></i></a>`;

    return `<div class="btn-group" role="group" aria-label="Basic example"> ${buttons} ${activateButton}</div>`;
}

function formatterRole(value, row, index, field) {
  return {
        classes: value === 'admin' ? 'admin' : (value === 'artist') ? 'artist' : (value === 'client') ? 'client' : 'visitor'
    };
}

function cellStyleStatut(value, row, index, field) {
  return {
        classes: value === 0 ? 'inactif' : 'actif'
    };
}

</script>