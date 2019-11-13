<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MitarbeiterEmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mitarbeiter Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="openLinks hidden">
    <?= Html::a('Go to Fahrzeug(Vechicle)', 'http://yii2/web/fahrzeug-vehicle/index', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Einkauf(Purchase)', 'http://yii2/web/einkauf-purchase', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to FzgBestand', 'http://yii2/web/fzg-bestand/', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Kaeufer(Customer)', 'http://yii2/web/kaeufer-customer/', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Kaution', 'http://yii2/web/kaution', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Mitarbeiter(Employee)', 'http://yii2/web/mitarbeiter-employee', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Reparatur(Repair)', 'http://yii2/web/reparatur-repair', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Verkaeufer(Vendor)', 'http://yii2/web/verkaeufer-vendor', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Verkauf(Sale)', 'http://yii2/web/verkauf-sale', ['class' => 'linkToAnotherTable']) ?>

</div>
<div class="mitarbeiter-employee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Open Filter', null, ['class' => 'btn btn-success', 'onclick'=>'openFilter()']) ?>
        <?= Html::a('Create Mitarbeiter Employee', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Open Go to ', null, ['class' => 'btn btn-success', 'onclick'=>'openLinks()']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nr_inside_id',
            'initialen_initials',
            'vorname_firstname',
            'nachname_surname',
            'geburtsdatum_birthdate',
            'anstellungsdatum_employmentdate',
            'kündigungsdatum_terminationdate',
            'gehalt_salary',
            'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <style>
        .grid-view th {
            white-space: pre-wrap;
        }
    </style>
</div>
