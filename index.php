<?php

use App\FacebookPoster;
use App\LinkedInPoster;
use App\SocialNetworkPoster;

include_once 'vendor/autoload.php';

class PostToNetwork
{
    public function connectWithMedia(SocialNetworkPoster $creator): void
    {
        $creator->post('Hello, world');
        $creator->post('Some new post');
    }
}

echo "Testing ConcreteCreator1:\n";
(new PostToNetwork())->connectWithMedia(new LinkedInPoster('marcy', '123459'));

echo "\n\n";

echo "Testing ConcreteCreator2:\n";
(new PostToNetwork())->connectWithMedia(new FacebookPoster('john', '12345'));
