<?php
/**
 * @var \App\View\AppView $this
 */
?>

<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day" rel="stylesheet">
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

<style>
    .quote {
        background-image:-webkit-linear-gradient(top, #e6e6e6 0%, #ffffff 50%);
    }

    .quote > p {
        font-family: 'Dawning of a New Day', cursive;
        font-size: 4em;
        text-align: center;
    }

    .delay {
        -webkit-animation-delay: 1s;
        -webkit-animation-duration: 4s;        
    }
</style>
<div class="index large-12 medium-12 columns content">
    <div class="quote">
        <p class="logo animated delay fadeIn">"Reverie is when ideas float in our mind without reflection or regard of the understanding."</p>
        <h3 class="animated delay fadeInUp" style="text-align: right">- John Locke</h3>
    </div>
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
