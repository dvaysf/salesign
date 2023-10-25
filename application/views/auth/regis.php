<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <img src="http://192.168.10.222:8080/chyntia/indexdesain/assets/microsoftTeamsImage__20_Remove.jpg" width="150" height="80" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="card-body">
                    <form class="petugas" method="POST" action="<?= base_url('auth/regis'); ?>">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="nama" name="nama" type="text" />
                                    <label for="nama">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="username" name="username" type="text" />
                                    <label for="username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" />
                            <label for="email">Email</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="password1" name="password1" type="password" />
                                    <label for="password1">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="password2" name="password2" type="password" />
                                    <label for="password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">Membuat Akun</a>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                </div>
            </div>
        </div>
    </div>
</div>