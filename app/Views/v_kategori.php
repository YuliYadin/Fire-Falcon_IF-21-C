<div class="content-wrapper bg-gray color-palette">
    <!-- Content Header (Page header) -->
    <section class="content-header ">

        <h1>
            <i class="fa fa-dashboard"></i>
            Dashboard
            <small>Arsip 2023</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard" style=" font-weight: bold;"></i> Dashboard</a> / <a>Home</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Kategori</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambahkan</i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($Kategori as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_file']; ?></td>
                                    <td><?= $value['nama_kategori']; ?></td>
                                    <td></td>
                                </tr>
                            <?php    } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </section>
</div>