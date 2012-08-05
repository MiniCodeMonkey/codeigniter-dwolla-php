<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| App credentials
| -------------------------------------------------------------------------
| You must first register an application with Dwolla
| Register an app on https://www.dwolla.com/applications
*/

$config['dwolla_api_key'] = '';
$config['dwolla_api_secret'] = '';

/*
| -------------------------------------------------------------------------
| Redirect URL
| -------------------------------------------------------------------------
| URL that Dwolla redirects back to after a successfull OAuth authentication.
| Must be the same as the one set in the application settings on dwolla.com
*/

$config['dwolla_redirect_uri'] = site_url('auth');

/*
| -------------------------------------------------------------------------
| Permissions
| -------------------------------------------------------------------------
| These permissions are requested when authentication.
| Valid permission are: send, transactions, balance, request, contacts,
| accountinfofull
|
| Permissions must match the permission set set in the application settings
| on dwolla.com
*/
$config['dwolla_permissions'] = array("send", "transactions", "balance", "request", "contacts", "accountinfofull");