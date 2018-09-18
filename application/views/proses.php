<?php
$data_sumber = array();
foreach ($sumber as $row) {
	$data_sumber[] = $row->Nama_Media;
	$data_sumber[] = $row->Type;
	$data_sumber[] = $row->Terbit;
	$data_sumber[] = $row->Website;
	$data_sumber[] = $row->Area;
	$data_sumber[] = $row->Alamat;
	$data_sumber[] = $row->Telp;
	$data_sumber[] = $row->Status;
	$data_sumber[] = $row->Update;
}
if (count($data_sumber) == null ) {
	$data['0'] = null;
}
else {
	for ($x=0; $x < count($data_sumber) ; $x++) { 
		$data[] = $data_sumber[$x]; 
	}
}
if (count($data_sumber) == null) {
	echo "{\"nama_media\":\"\"}";
}
else {
	echo "
	{		
	\"nama_media\":\"".$data['0']."\",
	\"type_media\":\"".$data['1']."\",
	\"terbit\":\"".$data['2']."\",
	\"website\":\"".$data['3']."\",
	\"area\":\"".$data['4']."\",
	\"alamat\":\"".$data['5']."\",
	\"telp\":\"".$data['6']."\",
	\"status\":\"".$data['7']."\",
	\"update\":\"".$data['8']."\"
	}
	";	
}

?>
