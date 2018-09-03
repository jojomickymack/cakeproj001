<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="index large-12 medium-12 columns content">
    <h3>blog template</h3>
    <pre>
    <?=
	$myTitle = $this->request->params['title'];
	$postBody = array('title' => $myTitle);
	$postBody['title'];


	$req = curl_init();

	curl_setopt($req, CURLOPT_URL,'http://localhost:9292/contents');
	curl_setopt($req, CURLOPT_POST, 1);
	curl_setopt($req, CURLOPT_POSTFIELDS, $postBody);

	curl_setopt($req, CURLOPT_RETURNTRANSFER, true);

	$resp = curl_exec($req);

	curl_close($req);

	$json = json_decode($resp);
	// print_r($json);
    ?>
    </pre>

    <?=	$this->Html->image($json->title_img_path, ['alt' => 'image']); ?>
    <?=	$this->Markdown->toHtml(file_get_contents(substr($json->markdown_path, 1))); ?>
</div>
