<?php
require_once 'inc/header.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $data = PortfolioItem::getItemPortfolio($id);

    if(isset($_POST['atualizar'])){
        $link = addslashes($_POST['link']);
        $imagem = addslashes($_POST['imagem']);
        PortfolioItem::update($id, $link, $imagem);
        $data = PortfolioItem::getItemPortfolio($id);
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
                <h3 class="card-title">Editar item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="link">URL</label>
                    <input type="text" name="link" class="form-control" id="link" placeholder="Link do projeto" required  value="<?php echo isset($data['link'])?$data['link']:"" ?>">
                  </div>
                  <div class="form-group">
                    <label for="imagem">Imagem</label>
                    <input type="text" name="imagem" id="imagem" class="form-control" placeholder="Link da imagem" onkeyup="imgPreview()" required  value="<?php echo isset($data['imagem'])?$data['imagem']:"" ?>">
                  </div>
                  <label>Imagem Preview</label>
                  <div class="form-group" id="div-preview" style="border: solid 1px #ddd; padding: 20px 50px;height: 300px; width: 400px; display: none">
                    <img src="" alt="" id="preview" style="max-width: 300px;">
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
<script>
  function imgPreview(){
    var imgURL = document.getElementById("imagem").value;
    var preview = document.getElementById("preview");
    var divPreview = document.getElementById("div-preview");

    var img = new Image();
    img.src = imgURL;
    img.onload = function() {
        divPreview.style.display = 'block';
        preview.src = imgURL;
        
    }
    img.onerror = function() {
      preview.src="";
      divPreview.style.display = 'none';
	}

  }
</script>

    <!-- /.content-wrapper -->

    <?php
    require_once 'inc/footer.php';

    ?>