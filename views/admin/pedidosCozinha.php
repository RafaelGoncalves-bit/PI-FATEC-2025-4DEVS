<?php
  require_once "../../config.php";
  include ROOT_PATH . "/views/partials/header.php";
  include ROOT_PATH . "/views/partials/navbar.php";

  
  if (!isset($_SESSION['tipo_usuario'])) {
      header("Location: " . BASE_URL . "/views/admin/login.php");
      exit;
  }
  

?>

<div class="container my-5">
  <h2 class="mb-4 text-center" style="color: #d81b60; font-weight: bold;">Pedidos na Cozinha</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Cliente</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Observações</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>Maria</td>
          <td>Brigadeiro Gourmet</td>
          <td>12</td>
          <td>Sem granulado</td>
          <td><span class="badge status status-aguardando">Aguardando</span></td>
        </tr>
        <tr>
          <td>002</td>
          <td>João</td>
          <td>Bolo de Morango</td>
          <td>1</td>
          <td>Com recheio extra</td>
          <td><span class="badge status status-preparo">Em preparo</span></td>
        </tr>
        <tr>
          <td>003</td>
          <td>Ana</td>
          <td>Beijinho</td>
          <td>20</td>
          <td>-</td>
          <td><span class="badge status status-pronto">Pronto</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<?php
  include ROOT_PATH . "/views/partials/footer.html";
?>

