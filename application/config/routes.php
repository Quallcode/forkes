<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
//USERS MANAGEMENT
$route['login/verify'] = 'Login/Verify';
$route['logout']       = 'Logout/Index';
//DATABASE MANAGEMENT
$route['compiler/createdb']     = 'Compiler/Create/Index';
$route['compiler/dropdb']       = 'Compiler/Create/Dropdb';

$route['compiler/users']        = 'Compiler/Users/Index';
$route['compiler/users/drop']   = 'Compiler/Users/Drop';
$route['compiler/users/insert'] = 'Compiler/Users/Insert';

$route['compiler/atc_obat']         = 'Compiler/Atc_Obat/Index';
$route['compiler/atc_obat/drop']    = 'Compiler/Atc_Obat/Drop';
$route['compiler/atc_obat/insert']  = 'Compiler/Atc_Obat/Insert';

$route['compiler/keterangan_atc_obat']         = 'Compiler/Keterangan_Atc_Obat/Index';
$route['compiler/keterangan_atc_obat/drop']    = 'Compiler/Keterangan_Atc_Obat/Drop';
$route['compiler/keterangan_atc_obat/insert']  = 'Compiler/Keterangan_Atc_Obat/Insert';

$route['compiler/kekuatan']         = 'Compiler/Kekuatan/Index';
$route['compiler/kekuatan/drop']    = 'Compiler/Kekuatan/Drop';
$route['compiler/kekuatan/insert']  = 'Compiler/Kekuatan/Insert';

$route['compiler/satuan']         = 'Compiler/Satuan/Index';
$route['compiler/satuan/drop']    = 'Compiler/Satuan/Drop';
$route['compiler/satuan/insert']  = 'Compiler/Satuan/Insert';

$route['compiler/sediaan']         = 'Compiler/Sediaan/Index';
$route['compiler/sediaan/drop']    = 'Compiler/Sediaan/Drop';
$route['compiler/sediaan/insert']  = 'Compiler/Sediaan/Insert';

$route['compiler/kelas_terapi']         = 'Compiler/Kelas_Terapi/Index';
$route['compiler/kelas_terapi/drop']    = 'Compiler/Kelas_Terapi/Drop';
$route['compiler/kelas_terapi/insert']  = 'Compiler/Kelas_Terapi/Insert';

$route['compiler/sub_kelas_terapi']         = 'Compiler/Sub_Kelas_Terapi/Index';
$route['compiler/sub_kelas_terapi/drop']    = 'Compiler/Sub_Kelas_Terapi/Drop';
$route['compiler/sub_kelas_terapi/insert']  = 'Compiler/Sub_Kelas_Terapi/Insert';
//URI DASHES AND OVERRIDE
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
