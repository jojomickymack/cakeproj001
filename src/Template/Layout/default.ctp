<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'coolstuff';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style>
    @media all and (max-width: 640px) {
        #actions-sidebar {
            display: none;
        }
    }
    </style>    
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <h1 class="title-area large-3 medium-4 columns">reverie.fun</h1>
    </nav>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        feeling groovy? <?= $this->Html->link('go to the old site', '/groovy'); ?>
        <ul class="side-nav">
            <?php
            $json = json_decode(file_get_contents('http://localhost:9292/contents'));
            //print_r($json);
            foreach ($json as $obj) { ?> <li> <?= $this->Html->link($obj->title, $obj->url); ?> </li> 
            <?php } ?>
        </ul>
    </nav>    
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
