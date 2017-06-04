<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

NavBar::begin([
  'brandLabel' => Yii::t('adurls', 'NAVBAR_HOME'),
  'brandUrl' => Yii::$app->homeUrl,
  'options' => [
    'class' => 'navbar-inverse navbar-fixed-top',
  ],
]);
echo Nav::widget([
  'options' => ['class' => 'navbar-nav navbar-right'],
  'items' => [
    [
      'label' => Yii::t('adurls', 'NAVBAR_LOGIN'),
      'url' => ['/login'],
      'visible' => Yii::$app->user->isGuest
    ],
    [
      'label' => Yii::t('adurls', 'NAVBAR_SIGNUP'),
      'url' => ['/signup'],
      'visible' => Yii::$app->user->isGuest
    ],
    [
      'label' => Yii::t('adurls', 'NAVBAR_PROFILE'),
      'url' => '/profile',
      'visible' => !Yii::$app->user->isGuest
    ],
    [
      'label' => Yii::t('adurls', 'NAVBAR_USERS'),
      'url' => ['/user/admin'],
      'visible' => Yii::$app->user->can('userManage')
    ],
    [
      'label' => Yii::t('adurls', 'ALL_URLS'),
      'url' => ['/url/index'],
      'visible' => Yii::$app->user->can('urlManage')
    ],
    [
      'label' => Yii::t('adurls', 'NAVBAR_RBAC'),
      'url' => ['/user/rbac'],
      'visible' => Yii::$app->user->can('rbacManage')
    ],
    [
      'label' => Yii::t('adurls', 'NAVBAR_LOGOUT'),
      'url' => '/logout',
      'visible' => !Yii::$app->user->isGuest
    ],
  ],
]);
NavBar::end();
