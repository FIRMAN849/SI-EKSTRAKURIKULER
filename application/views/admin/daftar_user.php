<!--Begin page-->
<div class="container-fluid">

    <!--Title-->
    <h1 class="h3 mb-4 text-bg-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-sm-4">

            <?php echo $this->session->flashdata('message'); ?>

            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Rombongan</th>
                        <th scope="col">Role Id</th>
                        <th scope="col">is_active</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $d) : ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $d['nama'] ?></td>
                            <td><?php echo $d['nisn'] ?></td>
                            <td><?php echo $d['email'] ?></td>
                            <td><?php echo $d['alamat'] ?></td>
                            <td><?php echo $d['tgl_lahir'] ?></td>
                            <td><?php echo $d['kelas'] ?></td>
                            <td><?php echo $d['rombongan'] ?></td>
                            <td><?php echo $d['role_id'] ?></td>
                            <td><?php echo $d['is_active'] ?></td>
                            <td><?php echo $d['date_create'] ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/hapususer/'); ?><?php echo $d['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?')">Delete</a>
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