<?php
// this file is to generate pages(.md files) through foreach the folder
// blogs , it will auto create pages .md files into the folder
// _posts, so that you can write things into files inner the
// folder blogs , and then run publish.php

// println
function println($str) 
{
    echo $str."\n";
}

// del dir and all inner 
function del_dir($dir)   
{   
    $str = "";
    if(strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {   
	    $str = "rmdir /s/q " . $dir;   
    } else {   
	    $str = "rm -Rf " . $dir;   
    }   
    exec($str);
}  

// scan files in @dir
function scan_dir($dir, $callback)
{
    if(is_dir($dir))
    {
        if ($dh = opendir($dir))
        {
            while (($file = readdir($dh)) !== false)
            {
                if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
                {
                    scan_dir($dir."/".$file."/", $callback);
                }
                else
                {
                    if($file!="." && $file!="..")
                    {
			$d = basename($dir);
			$f = $file;
			$fp = $dir.$file;
			$callback($fp, $d, $f);
                    }
                }
            }
            closedir($dh);
        }
    }
}

// write post
$write_post = function ($fp, $d, $f) {
    global $pp;
    $ft = filemtime($fp);
    $tf = date("Y-m-d", $ft)."-".$f;
    $tfp = $pp."/".$tf;
    $title = substr($f, 0, strripos($f, "."));
    $category = $d;
    if (file_exists($fp))
    {
	$data = "---\n";
	$data .= "layout: post\n";
	$data .= "title: {$title}\n";
    $data .= "subtitle: \n";
    $data .= "date: ".date("Y-m-d h-M-s")."\n";
    $data .= "author: Lu-Kye\n";
    $data .= "header-img: img/{$category}/{$title}\n";
	$data .= "catelog: true\n";
	$data .= "tags: \n  - {$category}\n";
	$data .= "---\n";
	$data .= file_get_contents($fp);
	$file = fopen($tfp, "w");
	fwrite($file, $data);
	fclose($file);
    }
};

// cur path
$p = dirname(__FILE__);

// blogs path
$bp = $p."/blogs";

// _posts path
$pp = $p."/_posts"; 

// remove _posts first
del_dir($pp);
mkdir($pp);

// scan blogs
scan_dir($bp, $write_post);

?>
