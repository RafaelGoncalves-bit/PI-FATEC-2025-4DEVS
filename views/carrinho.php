<?php
  require_once "../config.php";
  include ROOT_PATH . "/views/partials/header.php";
  include ROOT_PATH . "/views/partials/navbar.php";

    
  if (!isset($_SESSION['tipo_usuario'])) {
      header("Location: " . BASE_URL . "/views/admin/login.php");
      exit;
  }
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>Pedidos</h2>
        </div>
        <div class="card-body">
            <!-- Número do Pedido -->
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <h4><strong>Número do Pedido:</strong> #12345</h4>
                </div>
                <div>
                    <h4><strong>Cliente:</strong> João Silva</h4>
                </div>
            </div>

            <!-- Tabela do Carrinho -->
            <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Itens</th>
                          <th>Preço</th>
                          <th>Observações</th>
                          <th>Quantidade</th>
                          <th>Ações</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Exemplo de uma linha do carrinho -->
                      <tr>
                          <td>Hamburguer</td>
                          <td>R$ 20,00</td>
                          <td>Médio</td>
                          <td>2</td>
                          <td><button class="btn btn-danger-style">Deletar</button></td>
                      </tr>
                      <tr>
                          <td>Fritas</td>
                          <td>R$ 10,00</td>
                          <td>Grande</td>
                          <td>1</td>
                          <td><button class="btn btn-danger-style">Deletar</button></td>
                      </tr>
                  </tbody>
              </table>
            </div>

            <!-- Total -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h4><strong>Total:</strong></h4>
                <h4><span class="text-success">R$ 30,00</span></h4>
            </div>
            <!-- Botões -->
                <div class="d-flex justify-content-end mt-3">
                    <button onclick="window.location.href='index.php'" class="btn btn-login me-2">Adicione Mais Itens</button>
                    <button class="btn btn-login" data-bs-toggle="modal" data-bs-target="#confirmarPedidoModal">Confirmar</button>
                </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmação -->
<div class="modal fade" id="confirmarPedidoModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Confirmar Pedido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Resumo do Pedido:</strong></p>
        <ul>
          <li>Hamburguer (2x) - R$ 20,00</li>
          <li>Fritas (1x) - R$ 10,00</li>
          <li><strong>Total:</strong> R$ 30,00</li>
        </ul>
        <p>Deseja realmente confirmar este pedido?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="window.location.href='index.php'" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<?php
  include ROOT_PATH . "/views/partials/footer.html";
?>
