<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>

<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

    <div class="customer">
      <?php
          $my_block = module_invoke('views', 'block_view', 'text_site-block');
          print render($my_block['content']); 
        ?>
              <?php
          $my_block = module_invoke('views', 'block_view', 'team-block_1');
          print render($my_block['content']); 
        ?>
  </div>

</article>
<div class="title-map">מפת הגעה</div>
<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=iw&amp;geocode=&amp;q=%D7%99%D7%A2%D7%A7%D7%91+%D7%90%D7%9C%D7%99%D7%90%D7%91+5,+%D7%99%D7%A8%D7%95%D7%A9%D7%9C%D7%99%D7%9D,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;aq=0&amp;oq=+%D7%99%D7%A2%D7%A7%D7%91+%D7%90%D7%9C%D7%99%D7%90%D7%91+5,&amp;sll=37.0625,-95.677068&amp;sspn=39.592876,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=%D7%99%D7%A2%D7%A7%D7%91+%D7%90%D7%9C%D7%99%D7%90%D7%91+5,+%D7%99%D7%A8%D7%95%D7%A9%D7%9C%D7%99%D7%9D,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;ll=31.794294,35.187648&amp;spn=0.005198,0.010568&amp;t=m&amp;z=14&amp;output=embed"></iframe>