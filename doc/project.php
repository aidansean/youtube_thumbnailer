<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/youtube_thumbnailer" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=youtube_thumbnailer" ;
$project = new project_object("youtube_thumbnailer", "YouTube thumbnailer", "https://github.com/aidansean/youtube_thumbnailer", "http://aidansean.com/projects/?tag=youtube_thumbnailer", "youtube_thumbnailer/images/project.jpg", "youtube_thumbnailer/images/project_bw.jpg", "This project takes a YouTube uri and provides the appropriate thumbnail images.", "Tools", "HTML,JavaScript,YouTube") ;
?>