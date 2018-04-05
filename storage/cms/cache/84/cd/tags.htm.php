<?php 
class Cms5aa3f80bb4dab010269385_f3a0a324d59945f4ac3dbd3f423f8e12Class extends \Cms\Classes\PageCode
{
public function onEnd() {
if ($this->category)
$this->page->title = $this->category->name;
}
}
