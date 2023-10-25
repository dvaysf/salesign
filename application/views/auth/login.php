<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <img src="http://192.168.10.222:8080/chyntia/indexdesain/assets/microsoftTeamsImage__20_Remove.jpg" width="150" height="80" class="rounded mx-auto d-block" alt="...">
                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="card-body">
                    <form class="user" method="POST" action="<?= base_url('auth') ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="username" name="username" type="text" />
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="password" type="password" />
                            <label for="password">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>