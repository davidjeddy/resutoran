
<hr>
<?php echo Html::label('Menu Pricing'); ?><br />

<?php
// pricing options
echo \yii\bootstrap\BaseHtml::checkboxList(
    'resu_location_menu',
    null,
    ArrayHelper::map(
        \resutoran\common\models\ResuMenuOption::find()->all(),
        'id',
        'value'
    ),
    [
        'inline' => false,
        'item'   => function($index, $label, $name, $checked, $value) use ($form, $model) {

            $return = '<div class="form-group field-resulocation-resu_location_menu required">
                    <label for="ResuLocation[resu_location_menu]['.$value.'][high_price]">'.$label.'</label>
                    <input type="text" class="form-control" name="ResuLocation[resu_location_menu]['.$value.'][low_price]" maxlength="6" placeholder="Low Price (XXX.YY)">
                    <input type="text" class="form-control" name="ResuLocation[resu_location_menu]['.$value.'][high_price]" maxlength="6" placeholder="High Price  (XXX.YY)">
                    <p class="help-block help-block-error"></p>
                </div>';

            return $return;
        }
    ]
); ?>
