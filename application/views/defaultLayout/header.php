<!DOCTYPE html>
<html>
<head>
	<title><?php echo $headers['page_title'];?></title>
<?php 

//initializing css
echo '<link rel="stylesheet" type="text/css" href="'.$base_url.'css/bootstrap.min.css">';
echo '<link rel="stylesheet" type="text/css" href="'.$base_url.'css/style.css">';
echo '<link rel="stylesheet" type="text/css" href="'.$base_url.'css/lato-font.min.css">';
echo '<link rel="stylesheet" type="text/css" href="'.$base_url.'css/font-awesome.min.css">';
if(isset($headers['custom_css']) && $headers['custom_css'] != '')
{
    if(is_array($headers['custom_css']))
    {
        foreach($headers['custom_css'] as $css)
        {
            echo '<link rel="stylesheet" type="text/css" href="'.$base_url.'css/'.$css.'">';
        }
    }
    else
    {
        echo '<link rel="stylesheet" type="text/css" href="'.$base_url.'css/'.$headers['custom_css'].'">';
    }
}
//initializing js
echo '<script type="text/javascript" src="'.$base_url.'js/bootstrap.min.js"></script>';
echo '<script type="text/javascript" src="'.$base_url.'js/jquery.min.js"></script>';
echo '<script type="text/javascript" src="'.$base_url.'js/smoothscroll.js"></script>';
if(isset($headers['custom_js']) && $headers['custom_js'] != '')
{
    if(is_array($headers['custom_js']))
    {
        foreach($headers['custom_js'] as $js)
        {
            echo '<script type="text/javascript" src="'.$base_url.'js/'.$js.'"></script>';
        }
    }
    else 
    {
        echo '<script type="text/javascript" src="'.$base_url.'js/'.$headers['custom_js'].'"></script>';
    }
}
?>
<meta charset="utf8">
</head>
<body>