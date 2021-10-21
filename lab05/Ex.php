<html>
    <title> Web tinh thuong</title>
<?php

class Page{
    private $page = null;
    private $title;
    private $year;
    private $copyright;

    private function addHeader()
    {
        $this->page = "<h1>Welcome to our webpage</h1><br>";
        $this->page = $this->page . "<h2> Day la : $this->title </h2><br>";
    }
    public function addContent($content)
    {
        $this->addHeader();
        $this->page = $this->page . $content. "<br>";
        $this->addFooter();
    }
    private function addFooter()
    {
        $this->page = $this->page . "Copyright © $this->copyright at $this->year year<br>";
    }
    public function get()
    {
        print("$this->page");
    }
    public function setYear($year){
        $this->year = $year;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setCopyright($copyright){
        $this->copyright = $copyright;
    }

}

$new_page = new Page();
$new_page->setYear("2021");
$new_page->setTitle("WEB tinh thuong");
$new_page->setCopyright("Web made by @Copyright team");
$new_page->addContent("Content!");
$new_page->get();


?>
</html>