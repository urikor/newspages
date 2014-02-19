<div id = "newspages-block">
	<ul>
     <?php foreach($last_news_block as $n => $node): ?>
       <li>      
           <a href="/node/<?php echo $node->nid ?>"><?php echo $node->title ?></a><br>
           <div id="created">
		     <?php echo format_date($node->created) ?>
           </div>
	   </li>
	 <?php endforeach; ?>
    </ul>
    <a href="/newspages_page" id="more">All posts >></a>
</div>