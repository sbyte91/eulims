<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Menu */

$this->title = Yii::t('rbac-admin', 'Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">
    <?= $this->renderFile(__DIR__ . '/../menu.php', ['button' => 'menu']); ?>
    <div class="panel panel-default col-xs-12">
        <div class="panel-heading"><i class="fa fa-user-circle fa-adn"></i> List of Menus</div>
        <div class="panel-body">
            <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>
            <p>
                <?= Html::a(Yii::t('rbac-admin', 'Create Menu'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?php Pjax::begin(); ?>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'name',
                    [
                        'attribute' => 'menuParent.name',
                        'filter' => Html::activeTextInput($searchModel, 'parent_name', [
                            'class' => 'form-control', 'id' => null
                        ]),
                        'label' => Yii::t('rbac-admin', 'Parent'),
                    ],
                    'route',
                    'order',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
            <?php Pjax::end(); ?>
        </div>
        <p>
                <?= Html::a(Yii::t('rbac-admin', 'Back to Dashboard'), ['../site/login'], ['class' => 'btn btn-success',]) ?>
            </p>
    </div>
    
</div>
