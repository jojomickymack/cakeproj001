<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="index large-9 medium-8 columns content">
    <h3>home template</h3>
    <pre>
    <?php
    $json = json_decode(file_get_contents('http://localhost:9292/contents'));
    print_r($json);
    ?>
    </pre>
</div>
