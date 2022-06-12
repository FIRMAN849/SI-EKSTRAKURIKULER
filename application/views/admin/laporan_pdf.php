<!DOCTYPE html>
<html lang="en">
<head><title></title>
</head><body>
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
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body></html>