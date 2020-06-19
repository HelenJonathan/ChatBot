<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    "What is your name" => "My name is" . $bot->getName(),
    "What is your gender" => "I am a" . $bot->getGender(),
    "How old are you" => "I am 23 years old",
    "Where are you from" => "I am from Delta state",
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty)) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hello there');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Can't respond to that");
        } else {
            $botty->reply($botty->ask($msg, $questions))
        }
    });
}