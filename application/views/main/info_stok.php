<div class="container-fluid px-4">
    <h1 class="mt-4">Info Stok</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Info Stok</li>
    </ol>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Info Stok
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Jenis</th>
                            <th>Total Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Jenis</th>
                            <th>Total Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($info_stok as $al) : ?>
                            <tr>
                                <input type="hidden" name="kode_barang" value="<? $al['kode_barang'] ?>">
                                <input type="hidden" name="nama_barang" value="<? $al['nama_barang'] ?>">
                                <input type="hidden" name="merek" value="<? $al['merek'] ?>">
                                <input type="hidden" name="jenis" value="<? $al['harga'] ?>">
                                <input type="hidden" name="total_stok" value="<? $al['total_stok'] ?>">
                                <td><?= $al['kode_barang'] ?></td>
                                <td><?= $al['nama_barang'] ?></td>
                                <td><?= $al['merek'] ?></td>
                                <td><?= $al['jenis'] ?></td>
                                <td><?= $al['total_stok'] ?></td>
                                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kp_Modal<?php echo $al['id']; ?>"> Detail </button> </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="edit_kp_Modal<?php echo $al['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <form action=" " method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label for="nama">Kode Barang</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['kode_barang'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Nama Barang</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['nama_barang'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Merek</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['merek'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Jenis</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['jenis'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Harga</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['harga'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Jumlah Karton</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['jumlah_karton'] ?>" readonly>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label for="nama">Stok Karton</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['stok_karton'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Stok Lepasan</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['lepasan'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Total Stok</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['total_stok'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Satuan</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['satuan'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">PLU Supplier</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['PLU_supplier'] ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama">Lokasi</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['lokasi'] ?>" readonly>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>