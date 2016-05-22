<?php

require 'setup.php';

// Создаем нового клиента Google API
$client = new apiClient();
//$client->setApplicationName("Ruseller");

// Конфигурируем его
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setDeveloperKey($api_key);
$client->setRedirectUri($redirect_url);
$client->setApprovalPrompt(false);
$oauth2 = new apiOauth2Service($client);


// Параметр code означает перенаправление с google
if (isset($_GET['code'])) {
	
	// Данный метод получает актуальный маркер доступа от Google,
	// поэтому мы сможем запрашивать информацию о пользователе
	$client->authenticate();
	
	// Получаем данные о пользователе
	$info = $oauth2->userinfo->get();
	
	// Ищем пользователя в базе данных
	$person = ORM::for_table('glogin_users')->where('email', $info['email'])->find_one();
	
	if(!$person){
		// Нет таких. Регистрируем!
		
		$person = ORM::for_table('glogin_users')->create();
		
		// Устнавливаем свойства, которые вставляются в базу данных
		$person->email = $info['email'];
		$person->name = $info['name'];
		
		if(isset($info['picture'])){
			// Если пользователь использует публичную фотографию для аккаунта
			$person->photo = $info['picture'];
		}
		else{
			// Иначе используем изображение по умолчанию
			$person->photo = 'assets/img/default_avatar.jpg';
		}
		
		// Вставляем запись в базу данных
		$person->save();
	}
	
	// Сохраняем id пользователя для сессии
	$_SESSION['user_id'] = $person->id();
	
	// Rперенаправляем на демонстрацию 
	header("Location: $redirect_url");
	exit;
}

// Обработка выхода
if (isset($_GET['logout'])) {
	unset($_SESSION['user_id']);
}

$person = null;
if(isset($_SESSION['user_id'])){
	// Получаем данные из базы
	$person = ORM::for_table('glogin_users')->find_one($_SESSION['user_id']);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Форма регистрации с помощью сервиса Google | Материалы сайта RUSELLER.COM</title>
        
        <!-- Стили -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

		<h1>Форма регистрации</h1>
        <div id="main">
			
			<?php if($person):?>
				<div id="avatar" style="background-image:url(<?php echo $person->photo?>?sz=58)"></div>
				<p class="greeting">Добро пожаловать, <b><?php echo htmlspecialchars($person->name)?></b></p>
            	<p class="register_info">Вы зарегистриованы: <b><?php echo new RelativeTime($person->registered)?></b></p>
            	<a href="?logout" class="logoutButton">Выход</a>
			<?php else:?>
            	<a href="<?php echo $client->createAuthUrl()?>" class="googleLoginButton">Войти с помощью Google</a>
            <?php endif;?>

        </div>

        <footer>
	        <h2><i>Урок:</i> Форма регистрации с использованием сервиса Google</h2>
            <a class="ruseller" href="http://www.ruseller.com" target="_blank">Материалы сайта <i><b>RUSELLER.COM</b></i></a>
        </footer>
        
    </body>
</html>