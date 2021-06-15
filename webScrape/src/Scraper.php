<?php
namespace AsyncScraper;

use React\Promise\PromiseInterface;
use React\Http\Browser;
use Symfony\Component\DomCrawler\Crawler;
use React\EventLoop\Factory;
use AsyncScraper\ScrapedData;
use Psr\Http\Message\ResponseInterface;

use function React\Promise\all;

class Scraper
{

public function __construct(Browser $browser)
{
   $this->browser = $browser;
}

    public function scrape(string ...$urls):PromiseInterface
    {

        $promises = array_map(function($url) {
           return $this->extractFromUrl($url);
        }, $urls);

        return all($promises);

    }


// HERE WE ARE SCRAPING THE URL TO FIND THE 3 THINGS WE NEED
// CATEGORY , CONTENT AND VALUE(CURRENCY)

   private function extract (string $responseBody):ScrapedData
   {
    $crawler = new Crawler($responseBody);

    $category_title =  $crawler->filter('div.category_title')->each(function (Crawler $node, $i){
        return $node->text();
    });
    $content =  $crawler->filter('.data_wide_table td:nth-of-type(1)')->each(function (Crawler $node, $i){
            return $node->text();
        });


    $value =  $crawler->filter('span.first_currency')->each(function (Crawler $node_value, $i){
            return $node_value->text();
        });


        return (new ScrapedData($category_title, $content, $value));




    }


// THE LOGIC TO RETURN THE ENTIRE HTML PAGE IN STRING

   private function extractFromUrl($url):PromiseInterface
   {

        return $this->browser
            ->get($url)->then(function (ResponseInterface $response)
            {
                return $this->extract((string) $response->getBody());
        });

   }



}

//










