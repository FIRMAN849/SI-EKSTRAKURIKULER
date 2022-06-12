<!--Begin page-->
<div class="container-fluid">

    <!--Title-->
    <h1 class="h3 mb-4 text-bg-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">

            <?php echo $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Ekskul</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alasan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pendaftar as $dftr) : ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $dftr['nama'] ?></td>
                            <td><?php echo $dftr['nisn'] ?></td>
                            <td><?php echo $dftr['jenis_kelamin'] ?></td>
                            <td><?php echo $dftr['no_hp'] ?></td>
                            <td><?php echo $dftr['alamat'] ?></td>
                            <td><?php echo $dftr['ekskul'] ?></td>
                            <td><?php echo $dftr['tgl_lahir'] ?></td>
                            <td><?php echo $dftr['alasan'] ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/hapuspendaftar/'); ?><?php echo $dftr['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?')">Delete</a>
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