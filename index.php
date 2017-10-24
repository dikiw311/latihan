<?php

require_once 'identitas.php';

echo "1.".'<br>';
$biodata1 = new identitas('Alif', 'Bandung', 'XI RPL 2', 'Pelajar');
echo "Nama = ".$biodata1->get_nama().'<br>';
echo "Tempat Lahir = ".$biodata1->get_tl().'<br>';
echo "Kelas =".$biodata1->get_kelas().'<br>';
echo "Status = ".$biodata1->get_status().'<br>';
echo "2.".'<br>';
$biodata2 = new identitas('Angga', 'Bandung', 'XI RPL 2', 'Pelajar');
echo "Nama = ".$biodata2->get_nama().'<br>';
echo "Tempat Lahir = ".$biodata2->get_tl().'<br>';
echo "Kelas = ".$biodata2->get_kelas().'<br>';
echo "Status =".$biodata2->get_status().'<br>';
echo "3.".'<br>';
$biodata3 = new identitas('Diki', 'Tasikmalaya', 'XI RPL 2', 'Pelajar');
echo "Nama = ".$biodata3->get_nama().'<br>';
echo "Tempat Lahir = ".$biodata3->get_tl().'<br>';
echo "Kelas = ".$biodata3->get_kelas().'<br>';
echo "Status =".$biodata3->get_status().'<br>';
echo "4.".'<br>';
$biodata4 = new identitas('Irfan', 'Garut', 'XI RPL 2', 'Pelajar');
echo "Nama = ".$biodata4->get_nama().'<br>';
echo "Tempat Lahir = ".$biodata4->get_tl().'<br>';
echo "Kelas = ".$biodata4->get_kelas().'<br>';
echo "Status =".$biodata4->get_status().'<br>';
echo "5".'<br>';
$biodata5 = new identitas('Robi', 'Yogyakarta', 'XI RPL 2', 'Pelajar');
echo "Nama = ".$biodata5->get_nama().'<br>';
echo "Tempat Lahir = ".$biodata5->get_tl().'<br>';
echo "Kelas = ".$biodata5->get_kelas().'<br>';
echo "Status =".$biodata5->get_status().'<br>';


?>