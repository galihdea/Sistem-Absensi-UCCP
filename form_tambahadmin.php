<!DOCTYPE HTML>
<html>

<body>
    <script src="js/validator.js">
    //script validasi form. Source: http://1000hz.github.io/bootstrap-validator/
    </script>
    <script>
    //Value untuk mengisi Home / ....
    let page_header = "Tambah Admin"
    </script>
    <!--custom-widgets-->
    <div class="modal fade" id="modalTambah">
        <div class="col-sm-2"></div>
        <div class="col-sm-9">
            <div class="grid-1" style="padding-right: 30px;padding-left: 20px;margin-right:31px; margin-left:10px;">
                <h3 class="inner-tittle one" algin="left">Contoh Form Tambah Admin</h3><hr>
                <div class="form-body margin-form">
                    <form method="POST" action="functions/tambah_admin.php" class="form-horizontal"
                        data-toggle="validator" role="form">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Username Admin</label>
                            <div class="col-sm-10">
                                <input name="username" type="text" class="form-control1" id="inputName"
                                    placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Password Admin</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" data-minlength="6" class="form-control"
                                    id="inputPassword" placeholder="Password" required>
                                <div class="help-block">Minimum of 6 characters</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Nama Admin</label>
                            <div class="col-sm-10">
                                <input name="namaadmin" type="text" class="form-control1" id="inputName"
                                    placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selector1" class="col-sm-2 control-label ratakiri konten-modal">Status Admin</label>
                            <div class="col-sm-10">
                                <select name="statusadmin" id="selector1" class="form-control1" required>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Admin">Admin</option>
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