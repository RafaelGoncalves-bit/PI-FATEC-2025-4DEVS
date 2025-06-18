<?php
  require_once "../../config.php";
  include ROOT_PATH . "/views/partials/header.php";
  include ROOT_PATH . "/views/partials/navbar.php";

  
  if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'admin') {
    header("Location: " . BASE_URL . "/views/admin/login.php");
    exit;
  } 
?>

<div class="container my-5">
  <h2 class="text-center mb-4" style="color: #d81b60; font-weight: bold;">Histórico de Pedidos</h2>

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Pedido Nº</th>
          <th scope="col">Cliente</th>
          <th scope="col">Itens</th>
          <th scope="col">Observações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td class="text-capitalize">joão</td>
          <td class="text-capitalize">hambúrguer</td>
          <td class="text-capitalize">completo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td class="text-capitalize">jacob</td>
          <td class="text-capitalize">fritas</td>
          <td class="text-capitalize">com cheddar e bacon</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td class="text-capitalize">jefferson</td>
          <td class="text-capitalize">cachorro-quente</td>
          <td class="text-capitalize">sem salada</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<?php
  include ROOT_PATH . "/views/partials/footer.html";
?>
