<?php
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use App\Http\Controllers\BotManController;
use BotMan\Drivers\Facebook\FacebookDriver;

$config = [
    'facebook' => [
        'token' => 'EAAW2ZByvfRBsBANnfr63dBsmFMpNk1tBMhI3S3BrPRh1wUvkk4M8GiqFZCNl28UWBs7hbbk2OvpEUbLTZBm5glaYS3vmmNaGcmgeqvdVkJvzCskm30zelwCxin2F9N2X5QNtoCoZCTxRaZArkev2ZCsmBXP11T7wMrkSapHhbozngrdhOvbztnQjnM3LqvN1gZD',
      'app_secret' => '98196f7535e14eedec6689df3cbd06b9',
      'verification'=>'ask_123',
  ]
];

// Load the driver(s) you want to use
DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);

// Create an instance
$botman = BotManFactory::create($config);

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
