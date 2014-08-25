<?php
    // add autogenerated meta description
    $this->headMeta()->setName('description', Website_Tool_Text::cutStringRespectingWhitespace(Website_Tool_Text::getStringAsOneLine(strip_tags($this->wysiwyg("content")->getData())), 160));
?>

<section class="area-wysiwyg">

    <div class="row">
        <div class="col-sm-8">
            <?php $this->glossary()->start(); ?>
                <?= $this->wysiwyg("content"); ?>
            <?php $this->glossary()->stop(); ?>
        </div>
        <div class="col-sm-4">
            <?php while ($this->block("images")->loop()) { ?>
                <a href="<?= $this->image("image")->getThumbnail("galleryLightbox"); ?>" class="thumbnail">
                    <?= $this->image("image", [
                        "thumbnail" => "galleryThumbnail"
                    ]); ?>
                </a>
            <?php } ?>
        </div>
    </div>
</section>