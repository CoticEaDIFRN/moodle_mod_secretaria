<?php
require_once('../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/calendar/lib.php');

$PAGE->set_pagelayout('mydashboard');
$PAGE->set_pagetype('my-index');
$PAGE->blocks->add_region('content');
$PAGE->set_subpage($currentpage->id);
$PAGE->set_title("Secretaria");
$PAGE->set_heading("Secretaria");


echo $OUTPUT->header();
echo "Aguarde!";

//$data = [];
//echo $OUTPUT->render_from_template('secretaria/aviso', $data);
echo $OUTPUT->footer();
