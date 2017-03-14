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

    /**
    * Return the Open Graph content of a url
    * @return array
    */
    public function getHead($url)
    {
        $response = $this->get($url);

        $content = $response->getContent();
        $doc = $this->getDOMDocumentFromContent($content);
        $tags = $doc->getElementsByTagName('meta');

        $ogs = $this->extractOGTags($tags);

        return $ogs;
    }

    /**
    * Return the \DOMDocument from a string
    * @return \DOMDocument
    */
    public function getDOMDocumentFromContent($content = '')
    {
        libxml_use_internal_errors(true);

        $doc = new \DOMDocument();
        $doc->loadHTML($content);

        libxml_use_internal_errors(false);

        return $doc;
    }

    /**
    * Return the Open Graph tags in an array
    * @return array
    */
    public function extractOGTags($tags = array())
    {
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
