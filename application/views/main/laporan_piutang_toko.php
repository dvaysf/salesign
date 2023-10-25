<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan Piutang Toko</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Piutang Toko</li>
    </ol>
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Dari Tgl</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Sampai Tgl</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">No. Inv</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Laporan Piutang Toko
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Tgl Inv</th>
                            <th>No Inv</th>
                            <th>Nama Cus</th>
                            <th>Nominal</th>
                            <th>Jml PLU</th>
                            <th>Status Delivery</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tgl Inv</th>
                            <th>No Inv</th>
                            <th>Nama Cus</th>
                            <th>Nominal</th>
                            <th>Jml PLU</th>
                            <th>Status Delivery</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>