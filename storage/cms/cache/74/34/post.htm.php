<?php 
class Cms5e977c9bd1edf218497406_f7efdc43cccb25965943cc14762fda7bClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
