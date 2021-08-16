<!-- Begin Page Content -->
<?php
$sql = "SELECT * FROM pages";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Страницы</h1>
    <a href="?type=add_page">Добавить страницу</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Active</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Active</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach ($pages as $page):?>
                        <tr>
                            <td><?=$page['id']?></td>
                            <td><?=$page['name']?></td>
                            <td><?=$page['content']?></td>
                            <td><?=$page['active']?></td>
                            <td><?=$page['created_at']?></td>
                            <td>
                                <a href="?type=edit_page&id=<?=$page['id']?>">Редактировать</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->