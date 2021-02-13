<div class="row">
    <div class="col-md-12">

        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("subject/image_upload/$item->id"); ?>" class="dropzone"
                      data-plugin="dropzone"
                      data-options="{ url: '<?php echo base_url("subject/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buraya sürükleyiniz.</h3>
                        <p class="m-b-lg text-muted">(Dosyanızı yüklemek için buraya sürükleyin ya da tıklayın.)</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b><?php echo $item->title; ?></b> kaydına ait Resimler
        </h4>
    </div>
    <div class="col-md-12">

        <div class="widget">
            <div class="widget-body">

                <?php if (empty($item_images)) { ?>
                    <div class="alert alert-info text-center">
                        <p>Burada herhangi bir resim bulunmamaktadır.</p>
                    </div>
                <?php } else { ?>

                    <table class="table table-bordered table-striped table-hover pictures_list">
                        <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                        </thead>
                        <tbody>
                        <?php foreach ($item_images as $item_image) { ?>
                            <tr>
                                <td class="w100 text-center">#<?php echo $item_image->id; ?></td>
                                <td class="w100 text-center">
                                    <img width="30"
                                         src="<?php echo base_url("uploads/{$viewFolder}/$item_image->img_url"); ?>"
                                         alt="<?php echo $item_image->img_url; ?>" class="img-responsive">
                                </td>
                                <td><?php echo $item_image->img_url; ?></td>
                                <td class="w100 text-center">
                                    <input
                                            data-url="#"
                                            class="isActive"
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                        <?php echo ($item_image->id) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="w100 text-center">
                                    <button data-url="#"
                                            type="button"
                                            class="btn btn-sm btn-danger btn-outline btn-block remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                <?php } ?>
            </div>
        </div>
    </div>
</div>