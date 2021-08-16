<?php
/**
 * @var $connection
*/
$sql = "SELECT * FROM pages WHERE id = ".$_GET['id'];
$res = mysqli_query($connection, $sql);
$page = mysqli_fetch_assoc($res);
$page['active']? $isActive = 'checked': $isActive = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $active = isset($_POST['active'])? 1 : 0;

    $sql = "UPDATE pages SET name = '{$_POST['name']}', content = '{$_POST['content']}',active = $active WHERE id =".$_GET['id'];
    $res = mysqli_query($connection, $sql);
}

?>



<div class="container-fluid">
    <div>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Название статьи</label>
                <input type="text" class="form-control" name="name" value="<?=$page['name']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Статья</label>
                <textarea class="form-control" name="content" ><?=$page['content']?></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="active" id="active" <?=$isActive?>>
                <label class="form-check-label" for="active">Выводить на сайте?</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
