<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="index large-12 medium-12 columns content">
    <h3>home template</h3>
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
