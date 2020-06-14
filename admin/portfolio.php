<?php require_once 'inc/header.php'; 

$posts = Portfolioitem::listar(); 

?>
<div class="content-wrapper">
<section class="content-header">
        <!-- Content Header (Page header) -->
        <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Portfolio</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</section>

<section class="content">
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Projects</h3>

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
                    Título
                </th>
                <th>
                    Usuário
                </th>
                <th>
                    Data de criação
                </th>
                <th style="width: 50%">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php
                
                foreach($posts as $post){
                    echo "<tr>";
                    echo "<td>".$post['titulo']."</td>";
                    echo "<td>".$post['user']."</td>";
                    echo "<td>".$post['data']."</td>";

                    echo ' <td class="project-actions text-right">';
                        echo '<a class="btn btn-info btn-sm" href="post_edit.php?id='.
                        $post["id"].
                        '">
                        <i class="fas fa-pencil-alt"></i>Editar</a> ';
                        echo '<a class="btn btn-danger btn-sm" href="?delete='.
                        $post["id"].
                        '">
                        <i class="fas fa-trash"></i>Excluir</a>';
                    echo '</td>';
                    echo "</tr>";
                }
                
                ?>
                
               
                
            </tr>
        </tbody></table>
  </div></div>
</section>
</div>

<?php
    if(isset($_GET['delete'])){
        $id = intval($_GET['delete']);
        
    }

?>
<td>
                    <a>
                        AdminLTE v3
                    </a>
                </td>
                <td>
                    admin
                </td>
                <td>
                    00/00/000
                </td>

<?php require_once 'inc/footer.php'; ?>