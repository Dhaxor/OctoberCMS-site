<?php 
class Cms5e971142266e9820719040_df439cc8155b9b5d5aba2535ec1c4bfbClass extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
