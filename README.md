phpNT - Export to file
================================
[![Latest Stable Version](https://poser.pugx.org/phpnt/yii2-export/v/stable)](https://packagist.org/packages/phpnt/yii2-export) [![Total Downloads](https://poser.pugx.org/phpnt/yii2-export/downloads)](https://packagist.org/packages/phpnt/yii2-export) [![Latest Unstable Version](https://poser.pugx.org/phpnt/yii2-export/v/unstable)](https://packagist.org/packages/phpnt/yii2-export) [![License](https://poser.pugx.org/phpnt/yii2-export/license)](https://packagist.org/packages/phpnt/yii2-export)
### Описание:
#### Сохраняет данные в xls, csv, word, html, pdf файлы. Если, в представлении, модель Search использовалась вместе с DataProvider для вывода GridView и применялся фильтр, то к сохраняемым данным будет также применен этот фильтр.
#### Для CSV файлов предусмотрен выбор кодировок 'UTF-8' (по умолчанию) и 'Windows-1251'.
#### Инструкция для русификации PDF файлов находится в файле README, в папке /dompdf_ru.
### [DEMO](http://phpnt.com/widget/export-file)

------------
[![Donate button](https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif)](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/yii2-export" "*"
```
или

```
composer require phpnt/yii2-export
```

или добавить в composer.json файл

```
"phpnt/yii2-export": "*"
```
## Использование:
### Подключение:
------------
```php
// в файле настройки приложения (main.php - Advanced или web.php - Basic) добавляется класс в controllerMap
...
'controllerMap' => [
    'export' => 'phpnt\exportFile\controllers\ExportController'
],
'components' => [
    ...
],
```
### В любой модели Search:
------------
```php
...
class GeoCitySearch extends GeoCity
{
...
    // указываются свойства, которые нужно выводить в файлы
    public function exportFields()
    {
        return [
            'id' => function ($model) {
                /* @var $model User */
                return $model->id;
            },
            'name_ru',
            'region_id' => function ($model) {
                /* @var $model GeoCity */
                if (isset($model->region->name_ru)) {
                    return $model->region->name_ru;
                }
                return false;
            },
            'lat',
            'lon'
        ];
    }
...
}
```
### Контроллер:
------------
```php
...
    // cоздается стандартное действие для вывода данных
    public function actionExportFile()
    {
        $searchModel = new GeoCitySearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);

        return $this->render('export-file', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
...
```

### Представление 1:
------------
```php
use phpnt\exportFile\ExportFile;
use yii\grid\GridView;
/* @var $searchModel \common\models\GeoCitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// минимальные настройки
echo ExportFile::widget([
        'model'             => 'common\models\GeoCitySearch',   // путь к модели
        'searchAttributes'  => $searchModel,                    // фильтр
]) ?>
<?= GridView::widget([
    'dataProvider'  => $dataProvider,
    'filterModel'   => $searchModel,
    'columns' => [
        ...
    ]
]);
?>
```
### Представление 2:
------------
```php
use phpnt\exportFile\ExportFile;
use yii\grid\GridView;
/* @var $searchModel \common\models\GeoCitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// максимальные настройки
echo ExportFile::widget([
    'model'             => 'common\models\search\UserSearch',   // путь к модели
    'title'             => 'Заголовок документа',
    'queryParams'       => Yii::$app->request->queryParams,

    'getAll'            => true,                               // все записи - true, учитывать пагинацию - false
    'csvCharset'        => 'Windows-1251',                      // кодировка csv файла: 'UTF-8' (по умолчанию) или 'Windows-1251'

    'buttonClass'       => 'btn btn-primary',                   // класс кнопки
    'blockClass'        => 'pull-left',                         // класс блока в котором кнопка
    'blockStyle'        => 'padding: 5px;',                     // стиль блока в котором кнопка

    // экспорт в следующие файлы (true - разрешить, false - запретить)
    'xls'               => true,
    'csv'               => true,
    'word'              => true,
    'html'              => true,
    'pdf'               => true,

    // шаблоны кнопок
    'xlsButtonName'     => Yii::t('app', 'MS Excel'),
    'csvButtonName'     => Yii::t('app', 'CSV'),
    'wordButtonName'    => Yii::t('app', 'MS Word'),
    'htmlButtonName'    => Yii::t('app', 'HTML'),
    'pdfButtonName'     => Yii::t('app', 'PDF')
]) ?>
<?= GridView::widget([
    'dataProvider'  => $dataProvider,
    'filterModel'   => $searchModel,
    'columns' => [
        ...
    ]
]);
?>
```
# Документация (примеры):
## [PHPExcel](https://phpexcel.codeplex.com/)
## [PHPWord](https://phpword.readthedocs.io/en/latest/)
## [dompdf](https://github.com/dompdf/dompdf)
------------
### Версия:
### 0.0.2
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
