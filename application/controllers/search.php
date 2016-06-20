<?php

/**
 * Class Index
 * The index controller
 */
class Search extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function tag($tag = '')
    {
        $tag = strip_tags(trim($tag));

        if(!$tag){ header('location: '.URL); }

        $feed = file_get_contents(FLICKR_URL."?tags=".$tag);
        $xml  = simplexml_load_string($feed);

        $data = [];
        $s    = 1; // Section
        $i    = 1; // Item

        foreach($xml as $item){
            if($item->link[1]['href'] && strpos($item->link[1]['href'], '.jpg')){
                $data[$s][$i]['title'] = $item->title;
                $data[$s][$i]['link']  = $item->link['href'];
                $data[$s][$i]['img']   = $item->link[1]['href'];

                $i++;
                if($i == 4){
                    $i = 1;
                    $s++;
                }
            }
        }

        $this->view->tag  = $tag;
        $this->view->data = $data;
        $this->view->render('search/tag');
    }
}
