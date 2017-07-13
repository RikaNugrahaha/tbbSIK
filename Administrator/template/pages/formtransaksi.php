 <div class="container-fluid" id="container">
	<div class="teks-mod">
  <form action="antrian.html" method="post" >
	<div id="form" class="form">
	<h3><b>Tambah Transaksi Rekam Medis</b></h3>

   <label>Id Transaksi
    <span class="small"></span>
  </label>
  <p class="form-control-static">T7717</p>

  <label>Id Pasien
    <span class="small"></span>
  </label>
  <p class="form-control-static">C2262</p>

  <label>Dokter
		<span class="small"></span>
	</label>
	<select name="Dokter" id="Dokter" class="highlight"><?php foreach($list_dokter as $ld): ?>
  <option value="<?php echo $ld['id_dokter'] ?>"><?php echo $ld['nama_dokter']?></option><?php endforeach ?>
  </select>

    <label>Ruangan
    <span class="small"></span>
  </label>
  <select name="Ruangan" id="Ruangan" class="highlight"><?php foreach($list_ruangan as $lr): ?>
  <option value="<?php echo $ld['no_ruangan'] ?>"><?php echo $lr['nama_ruangan']?></option><?php endforeach ?>
  </select>

  <label>Tanggal
    <span class="small"></span>
  </label>
  <input type="date" name="tanggal" id="tanggal" class="highlight">
	

	<label>Keluhan
		<span class="small"></span>
	</label>
  <textarea name="keluhan" rows="4" cols="50" name="keluhan" id="keluhan"  class="highlight"></textarea>

	<button type="submit">Simpan</button>
	</form>
	</div>
	</form>
	</div>
	</div>