<?php namespace twitterclone;

use Silex\Application as SilexApplication;

class Application extends SilexApplication
{
	public function getPosts()
    {
        return $this["pdo"]->query("SELECT id, occurredAt, content ,count FROM Post")->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function createPost($content)
    {
        $statement = $this["pdo"]->prepare("INSERT INTO Post (occurredAt, content) VALUES (:occurredAt, :content)");
        date_default_timezone_set("America/Chicago");
		$statement->execute(["content" => $content, "occurredAt" => date("Y-m-d H:i:sa")]);
    }
	
    public function retweet($content,$id,$count)
    {
		$q = $this["pdo"]->prepare("UPDATE Post SET count = (:count) WHERE id=(:id)");
		$count = $count+1;
		$q->execute(["count" => $count, "id" => $id]);
        $statement = $this["pdo"]->prepare("INSERT INTO Post (occurredAt, content) VALUES (:occurredAt, :content)");
        date_default_timezone_set("America/Chicago");
		$statement->execute(["content" => $content, "occurredAt" => date("Y-m-d H:i:sa")]);
		
    }

}