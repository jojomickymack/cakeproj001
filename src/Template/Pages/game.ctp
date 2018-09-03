<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="index large-12 medium-12 columns content">
    <h3>games template</h3>
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
	<iframe id='jsgame' src='<?= $json->iframe_path ?>' width=480 height=360 msallowfullscreen='true' allowfullscreen='true' frameborder='0' scrolling='no' allowtransparency='true' webkitallowfullscreen='true' mozallowfullscreen='true'>
	</iframe>
	<br>
	<input id='myButton' class='button' type='button' onclick="target='jsgame'; launchGame('<?= $json->iframe_path ?>');" value='Launch Fullscreen'>

	<script type='text/javascript' src='/scripts/buttonScript.js'></script>
</div>
