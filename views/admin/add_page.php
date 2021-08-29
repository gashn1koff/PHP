<!-- Begin Page Content -->
<?php
/*
 * @var $connection mysqli
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $active = isset($_POST['active'])? 1 : 0;

    $sql = "INSERT INTO pages(name, content, active) VALUES ('{$_POST['name']}', '{$_POST['content']}', $active)";
    $res = mysqli_query($connection, $sql);
}

?>
<div class="container-fluid">
    <div>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Название статьи</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Статья</label>
                <textarea class="form-control" name="content"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="active" id="active">
                <label class="form-check-label" for="active">Выводить на сайте?</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->