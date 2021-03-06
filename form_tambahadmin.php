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
    let page_header = "Tambah Admin"
    </script>
    <!--custom-widgets-->
    <div class="modal fade" id="modalTambah">
        <div class="col-sm-2"></div>
        <div class="col-sm-9">
            <div class="grid-1" style="padding-right: 30px;padding-left: 20px;margin-right:31px; margin-left:10px;">
                <h3 class="inner-tittle two" algin="left"> Form Tambah Admin</h3><hr>
                <div class="form-body margin-form">
                    <form method="POST" action="functions/tambah_admin.php" class="form-horizontal"
                        data-toggle="validator" role="form">
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Email</label>
                            <div class="col-sm-9">
                                <input name="email" type="email" class="form-control1" id="inputName" data-error="Maaf, format email tidak sesuai." placeholder="Email" required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Username Admin</label>
                            <div class="col-sm-9">
                                <input name="username" data-minlength="1" type="text" class="form-control1" id="inputName" data-error="Maaf, username minimal 1 karakter."placeholder="Username" required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Password Admin</label>
                            <div class="col-sm-9">
                                <input name="password" type="password" data-minlength="6" class="form-control"
                                    id="inputPassword" placeholder="Password" data-error="Maaf, password minimal 6 karakter." required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                            </div>
                        </div>
                        <div class="form-group marginLR0">
                            <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Nama Admin</label>
                            <div class="col-sm-9">
                                <input name="namaadmin" type="text" class="form-control1" id="inputName"
                                data-error="Maaf, nama admin tidak boleh kosong." placeholder="Nama" required>
                                <div class="help-block with-errors" style="color: #a94442 !important;"></div>
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