<?php
require_once 'inc/header.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $data = post::getpostById($id);

    if(isset($_POST['atualizar'])){
        $titulo = addslashes($_POST['titulo']);
        $descricao = addslashes($_POST['descricao']);
        Post::update($id, $titulo, $descricao);
        $data = post::getpostById($id);

    }
    
}else{
    $data =[];
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
                <h3 class="card-title">Adicionar Novo Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título do Post" value="<?php echo isset($data['titulo'])?$data['titulo']:"" ?>">
                  </div>
                  <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea id="" class="form-control" cols="30" rows="10" name="descricao" placeholder="Digite aqui..."><?php echo isset($data['descricao'])?$data['descricao']:"" ?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="atualizar">Atualizar</button>
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