<?php

namespace Elephantly\OGBundle\Crawler;

use Buzz\Browser as BuzzBrowser;
use Buzz\Message\Request;
use Buzz\Message\Response;
use Buzz\Client\FileGetContents;
use Buzz\Client\Curl;

/**
* primary @author purplebabar(lalung.alexandre@gmail.com)
*/
class OGCrawler extends BuzzBrowser
{

    public function getHead()
    {
        $response = $this->get('http://opengraphprotocol.org');

        $content = $response->getContent();
        $old_libxml_error = libxml_use_internal_errors(true);
        $doc = new \DOMDocument();
        $doc->loadHTML($content);
        libxml_use_internal_errors($old_libxml_error);
        $tags = $doc->getElementsByTagName('meta');

        $ogs = array();
        foreach ($tags as $tag) {
            if( $tag->hasAttribute('property') && strpos($tag->getAttribute('property'), 'og:') === 0)
            {
                $property = $tag->getAttribute('property');
                preg_match('/og:(.*)/', $property, $key);
                $ogs[$key[1]] = $tag->getAttribute('content');
            }
        }

        return $ogs;
    }
}
