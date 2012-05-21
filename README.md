Context.IO FuelPHP Package
==================

Quick implementation of the Context.IO 2.0 PHP SDK to suit the FuelPHP package structure.

SDK Instructions
==================

You should consult the documentation of the Context.IO PHP SDK, as the changes made here were purely to support the structure of a FuelPHP package, the documentation can be found here:

https://github.com/contextio/PHP-ContextIO/tree/dev_2.0

Installation Instructions
==================

Place the folder gocardless in your fuel/packages folder.

Usage
==================

```php
// Load the GoCardless package
Package::load('contextio');

$contextIO = new ContextIO('consumer_key','consumer_secret');
$accountId = null;

$r = $contextIO->listAccounts();
foreach ($r->getData() as $account) {
	echo $account['id'] . "\t" . join(", ", $account['email_addresses']) . "\n";
	if (is_null($accountId)) {
		$accountId = $account['id'];
	}
}

if (is_null($accountId)) {
	die;
}

$args = array('to'=>'email@email.com', 'limit'=>20);
echo "\nGetting last 20 messages exchanged with {$args['to']}\n";
$r = $contextIO->listMessages($accountId, $args);
foreach ($r->getData() as $message) {
	echo "Subject: ".$message['subject']."\n";
}
```