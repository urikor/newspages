<?php
  $rows = array();
  foreach($news_page_tpl_admin as $node) {
    $rows[] = array( 
      '<a href="/node/' . $node->nid . '">' . check_plain($node->title) . '</a>',
      check_plain($node->type),
      format_date($node->created),
      format_date($node->changed), 
      '<a href="/node/' . $node->nid . '/edit">' . 'Edit' . '</a>',
      '<a href="/node/' . $node->nid . '/delete">' . 'Delete' . '</a>'
   );
  } 
?>
  
<ul class="action-links">
   <li><a href="/node/add/newspages">Add Newspages content</a></li>
</ul>

<?php 
echo theme('table', array('header' => $header, 'rows' => $rows));
echo theme('pager'); 
?>
