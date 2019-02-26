<!DOCTYPE HTML>
<html>
<style type="text/css">
    .marginLR0{
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
</style>

<body>
    <script src="js/validator.js">
    //script validasi form. Source: http://1000hz.github.io/bootstrap-validator/
    </script>
    <script>
    //Value untuk mengisi Home / ....
    let page_header = "Tambah Pegawai"
    </script>
    <!--custom-widgets-->
    <div class="modal fade" id="modalTambah">
	<div class="col-sm-2"></div>
	<div class="col-sm-9">
            <div class="grid-1" style="padding-right: 30px;padding-left: 20px;margin-right:31px; margin-left:10px;">
                <h3 class="inner-tittle two"> Form Tambah Pegawai</h3><hr>
                <div class="form-body margin-form">
                    <form method="POST" action="functions/tambah_pegawai.php" class="form-horizontal"
                        data-toggle="validator" role="form">
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Email</label>
                            <div class="col-sm-9">
                                <input name="email" type="email" class="form-control1" id="inputName" data-error="Maaf, format email tidak sesuai." placeholder="Email" required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Username Pegawai</label>
                            <div class="col-sm-9">
                                <input name="username" data-minlength="1" type="text" class="form-control1" id="inputName" data-error="Maaf, username minimal 1 karakter."placeholder="Username" required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Password Pegawai</label>
                            <div class="col-sm-9">
                                <input name="password" type="password" data-minlength="6" class="form-control"
                                    id="inputPassword" placeholder="Password" data-error="Maaf, password minimal 6 karakter." required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input name="namapegawai" type="text" class="form-control1" id="inputName"
                                data-error="Maaf, nama admin tidak boleh kosong." placeholder="Nama" required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="selector1" class="col-sm-3 control-label ratakiri konten-modal">Divisi Pegawai</label>
                            <div class="col-sm-9">
                                <select name="divisipegawai" id="selector1" class="form-control1" required>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="selector1" class="col-sm-3 control-label ratakiri konten-modal">Status Pegawai</label>
                            <div class="col-sm-9">
                                <select name="statuspegawai" id="selector1" class="form-control1" required>
                                    <option value="Manager Divisi">Manager Divisi</option>
                                    <option value="Staf Divisi">Staf Divisi</option>
                                    <option value="Intern">Intern</option>
                                </select>
                            </div>
                        </div>
						<div align="right">
                        <a data-dismiss="modal" class="btn blue four bgred tombol-back">Cancel</a>
                        <button type="submit" class="btn btn-default">Submit</button>
						</div>
                    </form>
                </div>
            </div>
		</div>
    </div>
	
</body>

</html>