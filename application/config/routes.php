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

$route['compiler/user_type']         = 'Compiler/Users_Type/Index';
$route['compiler/user_type/drop']    = 'Compiler/Users_Type/Drop';
$route['compiler/user_type/insert']  = 'Compiler/Users_Type/Insert';

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

$route['compiler/rumah_sakit']         = 'Compiler/Rumah_Sakit/Index';
$route['compiler/rumah_sakit/drop']    = 'Compiler/Rumah_Sakit/Drop';
$route['compiler/rumah_sakit/insert']  = 'Compiler/Rumah_Sakit/Insert';

$route['compiler/usulan']         = 'Compiler/Usulan/Index';
$route['compiler/usulan/drop']    = 'Compiler/Usulan/Drop';
$route['compiler/usulan/insert']  = 'Compiler/Usulan/Insert';

$route['compiler/detail_usulan']         = 'Compiler/Detail_Usulan/Index';
$route['compiler/detail_usulan/drop']    = 'Compiler/Detail_Usulan/Drop';
$route['compiler/detail_usulan/insert']  = 'Compiler/Detail_Usulan/Insert';

$route['compiler/provinsi']         = 'Compiler/Provinsi/Index';
$route['compiler/provinsi/drop']    = 'Compiler/Provinsi/Drop';
$route['compiler/provinsi/insert']  = 'Compiler/Provinsi/Insert';

$route['compiler/kabkota']         = 'Compiler/Kabkota/Index';
$route['compiler/kabkota/drop']    = 'Compiler/Kabkota/Drop';
$route['compiler/kabkota/insert']  = 'Compiler/Kabkota/Insert';

$route['compiler/kabkota']         = 'Compiler/Kabkota/Index';
$route['compiler/kabkota/drop']    = 'Compiler/Kabkota/Drop';
$route['compiler/kabkota/insert']  = 'Compiler/Kabkota/Insert';

$route['compiler/sub_kelas_terapi']         = 'Compiler/Sub_Kelas_Terapi/Index';
$route['compiler/sub_kelas_terapi/drop']    = 'Compiler/Sub_Kelas_Terapi/Drop';
$route['compiler/sub_kelas_terapi/insert']  = 'Compiler/Sub_Kelas_Terapi/Insert';
//URI DASHES AND OVERRIDE
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
