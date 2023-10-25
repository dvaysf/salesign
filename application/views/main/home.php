<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card-body">
        <table class="table ">
            <Center>
                <div class="card" style="width: 18rem;">
                    <img src="http://192.168.10.222:8080/chyntia/indexdesain/assets/microsoftTeamsImage__20_Remove.jpg" class="card-img-top">
                </div>
    </div>
    </Center>
    <tr>
        <td>
            <h6>Nama</h6>
        </td>
        <td>
            <h6>
                <?= $user['username'] ?>
            </h6>
        </td>
    </tr>
    <tr>
        <td>
            <h6>Email</h6>
        </td>
        <td>
            <h6>
                <?= $user['email'] ?>
            </h6>
        </td>
    </tr>
    </table>
</div>
</div>