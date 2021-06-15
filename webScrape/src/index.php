<?php

require 'C:\bootcamp\Projects\clinic_hackathon\vendor\autoload.php';


use React\Http\Browser;

$result = $_GET['city'] ?? null;



$loop = \React\EventLoop\Factory::create();
$browser = new Browser($loop);
$scraper = new \AsyncScraper\Scraper($browser);


$urls = $result ?? "";

$full_url = 'https://www.numbeo.com/cost-of-living/in/' . $urls;

$my_scraped_data = $scraper->scrape($full_url)->then(  function($result)  {

   return var_dump($result);
 });

$loop->run();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrape My Town</title>

    
</head>
<body>
<form method=“post”>
    <input type=“text” name=city value="" />
    <button type=“submit”>Find Cost of Living</button>
</form>
</body>
</html>
