<? get_header(); ?>
<!------------------------>
<!-- Insert Header Image-->
<!------------------------>
<div id="headerImageContainer"><span id="pageTitle"><a href="<? bloginfo('url') ?>"><? bloginfo('name'); ?></a></span></div>
<!---------------------------->
<!-- End Insert Header Image-->
<!---------------------------->

<!-- BEGIN BRANDED CONTENT DO NOT EDIT -->
           <table cellpadding="0" cellspacing="0" border="0">
            <tr>
             <td valign="top" class="MSUcontent-dn">
<!-- END BRANDED CONTENT DO NOT EDIT -->

<!-------------------->
<!--Department Title-->
<!-------------------->
<a href="http://www.montana.edu/commserv" class="departmentTitle"><? bloginfo('title'); ?></a>

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
<!---------------------------->
<!-- End Main Content Window-->
<!---------------------------->
<!-- BEGIN BRANDED CONTENT DO NOT EDIT -->
              <table id="MSUcontentfooter" width="100%" border="0" cellpadding="0" cellspacing="0">

<!-- END BRANDED CONTENT DO NOT EDIT -->
               <tr>
          <td valign="bottom" align="left" id="MSUregviewlink" nowrap><a href="http://www.montana.edu/msucommon/css/styles.css" onclick="setActiveStyleSheet('styles'); return false;">Return to regular view</a></td>
                <td valign="bottom" align="left" class="MSUtextOnly" id="MSUtextOnly"><a href="http://www.montana.edu/msucommon/css/textonly.css" onclick="setActiveStyleSheet('textonly'); return false;"><img src="http://www.montana.edu/msucommon/images/textonly.jpg" border="0" alt="View Text-only Version" align="bottom" vspace="0"></a>&nbsp;<a href="http://www.montana.edu/msucommon/css/textonly.css" onclick="setActiveStyleSheet('textonly'); return false;">Text-only</a></td>
               </tr>
<!-- BEGIN BRANDED CONTENT DO NOT EDIT -->
               <tr>
          <td colspan="3"><img src="http://www.montana.edu/msucommon/images/whitedot.gif" height="1" width="390" alt="spacer"></td>
         </tr>
              </table>
       </td>
            </tr>

           </table>
          </td>
          <td valign="top" width="170" id="MSUdnbar">
           <table border="0" cellpadding="0" cellspacing="0" width="170">
            <tr>
             <td class="MSUdnbar">
              <div class="sidebar" id="sidebarRight">
              <ul>
                    <?php   /* Widgetized sidebar, if you have the plugin installed. */
                      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : 
                    endif; ?>
              </ul>
              </div>
             </td>
            </tr>
           </table>
          </td>
         </tr>
         <tr id="MSUbottomBar">
          <td class="MSUbgGold" width="170" valign="bottom"><img src="http://www.montana.edu/msucommon/images/golddot.gif" height="1" width="170" alt="spacer"></td>
          <td class="MSUbgLTBlue" width="170" valign="bottom"><img src="http://www.montana.edu/msucommon/images/bluedot.gif" height="1" width="170" alt="spacer"></td>
         </tr>
        </table>

       </td>
      </tr>
     </table>
     <table id="MSUfooter-table" class="MSUfooter-table" align="center" width="760" border="0" cellspacing="0" cellpadding="0">
      <tr>
       <td class="MSUfooter-td" valign="top" align="left">&copy; Montana State University 2006</td>
       <td class="MSUfooter-td" valign="top" align="right">Didn't Find it? Please use our <a href="http://www.montana.edu/html/contact.html">contact list</a> or our <a href="http://www.montana.edu/siteindex/">site index</a>.</td>

      </tr>
     </table>
    </td>
   </tr>
  </table>
 </body>
</html>
