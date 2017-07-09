<?php

use \yii\helpers\Html;
use \yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
use \yii\bootstrap\Collapse;

use \resutoran\frontend\assets\AppAsset;

$assets = AppAsset::register($this);

/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>

<div class="site-result-details">

    <?php echo Html::img($assets->baseUrl . '/images/header-1.jpg', ['id' => 'bg']); ?>

    <div style="zfg-body-copy">
        <div class="col-md-4"></div>
        <div class="text-center col-md-4">
            <h1 class="zfg-body-copy">Zero Forks Given</h1>
            <h4 class="zfg-body-copy"><?php echo Yii::t('zfg', 'If you want our forks, you have to earn them.'); ?></h4>

            <h2 class="zfg-body-copy"><?php echo Yii::t('zfg', 'Find a review:'); ?></h2>

            <div class="well">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        image
                    </div>
                    <div class="col-sm-8">
                        <div class="col-sm-12 text-left">
                            <strong>asdf</strong>
                        </div>

                        <div class="col-sm-12 text-left">
                            <?php
                                echo $model->address_1  . "<br />"
                                    . ($model->address_2 ? $model->address_2 . "<br />" : null )
                                    . $model->city      . "<br />"
                                    . \resutoran\common\models\ResuState::findOne($model->resu_state_id)->abbr . "<br />"
                                    . $model->zip_code  . "<br />"
                            ?>
                        </div>

                        <div class="col-sm-12 text-left">
                            <?php
                            echo \resutoran\common\models\ResuLocationContact::find()
                                ->select(['phone as value'])
                                ->andWhere(['resu_location_id' => $model['id']])
                                ->asArray()
                                ->orderBy('id DESC')
                                ->one()['phone'];
                            ?>
                        </div>

                        <div class="col-sm-12 text-left">Cuinine(s):
                            <?php
                            $cuisineMDLs = \resutoran\common\models\ResuLocationCuisine::find()
                                ->andWhere(['resu_location_id' => $model->id])
                                ->all();

                            foreach ($cuisineMDLs as $option) {
                                print_r( $option->getResuCuisineOption()->one()->value );
                            }
                            ?>
                        </div>
                        <div class="col-sm-12 text-left">Cost Range:
                            <?php
                            $cost = \resutoran\common\models\ResuLocationPrice::find()
                                ->select(['low', 'high'])
                                ->andWhere(['resu_location_id' => $model['id']])
                                ->asArray()
                                ->orderBy('id DESC')
                                ->one();

                            echo $cost['low'] . ' - ' . $cost['high'];
                            ?>

                        </div>

                        <div class="col-sm-6 text-left">User Reviews</div>
                        <div class="col-sm-6 text-left">ZFG Reviews</div>

                        <div class="col-sm-12 text-left">Full hours</div>

                        <div class="col-sm-12 text-left">Other Options:
                            <?php
                                $booleanOptions = \resutoran\common\models\ResuLocationBoolean::findAll(['resu_location_id' => $model->id]);

                                foreach ($booleanOptions as $option) {
                                    echo $option->getResuBooleanOption()->one()->value . ',<br />';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                .
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>

</div>
