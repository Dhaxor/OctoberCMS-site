<?php 
class Cms5e970a9c2db52325158148_3f3c41cc27f8c40bf6f64cd385282437Class extends Cms\Classes\PageCode
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
