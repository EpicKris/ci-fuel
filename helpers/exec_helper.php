<?php
/**
 * Copyright © 2015 - 2016 Kristian Matthews. All rights reserved.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('exec_bg'))
{
	function exec_bg($command)
	{
		exec($command . ' >/dev/null 2>&1');
	}
}