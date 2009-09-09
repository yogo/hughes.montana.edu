<? get_header(); ?>
<!-------------------->
<!--Department Title-->
<!-------------------->
<a href="http://www.montana.edu/commserv" class="departmentTitle"><? bloginfo('title'); ?></a> > News
<br />
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <div class="post" id="post-<?php the_ID(); ?>">
        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <br /><small><?php the_time('F jS, Y') ?> - Posted by <? the_author() ?></small>

        <div class="entry">
          <?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>
                
        <p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?> <a href="<? comments_link() ?>"><?php comments_number('No Comments', '1 Comment', '% Comments', 'number'); ?></a></p>
      </div>

    <?php endwhile; ?>
         

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </div>

  <?php else : ?>

    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>

  <?php endif; ?>
  <? get_footer() ?>
