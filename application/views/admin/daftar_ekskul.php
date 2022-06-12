<!--Begin page-->
<div class="container-fluid">

    <!--Title-->
    <h1 class="h3 mb-4 text-bg-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?php echo form_error('ekskul', '<div class="alert alert-danger" role="alert">
            ', '
            </div>'); ?>

            <?php echo $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newEkskulModal"><i class="fas fa-plus"></i> Tambah Ekskul</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Ekstrakurikuler</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($daftar as $d) : ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $d['nama_ekskul'] ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/editdaftarekskul/'); ?><?php echo $d['id'] ?>" class="badge badge-success" data-toggle="modal" data-target="#editEkskulModal<?= $d['id'] ?>">Edit</a>
                                <a href="<?php echo base_url('admin/hapus/'); ?><?php echo $d['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?')">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!--End content-->
</div>

<!-- Modal -->


<!-- Modal -->
<div class="modal fade" id="newEkskulModal" tabindex="-1" role="dialog" aria-labelledby="newEkskulModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEkskulModalLabel">Tambah Ekskul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/daftarekskul'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="ekskul" name="ekskul" placeholder="Nama Ekstrakurikuler">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<?php foreach ($daftar as $d) : ?>
    <div class="modal fade" id="editEkskulModal<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editEkskulModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEkskulModalLabel">Edit Ekskul</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('admin/editdaftarekskul/'); ?><?php echo $d['id'] ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $d['id'] ?>">
                            <input type="text" class="form-control" id="ekskul" name="ekskul" placeholder="Nama Ekstrakurikuler" value="<?php echo $d['nama_ekskul'] ?>">
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>