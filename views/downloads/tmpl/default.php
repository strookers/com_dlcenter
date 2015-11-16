<div class="neaccordion nevertical">
    <?php foreach ($this->emner as $i => $emne) : ?>
    <section id="<?php echo $emne->title; ?>">
        <h3><a href="#<?php echo $emne->title; ?>"><?php echo $emne->title; ?></a></h3>
        <table class="table table-striped" id = "downloadList" ><tbody>
        <?php foreach ($this->downloads as $i => $download) : ?>
            <?php
            if($download->emneid == $emne->title) :?>

            <tr>
                <td style="text-align: left; padding: 0px 0px 0px 10px; vertical-align: middle;">
                    <h4><?php echo $download->titel; ?></h4>
                </td>
                <td style="text-align: right; padding: 0px 10px 0px 0px; vertical-align: middle;">
                        <?php
                        if (!empty($download->download)):
                            $uploadPath = 'administrator' . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_dlcenter' . DIRECTORY_SEPARATOR . 'images/nordelektro/dlcenter' .DIRECTORY_SEPARATOR . $download->download;
                            echo '<a href="' . JRoute::_(JUri::base() . $uploadPath, false) . '" class="readmore" target="_blank" title="Hent fil" style="color: #fff;">Download</a>';
                        else:
                            echo $download->download;
                        endif; ?>
                </td>
            </tr>

            <?php endif; ?>
        <?php endforeach;?>
            </tbody></table>
    </section>
    <?php endforeach;?>
</div>