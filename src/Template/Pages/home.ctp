<?php
/**
 * @var \App\View\AppView $this
 */
?>

<link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet"> 

<div class="index large-12 medium-12 columns content">
    <h3 class='logo' style="font-family: 'Rouge Script', cursive;">Welcome To The Fun!</h3>
    <ul>
        <?php
        $json = json_decode(file_get_contents('http://localhost:9292/contents'));
        //print_r($json);
        foreach ($json as $obj) {
            ?> <li> <?=
            $this->Html->link($obj->title, $obj->url);
            ?> </li> <?php
        }
        ?>
    </ul>
</div>
