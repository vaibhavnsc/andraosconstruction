<?php
require 'vendor/autoload.php';

use Illuminate\Support\Facades\Mail;

$config = [
    'driver' => 'smtp',
    'host' => '67-205-132-70.cprapid.com',
    'port' => 465,
    'encryption' => 'ssl',
    'username' => 'andraosconstruction@andraosconstruction.myconcept.website',
    'password' => 's98S6H~JGxKMI.',
    'from' => [
        'address' => 'andraosconstruction@andraosconstruction.myconcept.website',
        'name' => 'Andraos Construction',
    ],
];

config(['mail.default' => 'smtp']);
config(['mail.mailers.smtp' => [
    'transport' => 'smtp',
    'host' => $config['host'],
    'port' => $config['port'],
    'encryption' => $config['encryption'],
    'username' => $config['username'],
    'password' => $config['password'],
    'timeout' => null,
    'scheme' => 'ssl',
]]);
config(['mail.from' => $config['from']]);

try {
    Mail::raw('SMTP probe from Laravel', function ($message) {
        $message->to('andraosconstruction@andraosconstruction.myconcept.website')
            ->subject('SMTP probe');
    });
    echo "MAIL_OK\n";
} catch (Throwable $e) {
    echo get_class($e) . ": " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}
