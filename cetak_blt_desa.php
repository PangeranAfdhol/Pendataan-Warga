<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="UTF-8">
    <title>CETAK</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  </head>
  <table width='100%'>
<tr>
<td valign='middle' align='center' width='10px'>
<img src='img/img/tt.jpg' style='max-width:80px'/>
</td>
<td align='center' valign='baseline'>
<h3 style='margin-left:-100px; margin-top:9px'><b>KABUPATEN ROKAN HULU<br/>
KECAMATAN RAMBAH<br/>
DESA SUKA MAJU<br/></b></h3>
</td>
</tr>
</table>
<hr style='border:3px solid #000'/>
<br/>
</center>
	<div class="container ">
		<center><h3> DATA PENERIMA</h3></center>
	</div>

	<?php 
	include 'koneksi.php';
	?>

	<table border="2" style="width: 100% ">
		<tr>
            <th scope="col">No KK</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama </th>
            <th scope="col">TTL </th>
            <th scope="col">Alamat </th>
            <th scope="col">Jenis Bantuan </th>
            <th scope="col">RT/RW </th>
            <th scope="col">Dusun </th>
            <th scope="col">Desa</th>
            <th scope="col">Agama</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Jenis Kelamin</th>

		</tr>
		<?php
					$dataSql = mysqli_query($db, "select nik, no_kk, nama, tempatLahir ,tglLahir, alamat, bantuan, rt, rw, dusun, desa, agama, pekerjaan, no_telepon, gender, year(NOW())-year(tglLahir) from penduduk where bantuan = 'BLT Dana Desa'");
					if (mysqli_num_rows($dataSql) > 0) {
						while($data = mysqli_fetch_array($dataSql)) {
					?>
					<tr>
          <td><?php echo $data['nik']; ?></td>
            <td><?php echo $data['no_kk']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['tempatLahir'] . ", " . $data['tglLahir']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['bantuan']; ?></td>
						<td><?php echo $data['rt'] . "/" . $data['rw']; ?></td>
						<td><?php echo $data['dusun']; ?></td>
						<td><?php echo $data['desa']; ?></td>
						<td><?php echo $data['agama']; ?></td>
						<td><?php echo $data['pekerjaan']; ?></td>
            <td><?php echo $data['no_telepon']; ?></td>
						<td><?php echo $data['gender']; ?></td>
					</tr>
					<?php
						}
					}
					?>
	</table>

	<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>&nbsp;</span></p>
<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>&nbsp;</span></p>
<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>&nbsp;</span></p>
<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>&nbsp;</span></p>
<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>&nbsp;</span></p>

	<p class=MsoNormal align=center style='margin-left:3.5in;text-align:center;
text-indent:0.5in'><span style='font-size:12.0pt;line-height:125%;font-family:
"Times New Roman","serif"'>Desa Suka Maju, 
 <script type="text/javascript">
//  <!--
 function showTime() {
     var a_p = "";
     var today = new Date();
     var curr_hour = today.getHours();
     var curr_minute = today.getMinutes();
     var curr_second = today.getSeconds();
     if (curr_hour < 12) {
         a_p = "AM";
     } else {
         a_p = "PM";
     }
     if (curr_hour == 0) {
         curr_hour = 12;
     }
     if (curr_hour > 12) {
         curr_hour = curr_hour - 12;
     }
     curr_hour = checkTime(curr_hour);
     curr_minute = checkTime(curr_minute);
     curr_second = checkTime(curr_second);
 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
     }
 
 function checkTime(i) {
     if (i < 10) {
         i = "0" + i;
     }
     return i;
 }
 setInterval(showTime, 500);
 //-->
 </script>
 
 <!-- Menampilkan Hari, Bulan dan Tahun -->

 <script type='text/javascript'>
//  <!--
 var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
 var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
 var date = new Date();
 var day = date.getDate();
 var month = date.getMonth();
 var thisDay = date.getDay(),
     thisDay = myDays[thisDay];
 var yy = date.getYear();
 var year = (yy < 1000) ? yy + 1900 : yy;
 document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
 //-->
 </script></span><script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>
</p>

<p class=MsoNormal align=center style='margin-left:3.5in;text-align:center;
text-indent:.5in'><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>KEPALA DESA SUKA MAJU</span></p>
<p class=MsoNormal align=center style='margin-left:1.5in;text-align:center;
text-indent:.5in'><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>Sekretaris desa.</span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=right style='text-align:right'><span style='font-size:
12.0pt;line-height:115%;font-family:"Times New Roman","serif"'>&nbsp;</span></p>
<p class=MsoNormal align=center style='margin-left:3.5in;text-align:center;
text-indent:.5in'><span style='font-size:12.0pt;line-height:115%;font-family:
"Times New Roman","serif"'>LIZA MURDIANI</span></p>
	<script>
		window.print();
	</script>
</div>
</body>
</html>