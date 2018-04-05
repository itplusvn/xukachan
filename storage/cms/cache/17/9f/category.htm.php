<?php 
class Cms5a0e0fd49d91d430256181_a4481f50ef2013be1542cdf47d007714Class extends \Cms\Classes\PageCode
{
public function onEnd() {
if ($this->category)
$this->page->title = $this->category->name;
}
}
