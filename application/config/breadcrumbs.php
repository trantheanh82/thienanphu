<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| BREADCRUMB CONFIG
| -------------------------------------------------------------------
| This file will contain some breadcrumbs' settings.
|
| $config['crumb_divider']		The string used to divide the crumbs
| $config['tag_open'] 			The opening tag for breadcrumb's holder.
| $config['tag_close'] 			The closing tag for breadcrumb's holder.
| $config['crumb_open'] 		The opening tag for breadcrumb's holder.
| $config['crumb_close'] 		The closing tag for breadcrumb's holder.
|
| Defaults provided for twitter bootstrap 2.0
*/

/*$config['crumb_divider'] = '<span class="divider">/</span>';
$config['tag_open'] = '<ul class="breadcrumb">';
$config['tag_close'] = '</ul>';
$config['crumb_open'] = '<li>';
$config['crumb_last_open'] = '<li class="active">';
$config['crumb_close'] = '</li>';*/

$config['crumb_divider'] = '<i class="fa fa-angle-double-right"></i>';
$config['tag_open'] = '<div class="page_nav">';
$config['tag_close'] = '</div>';
$config['crumb_open'] = '<span>';
$config['crumb_last_open'] = '<span class="active">';
$config['crumb_close'] = '</span>';


/* End of file breadcrumbs.php */
/* Location: ./application/config/breadcrumbs.php */
