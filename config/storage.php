<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['cdn_url'] = '';
$config['cdn_path'] = '';

$active_group = 'default';

$storage['default'] = array(
	'base_url' => '',
	'path'     => FCPATH . 'content',
	'driver'   => 'file',
	'key'      => '',
	'secret'   => '',
	'region'   => ''
);