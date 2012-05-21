<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */


Autoloader::add_core_namespace('ContextIO');

Autoloader::add_classes(array(
	'ContextIO\\ContextIO'         => __DIR__.'/classes/contextio.php',
	'ContextIO\\ContextIOResponse' => __DIR__.'/classes/response.php',
	/**
	 * @todo Move this to a seperate package
	 */
	'ContextIO\\OAuthException'       => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthConsumer'        => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthToken'           => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthSignatureMethod' => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthRequest'         => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthServer'          => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthDataStore'       => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthUtil'            => __DIR__.'/classes/oauth.php',

	'ContextIO\\OAuthSignatureMethod_HMAC_SHA1' => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthSignatureMethod_PLAINTEXT' => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthSignatureMethod_RSA_SHA1'  => __DIR__.'/classes/oauth.php',
	'ContextIO\\OAuthSignatureMethod_HMAC_SHA1' => __DIR__.'/classes/oauth.php',
));


/* End of file bootstrap.php */