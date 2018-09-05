<?php

require_once __DIR__. "/../vendor/autoload.php";

use twitterclone\Application;
use twitterclone\database;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\RedirectResponse;
use Silex\Provider\SecurityServiceProvider,
    Silex\Provider\SessionServiceProvider,
    Silex\Provider\TwigServiceProvider,
    Silex\Provider\UrlGeneratorServiceProvider;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

// starting it up

$app = new Application();
$app1 = new database();
$database = $app1->data();

$app["pdo"] = new \PDO("mysql:host=localhost;dbname=silex_twitter_clone", "root", "");

// service setup
$app->register(new SecurityServiceProvider())
    ->register(new SessionServiceProvider())
    ->register(new TwigServiceProvider(), ["twig.path" => "../templates", "twig.options" => ["cache" => "../cache"]])
    ->register(new UrlGeneratorServiceProvider());
$encoder = new MessageDigestPasswordEncoder();
$hash = $encoder->encodePassword('venkata', '');
// firewall definitions
$app["security.firewalls"] = [
		"login" => [
			"pattern" => "^/login$",
			"anonymous" => true
		],
		"secured" => [
			"pattern" => "^.*$",
			"form" => ["login_path" => "/login", "check_path" => "/login_check"],
			"logout" => ["logout_path" => "/logout"],
			"users" => [
				"varun" => [
					"ROLE_ADMIN",
					$hash
				],
			]
		]
	];


// route setup 
$app->get("/", function (Application $app) {
    return $app["twig"]->render("home.html.twig", [
        "username" => $app["security.token_storage"]->getToken()->getUser()->getUsername(),
        "posts" => $app->getPosts()
    ]);
})->bind("home");

$app->post("/", function (Application $app, Request $request) {
    $app->retweet($request->get("content"),$request->get("id"),$request->get("count"));
    return new RedirectResponse($app["url_generator"]->generate("home"));
})->bind("retweet");



$app->post("/", function (Application $app, Request $request) {
	if(strlen($request->get("content"))<1){
		$app['session']->getFlashBag()->add('message','no message to post');
		return new RedirectResponse($app["url_generator"]->generate("home"));
    }
	elseif(strlen($request->get("content"))>140){
		$app['session']->getFlashBag()->add('message','message too long to post');
		return new RedirectResponse($app["url_generator"]->generate("home"));
    }
	else
    $app->createPost($request->get("content"));
    return new RedirectResponse($app["url_generator"]->generate("home"));
})->bind("create");



$app->get("/login", function (Application $app, Request $request) {
    return $app["twig"]->render("login.html.twig", [
        "error" => $app["security.last_error"]($request),
        "last_username" => $app["session"]->get("_security.last_username"),
    ]);
})->bind("login");

// running it out
$app->run();