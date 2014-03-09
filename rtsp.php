<?php
$filename = "http://gdata.youtube.com/feeds/api/videos?q={$_GET['id']}&format=1&alt=json";
$handle = fopen($filename, "r");
$contents = str_replace("$","",fread($handle, 10000000));
$o = json_decode($contents);
//The first url is "H.263 video (up to 176x144) and AMR audio"
//The second url is "MPEG-4 SP video (up to 176x144) and AAC audio."
@echo $o->feed->entry[0]->mediagroup->mediacontent[1]->url.','.$o->feed->entry[0]->mediagroup->mediacontent[2]->url;

