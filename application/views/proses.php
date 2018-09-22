<?php
$data_sumber[] = array();
foreach ($sumber as $row) {
	$data_sumber['1'] = $row->Nama_Media;
	$data_sumber['2'] = $row->Type;
	$data_sumber['3'] = $row->Terbit;
	$data_sumber['4'] = $row->Website;
	$data_sumber['5'] = $row->Area;
	$data_sumber['6'] = $row->Alamat;
	$data_sumber['7'] = $row->Telp;
	$data_sumber['8'] = $row->Status;
	$data_sumber['9'] = $row->Update;
}
$data_report = array();
foreach ($report as $row) {
	$data_report[] = $row->Comment;
}

if (count($data_sumber) == 1) {
$rate['tambah'] = "20";	
echo "
<div class='card card-outline'>
        <div class='card-header' style='font-weight: bold'>Tentang Sumber</div>
        <div class='card-content card-content-padding'>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-100'>Sumber tidak terdaftar di Dewan Pers</div>
          </div>
</div>
      </div>          
	";
}
else {
$data_sumber['10'] = "100";	
echo "
<div class='card card-outline'>
        <div class='card-header' style='font-weight: bold'>Tentang Sumber</div>
        <div class='card-content card-content-padding'>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Nama Media</div>
              <div class='col-50'>".$data_sumber['1']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Type Media</div>
              <div class='col-50'>".$data_sumber['2']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Penerbitan</div>
              <div class='col-50'>".$data_sumber['3']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Website</div>
              <div class='col-50'>".$data_sumber['4']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Area</div>
              <div class='col-50'>".$data_sumber['5']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Alamat</div>
              <div class='col-50'>".$data_sumber['6']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Telepon</div>
              <div class='col-50'>".$data_sumber['7']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Status</div>
              <div class='col-50' style='color: #129217; font-weight: bold'>".$data_sumber['8']."</div>
          </div>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>Update</div>
              <div class='col-50'>".$data_sumber['9']."</div>
          </div>
        </div>
      </div>
";
}
$space = " ";
$judul = getTitle($_GET['url']).$space.getTitle($_GET['url']);
foreach ($word as $row) {
	if ( strripos ($judul, $row->word_name) > 0) {
		$kata[] = $row->word_name;
		$rate[] = $row->rating;
	}
}
echo "
<div class='card card-outline'>
        <div class='card-header' style='font-weight: bold'>Content yg terindikasi Hoax</div>
        <div class='card-content card-content-padding'>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50' style='font-size: 16px ; font-weight: bold;'>Kata</div>
              <div class='col-50' style='font-size: 16px ; font-weight: bold;'>Persentase</div>
          </div>
";
$kata[] = "null";
$rate[] = "0";
for ($x=0; $x < count($kata) ; $x++) { 
echo "
<div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-50'>".$kata[$x]."</div>
              <div class='col-50'>".$rate[$x]." %</div>
          </div>
	";
}
echo "
</div>
        <div class='card-footer'>
          Persentase Konten ".array_sum($rate)." %
        </div>
      </div>
";
if (count($data_report) == 1) {
	echo "<input id='persen' type='hidden' value='100'>";
}
else {
	echo "<input id='persen' type='hidden' value='".array_sum($rate)."'>";
}

?>

