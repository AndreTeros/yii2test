<?php

use yii\helpers\Html;

?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>1. Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>2. Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
<?php d($model); ?>