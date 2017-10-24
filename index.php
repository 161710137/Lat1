<?php
require_once 'data.php';

$namanya = new data('Dimas','Badminton','Cilisung');
echo "namanya...".$namanya->get_dt().'<br>';
echo "hobi...".$namanya->get_hb().'<br>';
echo "alamat...".$namanya->get_al().'<br>';
?>