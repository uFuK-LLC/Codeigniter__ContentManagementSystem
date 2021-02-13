<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			Yeni Konu Ekle
		</h4>
	</div>
	<div class="col-md-12">

		<div class="widget">
			<div class="widget-body">
				<form action="<?php echo base_url("subject/save"); ?>" method="post">
					<div class="form-group">
						<label>Sınav Adı</label>
						<select class="form-control" name="exam">
							<option>----</option>
							<?php foreach ($exams as $exam) { ?>
								<option value="<?php echo $exam->id ?>"><?php echo $exam->name; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Ders Adı</label>
						<select class="form-control" name="lesson">
							<option>----</option>
							<?php foreach ($lessons as $lesson) { ?>
								<option value="<?php echo $lesson->id ?>"><?php echo $lesson->name; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Konu Başlığı</label>
						<input class="form-control" placeholder="Başlık..." name="title">
						<?php if(isset($form_error)) { ?>
							<small class="input-form-error pull-right"><?php echo form_error("title"); ?></small>
						<?php } ?>
					</div>
					<div class="form-group">
						<label>Video Url</label>
						<input class="form-control" placeholder="Url..." name="video">
					</div>
					<div class="form-group">
						<label>Açıklama</label>
						<textarea class="form-control" name="description" placeholder="Açıklama..."></textarea>
					</div>

					<div class="form-group">
						<label>İçerik</label>
						<textarea name="content" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
					<a href="<?php echo base_url("subject"); ?>" class="btn btn-danger btn-md btn-outline">İptal</a>
				</form>
			</div>
		</div>
		
	</div>
	
</div>