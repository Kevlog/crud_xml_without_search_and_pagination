<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Mahasiswa SI '18 A</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Data Mahasiswa Sistem Informasi 2018 A</h1>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Situs Web</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    //load xml file
                    $file = simplexml_load_file('files/members.xml');
                    
                    foreach($file->mahasiswa as $row){
                        ?>
                        <tr>
                            <td><?php echo $row->nim; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->situs; ?></td>
                            <td>
                                <a href="#edit_<?php echo $row->nim; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
                                <a href="#delete_<?php echo $row->nim; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                            </td>
                            <?php include('edit_delete_modal.php'); ?>
                        </tr>
                        <?php
                    }
        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="navbar navbar-collapse navbar-fixed-bottom">
        <div class="container">
            <div class="col-sm-4 col-sm-offset-4" style="text-align: center;">
                <p>Rois | Jales | Kevin | Sulistya</p>
                <hr>
                <p>&copy; 2020 | by RoJaK's Team</p>
            </div>
        </div>
    </div>
</div>
<?php include('add_modal.php'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>