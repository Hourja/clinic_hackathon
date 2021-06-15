<?php

namespace AsyncScraper;

final class ScrapedData {

public $category;
public $content;
public $value;

public function __construct(array $category, array $content,array $value){

    $this->category = $category;
    $this->content = $content;
    $this->value = $value;

}

}
