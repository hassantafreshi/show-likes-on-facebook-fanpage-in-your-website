<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
	// www.webbro.ir
	//Persian comment 
	// value page_id zir ra be value page id khod jabeja konid
	// bari bedast avardan value page be in site http://findmyfacebookid.com/ moraje konid
	//English comment
	// if you don't have page id you can get from this site :  http://findmyfacebookid.com/
    $pageId = "124878794919";
    $xml = @simplexml_load_file("http://api.facebook.com/restserver.php?method=facebook.fql.query&query=SELECT%20fan_count%20FROM%20page%20WHERE%20page_id=".$pageId."") or die ("a lot");
    $count = $xml->page->fan_count;
    
	?>
	<div>
	<a class="FB" href="https://www.facebook.com/pages/Web-Bro/124878794919?ref=hl" style="text-decoration:none;   "> تعداد فن پیج وب برو نفر <?php echo $count; ?> می باشد  کلیک برای دیدن صفحه وب برو </a>
	</div>
	



<body>
<html>
