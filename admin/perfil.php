<?php
require_once 'inc/header.php';

$user = new Usuario();
$data = $user->getData($_SESSION['id']);
$id = $_SESSION['id'];

if(isset($_POST['salvar'])){
  $nome = addslashes($_POST['name']);
  $usuario = addslashes($_POST['username']);
  $senha = addslashes($_POST['senha']);
  $user->update($id, $nome, $usuario, $senha);
  $data = $user->getData($_SESSION['id']);

}


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Editar Perfil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Seu nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome..." value="<?php echo $data['nome']?>">
                  </div>
                  <div class="form-group">
                    <label for="username">Nome de usuário</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Nome de usuário" value="<?php echo $data['usuario']?>">
                  </div>
                  <div class="form-group">
                    <label for="senha">Nova Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha...">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
    <!-- /.content-wrapper -->

    <?php
    require_once 'inc/footer.php';

    ?>