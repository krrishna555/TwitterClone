<?php 
namespace twitterclone;

use Silex\Application as SilexApplication;

class Route extends SilexApplication
{
	public function route1(SilexApplication $app){
	$this->get('/about',function(){
	return new \Symfony\Component\HttpFoundation\Response("venkata varun maddali");
	});
	

	$this->post("/", function (Route $app, Request $request) {
	if(strlen($request->get("content"))<1){
		return "<script type='text/javascript'>alert('Your tweet seems to contain nothing');</script>";
		return new RedirectResponse($app["url_generator"]->generate("home"));
    }
	elseif(strlen($request->get("content"))>140){
		return "<script type='text/javascript'>alert('Your tweet seems to larger than it is allowed');</script>";
		return new RedirectResponse($app["url_generator"]->generate("home"));
    }
	else
    $app->createPost($request->get("content"));
    return new RedirectResponse($app["url_generator"]->generate("home"));
	})->bind("create");
	
	$this->get("/login", function (Route $app, Request $request) {
    return $app["twig"]->render("login.html.twig", [
        "error" => $app["security.last_error"]($request),
        "last_username" => $app["session"]->get("_security.last_username"),
    ]);
	})->bind("login");
}
}