<div>
    <h3>Daftar Menu</h3>
    <table>
        <thead>
            <th>id</th>
            <th>Jenis Menu</th>
            <th>Nama Menu</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Keterangan</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['menu'] as $menu){
        ?>
        <tr>
        <td><?=$menu['id'] ?></td>
        <td><?=$menu['jenisMenu'] ?></td>
        <td><?=$menu['namaMenu'] ?></td>
        <td><?=$menu['stok'] ?></td>
        <td><?=$menu['Harga'] ?></td>
        <?php
        if($menu['keterangan'] == 1) {
            if ($menu['keterangan'] >= 1){
                $keterangan = 'Tersedia';
            } else {
                $status = 'Habis'
            }
        }  ?>
        </tr>
    </table>
</div>