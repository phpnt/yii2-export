<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 05.07.2016
 * Time: 21:24
 */
/* @var $widget phpnt\exportFile\ExportFile */
use yii\bootstrap\Html;
?>
<div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
    <?php
    if ($widget->xls) {
        echo Html::beginForm(['/export/excel'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('searchAttributes', $widget->searchAttributes);
        echo Html::hiddenInput('sort', $widget->sort);
        echo Html::hiddenInput('page', $widget->page);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->xlsButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
    }
    ?>
</div>
<div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
    <?php
    if ($widget->xls) {
        //echo Html::beginForm(['/export/csv'], 'post');
        echo Html::beginForm(['/export/xls'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('searchAttributes', $widget->searchAttributes);
        echo Html::hiddenInput('sort', $widget->sort);
        echo Html::hiddenInput('page', $widget->page);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::hiddenInput('csvCharset', $widget->csvCharset);
        echo Html::submitButton($widget->csvButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
    }
    ?>
</div>
<div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
    <?php
    if ($widget->word) {
        echo Html::beginForm(['/export/word'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('searchAttributes', $widget->searchAttributes);
        echo Html::hiddenInput('sort', $widget->sort);
        echo Html::hiddenInput('page', $widget->page);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->wordButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
    }
    ?>
</div>
<div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
    <?php
    if ($widget->html) {
        echo Html::beginForm(['/export/html'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('searchAttributes', $widget->searchAttributes);
        echo Html::hiddenInput('sort', $widget->sort);
        echo Html::hiddenInput('page', $widget->page);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->htmlButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
    }
    ?>
</div>
<div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
    <?php
    //if ($widget->html) {
    if ($widget->pdf) {
        echo Html::beginForm(['/export/pdf'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('searchAttributes', $widget->searchAttributes);
        echo Html::hiddenInput('sort', $widget->sort);
        echo Html::hiddenInput('page', $widget->page);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->pdfButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
    }
    ?>
</div>

