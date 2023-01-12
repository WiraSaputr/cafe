<?php
if ($aksi == 'index') {
    $data['jenis'] = $db->query($connect, "SELECT * FROM tbmenu");
    $helpers->load_view('menu/listmenu',$data);
}