<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			Konular
			<a href="<?php echo base_url("subject/new_form"); ?>" class="pull-right btn btn-outline btn-primary btn-xs"> <i class="fa fa-plus"></i> Yeni ekle</a>
		</h4>
	</div>
	<div class="col-md-12">
		<div class="widget p-lg">

			<?php if (empty($items)) { ?>
				<div class="alert alert-info text-center">
					<p>Burada herhangi bir veri bulunmamaktadır. Eklemek için <a href="<?php echo base_url("subject/new_form"); ?>">tıklayınız</a></p>
				</div>
			<?php } else { ?>

				<table class="table table-hover table-striped table-bordered">
					<thead>
						<th>#id</th>
						<th>Sınav Adı</th>
						<th>Ders Adı</th>
						<th>Konu Başlığı</th>
						<th>Durumu</th>
						<th>İşlem</th>
					</thead>
					<tbody>

						<?php foreach ($items as $item) { ?>

							<tr>
								<td>#<?php echo $item->id; ?></td>
								<td><?php echo $item->exam_name; ?></td>
								<td><?php echo $item->lesson_name ?></td>
								<td><?php echo $item->title; ?></td>
								<td>
									<input
                                     data-url="<?php echo base_url("subject/isActiveSetter/$item->id"); ?>"
                                     class="isActive"
									 type="checkbox"
									 data-switchery 
									 data-color="#10c469"
									 <?php echo ($item->isActive) ? "checked" : ""; ?>
									 />
								</td>
								<td>
									<button data-url="<?php echo base_url("subject/delete/$item->id")?>"
                                            type="button" class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil</button>
									<a href="<?php echo base_url("subject/update_form/$item->id");?>" type="button" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
									<a href="<?php echo base_url("subject/image_form/$item->id");?>" type="button" class="btn btn-sm btn-dark btn-outline"><i class="fa fa-image"></i> Resimler</a>
								</td>
							</tr>

						<?php } ?>

					</tbody>
				</table>

			<?php } ?>
		</div>
	</div>
</div>