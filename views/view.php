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
<?php if ($widget->xls): ?>
    <div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
        <?php
        echo Html::beginForm(['/export/excel'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('queryParams', $widget->queryParams);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->xlsButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
        ?>
    </div>
<?php endif; ?>
<?php if ($widget->csv): ?>
    <div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
        <?php
        echo Html::beginForm(['/export/csv'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('queryParams', $widget->queryParams);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->csvButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
        ?>
    </div>
<?php endif; ?>
<?php if ($widget->word): ?>
    <div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
        <?php
        echo Html::beginForm(['/export/word'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('queryParams', $widget->queryParams);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->wordButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
        ?>
    </div>
<?php endif; ?>
<?php if ($widget->html): ?>
    <div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
        <?php
        echo Html::beginForm(['/export/html'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('queryParams', $widget->queryParams);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->htmlButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
        ?>
    </div>
<?php endif; ?>
<?php if ($widget->pdf): ?>
    <div class="<?= $widget->blockClass ?>" style="<?= $widget->blockStyle ?>">
        <?php
        echo Html::beginForm(['/export/pdf'], 'post');
        echo Html::hiddenInput('model', $widget->model);
        echo Html::hiddenInput('queryParams', $widget->queryParams);
        echo Html::hiddenInput('getAll', $widget->getAll);
        echo Html::hiddenInput('title', $widget->title);
        echo Html::submitButton($widget->pdfButtonName,
            ['class' => $widget->buttonClass,]
        );
        echo Html::endForm();
        ?>
    </div>
<?php endif; ?>
