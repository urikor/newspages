<div id = "newspages-page">
  <?php if (empty($news_page_tpl)) echo 'No Newspages posts available.' ?>
  <ul>
   <?php foreach($news_page_tpl as $n => $node): ?>
      <li>
        <?php $node_nid = node_load($node->nid); ?>
        <?php $options = array('label' => 'hidden'); ?>
              <?php echo render(field_view_field('node', $node_nid, 'field_alt_title')); ?><br>
        <?php echo render(field_view_field('node', $node_nid, 'field_admin_comment')); ?><br>
        <a href="/node/<?php echo $node->nid ?>">More >></a>
      </li>
   <?php endforeach; ?>
  </ul>
</div>