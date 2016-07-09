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
    public $searchAttributes;
    public $sort;
    public $page;
    public $getAll          = false;

    public $title           = false;

    public $csvCharset      = 'UTF-8';

    public $buttonClass     = 'btn btn-primary';
    public $blockClass      = 'pull-left';
    public $blockStyle      = 'padding: 5px;';

    public $xls             = true;
    public $xlsButtonName   = false;
    public $csv             = true;
    public $csvButtonName   = false;
    public $word            = true;
    public $wordButtonName  = false;
    public $html            = true;
    public $htmlButtonName  = false;
    public $pdf             = true;
    public $pdfButtonName   = false;

    public function init()
    {
        $this->searchAttributes = Json::encode($this->searchAttributes);
        $this->sort             = \Yii::$app->request->get('sort');
        $this->page             = \Yii::$app->request->get('page');
        $this->xlsButtonName    = $this->xlsButtonName ? $this->xlsButtonName : \Yii::t('app', 'MS Excel');
        $this->csvButtonName    = $this->csvButtonName ? $this->csvButtonName : \Yii::t('app', 'CSV');
        $this->wordButtonName   = $this->wordButtonName ? $this->wordButtonName : \Yii::t('app', 'MS Word');
        $this->htmlButtonName   = $this->htmlButtonName ? $this->htmlButtonName : \Yii::t('app', 'HTML');
        $this->pdfButtonName    = $this->pdfButtonName ? $this->pdfButtonName : \Yii::t('app', 'PDF');
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