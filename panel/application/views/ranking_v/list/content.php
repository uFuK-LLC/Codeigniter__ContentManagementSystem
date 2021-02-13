<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Genel Sıralama
        </h4>
    </div>
    <div class="col-md-12">
        <form method="post" action="<?php echo base_url("ranking/do_finish"); ?>">
            <div class="widget p-lg">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                    <th>Sıra</th>
                    <th>Email</th>
                    <th>Kullanıcı adı</th>
                    <th>Skor</th>
                    </thead>
                    <tbody>
                    <?php $rank = 0; ?>
                    <?php foreach ($items as $item) { ?>
                        <input type="hidden" name="userIds[]" value="<?php echo $item->user_id; ?>">
                        <?php $rank++; ?>
                        <tr>
                            <td style="width: 50px"><?php echo $rank; ?></td>
                            <td style="width: 100px"><?php echo $item->email; ?></td>
                            <td style="width: 100px"><?php echo $item->username; ?></td>
                            <td style="width: 100px"><?php echo $item->score; ?></td>
                        </tr>

                    <?php } ?>

                    </tbody>
                </table>
            </div>
            <div class="widget">
                <div class="widget-body">
                    <button type="submit" class="btn btn-primary btn-md">Sonlandır</button>
                </div>
            </div>
        </form>
    </div>
</div>