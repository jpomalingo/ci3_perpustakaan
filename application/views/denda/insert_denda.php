<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Tambah Kategori Denda</h6>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo site_url('denda/insert_submit/');?>">
			<table class="table table-striped">
				<tr>
					<td>Keterangan</td>
                    <td><input type="text" placeholder="masukkan keterangan" name="keterangan" class="form-control" required=""></td>
				</tr>
                <tr>
					<td>Jumlah Denda</td>
                    <td><input type="number" placeholder="masukkan jumlah" name="jum_denda" class="form-control" required=""></td>
                    </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><button type="submit" class="btn btn-success" name="submit">Simpan</button></td>
				</tr>
			</table>
		</form>
	</div>
</div>