<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">SGM - Painel de Controle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


      </ul>
      <form class="d-flex gap-3" role="search">
         <a href="" class="btn btn-link text-light">Chamados</a>

         <a href=""class="btn btn-link text-secondary" >Locais</a>
        <button class="btn btn-outline-light" type="submit">Sair</button>
      </form>
    </div>
  </div>
</nav>


<main class="container mt-4">
    <h1 class="fs-4">Minhas Solicitações</h1>
    <div class = "d-flex gap-2"> 
        <button type="button" class="btn btn-outline-secondary">Todos</button>
        <button type="button" class="btn btn-outline-primary">Aberto</button>
        <button type="button" class="btn btn-outline-warning">Em execução</button>
        <button type="button" class="btn btn-outline-success">Concluido</button>

    </div>  
    



    <table class="table mt-4 border shadow-lg">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Solicitante</th>
        <th scope="col">Local</th>
        <th scope="col">Prioridade</th>
        <th scope="col">Técnico</th>
        <th scope="col">Status</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Maria Solicitante </td>
        <td>Bloco Administrativo - Recepção</td>
        <td> <i class="bi bi-circle-fill text-warning"></i> ALTA</td>
        <td>João Técnico</td>
        <td> <button type="button" class="btn btn-secondary"><i class="bi bi-x-octagon"></i> Fechado</button></td>
        <td> <button type="button" class="btn btn-primary"> <i class="bi bi-eye"></i> Gerenciar </button> </td>

        </tr>

        
    </tbody>
    </table>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>