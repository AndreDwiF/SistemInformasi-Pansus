<!-- 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

.style16 {
  font-weight: bold; 
  color: #FFFFFF; 
  font-family: "Times New Roman", Times, serif; 
}

</style>
</head>

<body>
<table width="1560" height="236" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <th width="26" height="38" bgcolor="#FF0000"><span class="style16">No</span></th>
    <th width="301" bgcolor="#FF0000"><div align="center" class="style16">KOMISI A </div></th>
    <th width="300" bgcolor="#FF0000"><div align="center" class="style16">KOMISI B </div></th>
    <th width="300" bgcolor="#FF0000"><div align="center" class="style16">KOMISI C </div></th>
    <th width="300" bgcolor="#FF0000"><div align="center" class="style16">KOMISI D </div></th>
    <th width="300" bgcolor="#FF0000"><div align="center" class="style16">LINTAS FRAKSI </div></th>
  </tr>

  <tr>
  <td>1. bgjabgjbajbgajb</td>
  </tr>
 
    <td height="46">1.</td>
    <td></td>
    <td>raperda tentang retribusi penggunaan tenaga kerja asing </td>
    <td><p>rancanagan Peraturan Daerah Kota Surabaya tentang Pusat Perbelanjaan(Prakarsa DPRD)</p>
    <p>Nama pansus diubah menjadi Pelayanan Bidang Perdagangan dan Perindustrian </p></td>
    <td>Raperda tentang Pengelolaan Cagar Budaya</td>
    <td>Rancangan keputusan DPRD Kota Surabaya tentang Pembentukan Khusus yang membahas perubahan ketiga atas peraturan DPRD Kota Surabaya Nomor 1 Tahun 2018 tentang Tata Tertib Dewan Perwakilan Rakyat Daerah Kota Surabaya </td>
 
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><ul>
      <li></li>
    </ul>
      <p>&nbsp;</p>
    <p>&nbsp; </p></td>
    <td><ul>
      <li>5 nov 2020 : rapat paripurna penyampaian penjelasan walikota</li>
    </ul></td>
    <td><ul>
      <li>6 januari 2020 : penjelasan DPRD </li>
    </ul></td>
    <td><ul>
      <li>2 desember 2021 : Rapat Pripurna Penjelasan Wali Kota </li>
    </ul></td>
    <td><ul>
      <li>2 Desember 2021 : rapat paripurna pembentukan pansus (masa kerja 60 hari kerja, mulai tanggal 2 desember 2021 s/d 24 februari 2022) </li>
    </ul></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SI-Pansus</title>
  <style>
    .text-center {
      text-align : center;
    }
  </style>
</head>
<body>
  <table width="100%" height="50px">
    <tr bgcolor="#FF0000">
      <th>No</th>
      <th>KOMISI A</th>
      <th>KOMISI B</th>
      <th>KOMISI C</th>
      <th>KOMISI D</th>
      <th>LINTAS FRAKSI</th>
    </tr>
    
    <tr>

    </tr>
    
  </table>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid pt-3">
     
     <table class="table">
      <thead>
        <tr class="bg-primary text-dark text-center bg-opacity-50">
          <th>No</th>
          <th>KOMISI A</th>
          <th>KOMISI B</th>
          <th>KOMISI C</th>
          <th>KOMISI D</th>
          <th>LINTAS FRAKSI</th>
        </tr>
      </thead>
      <tbody>
      <div class="row">
        <?php 
        $no=1; foreach($kasus as $data) : ?>
        <tr>
        <th><?php echo $no++; ?></th>
        
        <td>
        <?php if ( $data->id_topik === '5' ) : ?>
          <b><?php echo $data->nama_topik ?></b>
          <ul>
          <?php if ( $data->id_topik === '3' ) : ?>
            <li><?php echo $data->nama_rapat ?></li>
          <?php endif; ?>
        </ul>
        <?php endif; ?>
        </td>
        
       
      </tr>
      <?php endforeach; ?>
      </div>
      </tbody>
    </table> 

      
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>