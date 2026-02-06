<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">SGM - Painel de Controle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


      </ul>
        <span class = "text-light">
        
            Óla Maria Solicitante |
            <button class="btn btn-outline-light" type="submit">Sair</button>
        </span>
    </div>
  </div>
</nav>


<main class="container mt-4">
    <div class = "d-flex justify-content-between">
        <h1 class="fs-4">Minhas Solicitações</h1>
        <button type="button" class="btn btn-success">+ Nova Solicitação</button>
    </div>



    <table class="table mt-5 border shadow-lg">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Local</th>
        <th scope="col">Descrição</th>
        <th scope="col">Data</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Bloco Administrativo - Recepção</td>
        <td>Vazando agua pela lampada </td>
        <td>04/02/2026</td>
        <td> <button type="button" class="btn btn-secondary"><i class="bi bi-x-octagon"></i> Fechado</button></td>
        </tr>

        
    </tbody>
    </table>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>