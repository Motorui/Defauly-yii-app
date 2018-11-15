<?php

/* @var $this yii\web\View */

$this->title = 'MyWay LIS 3.0';

Yii::$app->user->identity->isAdmin ?
$test = 'É admin' : $test = 'Não é admin';

$userRole[] = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());

Yii::$app->user->can('Administrador') ?
    $s = 'pode inserir' : $s = 'NÂO PODE';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>MyWay 3 Tools</h1>

        <p class="lead"><?= $s ?>.</p>
    </div>
    <div class="body-content">
        <div class="row">
            <?= 
                "<pre>";
                    print_r($userRole);
                "</pre>";
            ?>
        </div>
    </div>
</div>
