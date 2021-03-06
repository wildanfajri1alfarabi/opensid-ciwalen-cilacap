<?php

defined('BASEPATH') || exit('No direct script access allowed');

/*
 * File ini:
 *
 * View modal form untuk Modul Lapak Admin > Pelapak
 *
 *
 * donjo-app/views/lapak/pelapak/modal_form.php
 *
 */

/*
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @copyright	  Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	  Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 *
 * @see 	https://github.com/OpenSID/OpenSID
 */
?>

<?php $this->load->view('global/validasi_form'); ?>
<form id="validasi" action="<?= $form_action; ?>" method="POST">
	<div class="modal-body">
		<div class="form-group">
			<label class="control-label" for="kategori">Nama Pelapak</label>
			<select class="form-control input-sm select2 required" id="id_pend" name="id_pend" onchange="tampil_telepon($(this).find(':selected'))">
				<option value="">-- Silahkan Cari NIK - Nama Penduduk --</option>
				<?php foreach ($list_penduduk as $penduduk): ?>
					<option value="<?= $penduduk->id; ?>" <?= selected($main->id_pend, $penduduk->id); ?> data-telepon="<?= $penduduk->telepon; ?>"><?= $penduduk->nik . ' - ' . $penduduk->nama; ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label" for="nama">No. Telepon</label>
			<input class="form-control input-sm number required" type="text" name="telepon" id="telepon" placeholder="Nomer Telepon" value="<?= $main->telepon; ?>"/>
		</div>
	</div>
	<div class="modal-footer">
		<button type="reset" class="btn btn-social btn-flat btn-danger btn-sm pull-left"><i class="fa fa-times"></i> Batal</button>
		<button type="submit" class="btn btn-social btn-flat btn-info btn-sm"><i class="fa fa-check"></i> Simpan</button>
	</div>
</form>
<script type="text/javascript">
	function tampil_telepon(elem) {
		var telepon = elem.data('telepon');
		$('#telepon').val(telepon);
	}
</script>