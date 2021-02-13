<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Genel Sıralama
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <table class="table table-hover table-striped table-bordered">
                <thead>
                <th>#id</th>
                <th>Eposta</th>
                <th>Kullanıcı adı</th>
                <th>Statü</th>
                <th>İşlem</th>
                </thead>
                <tbody>
                <?php foreach ($items as $item) { ?>

                    <tr>
                        <td ><?php echo $item->id; ?></td>
                        <td ><?php echo $item->email; ?></td>
                        <td ><?php echo $item->username; ?></td>
                        <td ><?php echo $item->type; ?></td>
                        <td >
                            <button data-url=""
                                    type="button" class="btn btn-sm btn-danger btn-outline remove-btn">
                                <i class="fa fa-warning"></i> Engelle
                            </button>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>