<?php
	// www.webbro.ir
	// value page_id zir ra be value page id khod jabeja konid
	// bari bedast avardan   page be in site http://findmyfacebookid.com/ moraje konid
    $pageId = "your page id";
    $xml = @simplexml_load_file("http://api.facebook.com/restserver.php?method=facebook.fql.query&query=SELECT%20fan_count%20FROM%20page%20WHERE%20page_id=".$pageId."") or die ("∞");
    $count = $xml->page->fan_count;
    
	?>

	<?php echo $count; ?> 
