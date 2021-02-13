<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			<?php echo "<b> $item->title </b> konusu düzenleniyor..."; ?>
		</h4>
	</div>
	<div class="col-md-12">

		<div class="widget">
			<div class="widget-body">
				<form action="<?php echo base_url("subject/update/$item->id"); ?>" method="post">
					<div class="form-group">
						<label>Sınav Adı</label>
						<select class="form-control" name="exam">
							<option value="<?php echo $current_exam->id; ?>"><?php echo $current_exam->name; ?></option>
							<?php foreach ($exams as $exam) { ?>
								<?php if($exam->id != $current_exam->id) { ?>
								  <option value="<?php echo $exam->id ?>"><?php echo $exam->name; ?></option>
							    <?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Ders Adı</label>
						<select class="form-control" name="lesson">
							<option value="<?php echo $current_lesson->id; ?>"><?php echo $current_lesson->name; ?></option>
							<?php foreach ($lessons as $lesson) { ?>
								<?php if($lesson->id != $current_lesson->id) { ?>
								  <option value="<?php echo $lesson->id ?>"><?php echo $lesson->name; ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Konu Başlığı</label>
						<input class="form-control" placeholder="Başlık..." name="title" value="<?php echo $item->title; ?>">
						<?php if(isset($form_error)) { ?>
							<small class="input-form-error pull-right"><?php echo form_error("title"); ?></small>
						<?php } ?>
					</div>
					<div class="form-group">
						<label>Video Url</label>
						<input class="form-control" placeholder="Url..." name="video" value="<?php echo $item->video_url; ?>">
					</div>
					<div class="form-group">
						<label>Açıklama</label>
						<textarea class="form-control text-left" rows="10" cols="100" name="description" placeholder="Açıklama..."><?php echo $item->description; ?></textarea>
					</div>

					<div class="form-group">
						<label>İçerik</label>
						<textarea name="content" class="m-0" data-plugin="summernote" data-options="{height: 250}">
							<?php echo $item->content; ?>
						</textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
					<a href="<?php echo base_url("subject"); ?>" class="btn btn-danger btn-md btn-outline">İptal</a>
				</form>
			</div>
		</div>
		
	</div>
	
</div>