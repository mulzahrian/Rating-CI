<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin
// Using email puskom@pcr.ac.id for API
$config['recaptcha_site_key'] = '6LfB-WoUAAAAACtOh3fyyG2_KmEeQn5J5S8GDU8E';
$config['recaptcha_secret_key'] = '6LfB-WoUAAAAAMJut3SA1c3ZG6Ti1plgswI1T7UM';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
