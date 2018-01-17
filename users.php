<?php
	/*https://api.telegram.org/bot344339106:AAE2wmlY5lm8TljzncBHWHVoExXY6ZLvudY/setwebhook?url=https://bot.aac.uz/token=AAE2wmlY5lm8TljzncBHWHVoExXY6ZLvudY*/
	require __DIR__ . '/vendor/autoload.php';

	
	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	use Medoo\Medoo;
	$database = new Medoo([
		'database_type' => 'mysql',
	    'database_name' => 'fmedical',
	    'server' => 'localhost',
	    'username' => 'root',
	    'password' => '',
	    'charset' => 'utf8'
	]);
	/*$database->insert("telegram_chat_request", [
				"chat_id" => $chatId,
				"message" => $text,
				"request" => $update,
			]);*/
	/*$profile = $database->get("telegram_chat", '*', [
				"chat_id" => $chatId
			]);*/
	/*$database->update("telegram_chat", [
							"updated" => date("Y-m-d H:i:s"),
							"counter[+]" => 1
						],[
							"chat_id[=]" =>$profile['chat_id']
						]);*/
	
?>
