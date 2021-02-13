<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="<?php echo base_url("sonuclar"); ?>">
                    <?php foreach ($items as $item) { ?>
                        <div>
                            <div class="pv-30 ph-20 feature-box bordered shadow object-non-visible animated object-visible fadeInDownSmall"
                                 data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                <h4 class="text-center" style="font-family: Roboto"><?php echo $item->question; ?></h4>
                                <input type="hidden" name="questionIds[]" value="<?php echo $item->id; ?>">
                                <div class="separator clearfix"></div>
                                <table class="table table-hover">
                                    <tbody>
                                    <?php foreach (findAnswerByQuestion($item->id) as $answer) { ?>

                                        <tr>
                                            <div class="form-check">
                                                <td width="25" class="text-center">
                                                    <input class="form-check-input" type="radio"
                                                           name="answer_<?php echo $answer->question_id; ?>"
                                                           value="<?php echo $answer->id; ?>">
                                                </td>
                                                <td width="500" style="font-family: Ubuntu">
                                                    <?php echo $answer->content; ?>
                                                </td>

                                            </div>
                                        </tr>

                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="text-center">
                        <button type="submit" class="btn radius-50 btn-animated btn-l btn-default">Testi bitir <i
                                    class="fa fa-check"></i></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
