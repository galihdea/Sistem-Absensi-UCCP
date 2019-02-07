<!DOCTYPE HTML>
<html>

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
	<div class="col-sm-7">

            <div class="grid-1"style="margin-left:10px;width: 1052px;height: 438px;">
                <h3 class="inner-tittle two">Contoh Form Tambah Pegawai</h3><hr>
                <div class="form-body margin-form">
                    <form method="POST" action="functions/tambah_pegawai.php" class="form-horizontal"
                        data-toggle="validator" role="form">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Username Pegawai</label>
                            <div class="col-sm-10">
                                <input name="username" type="text" class="form-control1" id="inputName"
                                    placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Password Pegawai</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" data-minlength="6" class="form-control"
                                    id="inputPassword" placeholder="Password" required>
                                <div class="help-block">Minimum of 6 characters</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Nama Pegawai</label>
                            <div class="col-sm-10">
                                <input name="namapegawai" type="text" class="form-control1" id="inputName"
                                    placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selector1" class="col-sm-2 control-label ratakiri konten-modal">Divisi Pegawai</label>
                            <div class="col-sm-10">
                                <select name="divisipegawai" id="selector1" class="form-control1" required>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selector1" class="col-sm-2 control-label ratakiri konten-modal">Status Pegawai</label>
                            <div class="col-sm-10">
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