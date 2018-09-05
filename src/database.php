<?php 
namespace twitterclone;

use Silex\Application as SilexApplication;

class database extends SilexApplication
{
	public function data(){
		return (string)('"mysql:host=localhost;dbname=silex_twitter_clone", "root", ""');
	}
}