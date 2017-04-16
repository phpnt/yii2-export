<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 05.07.2016
 * Time: 21:24
 */

namespace phpnt\exportFile;

use yii\base\Widget;
use yii\helpers\Json;

class ExportFile extends Widget
{
    public $model;
    public $queryParams     = [];
    public $getAll          = false;

    public $title           = false;

    public $csvCharset      = 'UTF-8';

    public $buttonClass     = 'btn btn-primary';
    public $blockClass      = 'pull-left';
    public $blockStyle      = 'padding: 5px;';

    public $xls             = true;
    public $xlsButtonName   = 'MS Excel';
    public $csv             = true;
    public $csvButtonName   = 'CSV';
    public $word            = true;
    public $wordButtonName  = 'MS Word';
    public $html            = true;
    public $htmlButtonName  = 'HTML';
    public $pdf             = true;
    public $pdfButtonName   = 'PDF';

    public function init()
    {
        $this->queryParams = Json::encode($this->queryParams);
        parent::init();
    }

    public function run()
    {
        return $this->render(
            'view',
            [
                'widget' => $this
            ]
        );
    }
}
