<?php require_once 'inc/header.php'; 

$portfolio = PortfolioItem::listar(); 

if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    PortfolioItem::delete($id);
    $portfolio = PortfolioItem::listar(); 

}
?>
<div class="content-wrapper">
<section class="content-header">
        <!-- Content Header (Page header) -->
        <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Blog</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</section>

<section class="content">
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Portfólio</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 20%">
                    Link
                </th>
                <th>
                    Imagem
                </th>
                <th>
                    Data de criação
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php
                if(count($portfolio) > 0){
  
                  foreach($portfolio as $item){
                    echo "<tr>";
                    echo "<td>".$item['link']."</td>";
                    echo "<td>".$item['imagem']."</td>";
                    echo "<td>".$item['date_log']."</td>";

                    echo ' <td class="project-actions text-right">';
                        echo '<a class="btn btn-info btn-sm" href="portfolio_edit.php?id='.
                        $item["id"].
                        '">
                        <i class="fas fa-pencil-alt"></i>Editar</a> ';
                        echo '<a class="btn btn-danger btn-sm" href="?delete='.
                        $item["id"].
                        '">
                        <i class="fas fa-trash"></i>Excluir</a>';
                    echo '</td>';
                    echo "</tr>";
                  }
                }
                
                
                ?>
                
               
                
            </tr>
        </tbody></table>
  </div></div>
</section>
</div>


<?php require_once 'inc/footer.php'; ?>