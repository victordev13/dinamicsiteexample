<?php require_once 'header.php'; ?>
<div class="header">
    <h1>Posts</h1><br>
    <hr><br>
</div>

<div style="width: 80%;">
    <h3>Novo post</h3><br>
    <form methot="post">
        <input type="text" placeholder="Título">
        <textarea class="post" name="descricao" id="" rows="10"></textarea>
        <input type="submit" class='btn btn-dark btn-me' value="Adicionar">
    </form>
</div>

<?php require_once 'footer.php'; ?>