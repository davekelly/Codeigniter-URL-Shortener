<?php $this->load->view('header'); ?>

<h3>Enter a long URL in the box and press 'Shorten'</h3>

<form name="ajax_form" id ="ajax_form" method="post">
    <?php
    $data = array(
	'name' => 'url',
	'id' => 'url',
	'value' => '',
	'size' => '50',
	'style' => '',
    );

    echo form_input($data);

    $data = array(
	'name' => 'shorten_url',
	'id' => 'shorten_url',
	'value' => 'Shorten'
    );

    echo form_submit($data);

    echo form_close();
    ?>

    <div id="alias"></div>

    <?php $this->load->view('footer'); ?>