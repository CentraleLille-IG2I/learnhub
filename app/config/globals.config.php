<?

// Following GLOBALS configuration is inspired by phpSteroid (https://github.com/DarKnight1346/phpSteroid/blob/master/index.php)
$GLOBALS['config'] = array(
	"appName" => "ICS",
	"version" => "beta 0.1",
	"domain" => "localhost",
	"authenticator" => array(
		"sessionCookieLength" => 40, //length of the connexion cookie
		"connexionTimeout" => 3600, //if time-lastPingTime > this, ask for a reconnexion
		"onlineTimeout"=>600 // 10 minutes
		),
	"database" => array(
		"host"=>"localhost",
		"username"=>"root",
		"password"=>"root",
		"name"=>"ics",
		"type_ref" => array("comment"=>"0")
		),
	"paths" => array(
		"views" => "../views/",
		"actions" => "../actions/",
		"libs" => "../lib/",
		"ajax" => "../lib/ajax/",
		"js" => "../ressources/js/"
		),
	"views" => array(
		"accueil" => "accueil.php",
		"calendar" => "calendar.php",
		"signup" => "signup.php",
		"login" => "login.php",
		"addCourse" => "addCourse.php",
		"explore" => "explore.php",
		"profile" => "profile.php",
		"view" => "documentView.php"
		),
	"ajax" => array(
		"getchap" => "chapitres.get.php",
		"getmat" => "matieres.get.php",
		"comments" => "comment_view.get.php",
		"postCom" => "comment.post.php",
		"search" => "search.get.php",
		"like" => "like.post.php",
		"online_users" => "online_users.get.php"
		),
	"actions" => array(
		"signup" => "proceedSignUp.php",
		"login" => "proceedLogin.php",
		"addDoc" => "proceedAddDoc.php"
		),
	"upload" => array(
		'valid_extensions' => array(
			'jpg',
			'jpeg',
			'gif',
			'png',
			'pdf')
		),
	"default" => array(
		"view" => "accueil"
		)
	);

?>