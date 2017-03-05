
<hr />
<?php echo Html::label('Options'); ?><br />

<?php
echo Html::label('Dress Option');
echo Select2::widget([
    'name'          => 'ResuLocation[location_options][resu_location_dress_code][]',
    'value'         => ArrayHelper::map($model->getResuLocationDressCodes()->asArray()->all(), 'id', 'id'),
    'maintainOrder' => true,
    'data'          => ArrayHelper::map(\resutoran\common\models\ResuDressCodeOption::find()->all(), 'id', 'value'),
    'options'       => [
        'multiple'      => true,
        'placeholder'   => 'Select Dress Code Options ...'
    ]
]) ?>

<?php
echo Html::label('Seating Option');
echo Select2::widget([
    'name'      => 'ResuLocation[location_options][resu_location_seating][]',
    'value'     => null,
    'data'      => ArrayHelper::map(\resutoran\common\models\ResuSeatingOption::find()->all(), 'id', 'value'),
    'options'   => [
        'multiple'      => true,
        'placeholder'   => 'Select Seating Options ...'
    ]
]) ?>

<?php
echo Html::label('Cuisine Option');
echo Select2::widget([
    'name'      => 'ResuLocation[location_options][resu_location_cuisine][]',
    'value'     => null,
    'data'      => ArrayHelper::map(\resutoran\common\models\ResuCuisineOption::find()->all(), 'id', 'value'),
    'options'   => [
        'multiple'      => true,
        'placeholder'   => 'Select Cuisine Options ...'
    ]
]) ?>

<?php
echo Html::label('Media Option');
echo Select2::widget([
    'name'      => 'ResuLocation[location_options][resu_location_media][]',
    'value'     => null,
    'data'      => ArrayHelper::map(\resutoran\common\models\ResuMediaOption::find()->all(), 'id', 'value'),
    'options'   => [
        'multiple'      => true,
        'placeholder'   => 'Select Media Options ...'
    ]
]) ?>

<?php
echo Html::label('Payment Option');
echo Select2::widget([
    'name'      => 'ResuLocation[location_options][resu_location_payment][]',
    'value'     => null,
    'data'      => ArrayHelper::map(\resutoran\common\models\ResuPaymentOption::find()->all(), 'id', 'value'),
    'options'   => [
        'multiple'      => true,
        'placeholder'   => 'Select Payment Options ...'
    ]
]) ?>

<hr />

<?php echo Html::label('Features'); ?><br />

<?php
echo \yii\bootstrap\BaseHtml::checkboxList(
    'resu_location_boolean',
    null,
    ArrayHelper::map(
        \resutoran\common\models\ResuBooleanOption::find()->all(),
        'id',
        'value'
    ),
    [
        'inline' => false,
        'item'   => function($index, $label, $name, $checked, $value) {

            $name = 'ResuLocation[resu_location_boolean]['.$index.']';

            echo '<label class="cbx-label" for="'.$name.'">'.$label.'</label>';
            echo CheckboxX::widget([
                'name'          => $name,
                'value'         => $label,
                'pluginOptions' => [
                    'threeState' => false
                ]
            ]);
        }
    ]
); ?>
