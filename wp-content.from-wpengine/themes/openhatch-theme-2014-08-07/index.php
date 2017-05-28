<!doctype html>
<html lang="en" dir="ltr">
    <head>
       <link rel="stylesheet" type="text/css" href="//openhatch.org/static/css/blog-style.css" />

<!-- blog metadata etc. -->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Facebook OpenGraph image, if applicable -->
<?php if ( is_singular()   ) { ?><meta property="og:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>" /><?php } ?>

<!-- add some JavaScript, depending on if it's needed -->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<!-- Call the WordPress wp_head() function, which permits plugins etc. to load more things.
     More info: http://codex.wordpress.org/Function_Reference/wp_head
-->
<?php wp_head(); ?>
 
        <title>
            <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

        ?>

        </title>

        <link rel="shortcut icon" href="/favicon.ico" />
	<?php if ( is_singular() ) { ?>
<link rel="canonical" href="<?php the_permalink(); ?>" />
<?php } ?>

        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <meta http-equiv='Content-Language' content='en-us' />
        <meta name='Description' content='OpenHatch, the open source involvement engine.'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style type='text/css'> /*<![CDATA[*/
            
            
            @import url(/downloaded-for-static-snapshot/openhatch.css);
            

            

            body { 
            #landing a.blog-feed { 
                background-image:
                url(/downloaded-for-static-snapshot/feed-icon-16x16-sprited.png) }
            .person {
                font-size: 80%; }
            .geocode {
                font-size: 80%; }
            body#profile #importer { 
                background-image:
                url(/downloaded-for-static-snapshot/ship.png) }
            body#profile #progressbar.working .ui-progressbar-value { 
                background-image:
                url(//openhatch.org/static/css/jquery-ui-lightness/images/pbar-ani.gif); }
            body#profile .portfolio_entry > .actions li.save_and_publish_button *,
            body#profile .portfolio_entry > .actions li.save_button * { 
                background-image:
                url(/downloaded-for-static-snapshot/publish.png); }
            body#profile .portfolio_entry > .actions li.delete_portfolio_entry a { 
                background-image:
                url(/downloaded-for-static-snapshot/delete.png); }
            body#profile .citations li .actions a.delete_citation { 
                background-image:
                url(/downloaded-for-static-snapshot/delete-citation.png); }
            body#profile #portfolio.viewer .portfolio_entry .submodule { 
                background-image:
                url(/downloaded-for-static-snapshot/portfolio-entry-bg.png) }
            body#project #wannahelp-button { 
                background-image:
                url(/downloaded-for-static-snapshot/wannahelp-button-bg.png); }
            body#project #wannahelp-button:active { 
                background-image:
                url(//openhatch.org/static/images/wannahelp-button-bg-active.png); }
            body#project #wannahelp-button:hover,
            body#project #wannahelp-button:focus { 
                background-image:
                url(//openhatch.org/static/images/wannahelp-button-bg-hover.png); }
            body#project #wannahelp-button:hover:active { 
                background-image:
                url(//openhatch.org/static/images/wannahelp-button-bg-hover-active.png); }
            body#project .next_steps_for_helpers { 
                background-image:
                url(//openhatch.org/static/images/bg-translucent-green.png); }
            #footer { background: #333 url('//openhatch.org/static/images/dark-hatch.png') repeat; }

            
            /*]]>*/
        </style>

        <!--[if lt IE 8]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js"
        type="text/javascript"></script>
        <![endif]-->
	
		<script type="text/javascript" src="//openhatch.org/static/packed/header.js?1404446267"></script>
	
        
        <link rel="stylesheet/less" type="text/css" href="//openhatch.org/static/less/base/base.less">
        <link rel="stylesheet/less" type="text/css" href="//openhatch.org/static/less/base/one_column.less">
        <link rel="stylesheet/less" type="text/css" href="//openhatch.org/static/less/base/two_column.less">
        <link rel="stylesheet/less" type="text/css" href="//openhatch.org/static/less/base/three_column.less">
        <link rel="stylesheet/less" type="text/css" href="//openhatch.org/static/less/base/landing.less">
        
        <script type='text/javascript' src='/downloaded-for-static-snapshot/jquery.min.js'></script>
        <script src="//openhatch.org/static/js/less-1.3.0.min.js" type="text/javascript"></script>
        
        

    </head>

    
    <body id='body' class='two_columns wordpress'>

        <div id="nav-container">

                
<div id='nav'>
        <h1>
            <a href='/'>
                <img src='//openhatch.org/static/images/the-logo-bluegreen-87px.png'
                        width='87' height='60' alt='openhatch' />
            </a>
        </h1>
        <!-- no nav links for WordPress -->
</div>

                
        </div>
        
        <div id="container">
                
                <div id="pagetop">
                    
                    
                </div>
                <div id='content'>
                    
<div class="column two-column-left">
     <?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<div id="left" class="column two-column-left">
  <div id="sidebar" class="module">
    <div class="module-body">
      <ul id="sidebar-list">
	<li style='list-style: none;'>OpenHatch.org is an <a href='//openhatch.org/'>open source involvement engine</a>. This is our blog and meta-world.</li>
      <li><h2>About OpenHatch</h2>
      <ul>
	<li><a href="/">Latest blog posts</a></li>
	<li><a href="//openhatch.org/about/">Who? and why?</a></li>
	<li><a href="//openhatch.org/contact/">Contact us</a></li>
	<li><a href="http://openhatch.readthedocs.org/en/latest/">Source code, etc.</a></li>
	<li><a href="//openhatch.org/policies-etc/">Privacy policy</a></li>
	<li><a href="//openhatch.org/">&laquo; Back to OpenHatch.org</a></li>
      </ul>
      </li>
      <?php   /* Widgetized sidebar, if you have the plugin installed. */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

      <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
	   <li><h2>Author</h2>
	   <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
	   </li>
      -->

      <?php if ( is_404() || is_category() || is_day() || is_month() ||
	is_year() || is_search() || is_paged() ) {
      ?> <li>

      <?php /* If this is a 404 page */ if (is_404()) { ?>
      <?php /* If this is a category archive */ } elseif (is_category()) { ?>
      <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

      <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
      <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
      for the day <?php the_time('l, F jS, Y'); ?>.</p>

      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
      for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
      for the year <?php the_time('Y'); ?>.</p>

      <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
      <p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
      for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

      <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

      <?php } ?>

      </li> <?php }?>

      <li><h2>Archives</h2>
      <ul>
	<?php wp_get_archives('type=monthly'); ?>
      </ul>
      </li>

      <?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

      <?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
      <?php wp_list_bookmarks(); ?>

      <li><h2>Meta</h2>
      <ul>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
	<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
	<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
	<?php wp_meta(); ?>
      </ul>
      </li>
      <?php } ?>

      <?php endif; ?>
    </ul>
  </div>
</div>

<div class="module" style="margin-bottom: 50px;">
  <div class="module-body">
    <?php bloginfo('name'); ?> is graciously powered by
    <a href="http://wordpress.org/">WordPress</a>.
    <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
    and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
    <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
  </div>
</div>
</div>
 
</div>
<div class="column two-column-right">
     <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="module" id="post-<?php the_ID(); ?>">
<div class="module-head">
  <h2>
    <a style='color: #333;' href="<?php the_permalink() ?>" rel="bookmark"
    title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  </h2>

  <div style='float: left; clear: left; font-weight: bold; width: 100%; font-size: 8pt; padding: 10px 0; '>
    by <?php the_author() ?>
    <span style='color: #777;'>&bull;</span>
    <?php the_time('F jS, Y') ?>
  </div>

  <div class='clearer'></div>
</div>

<div class="module-body">
  <?php the_content('Read the rest of this entry &raquo;'); ?>
</div>

<div class="module-foot">
  <p class="postmetadata"><?php /* the_tags('Tags: ', ', ', '<br />'); */ ?> <!-- Posted in <?php the_category(', ') ?> | --> <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No comments yet &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
</div>
</div>

<?php comments_template(); ?>
<?php endwhile; ?>

<div class="navigation">
  <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
  <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>

<?php endif; ?>
 
</div>
<!--- end second column -->
<div class="more-content">
    
    
</div>
<!--- end more_content -->

                </div><!-- /#content -->
                
        </div><!-- /#container -->
        </div>

        <div id='footer-wrapper'>
          <div id='footer'>
            
	    <div class="threecol">
              <div class="column">
                <h3>OpenHatch organization</h3>

                <ul>
                  <li><a href="//openhatch.org/about/">about openhatch</a></li>
                  <li><a href="//openhatch.org/sponsors/">sponsors</a></li>
                  <li><a href="//openhatch.org/blog/">blog</a></li>
                  <li><a href="//openhatch.org/contact/">contact</a></li>
                  <li><a href="https://openhatch.org/wiki/Privacy_policy">privacy policy</a></li>
                </ul>
              </div>

	      <div class="column">
		<h3>OpenHatch web app code</h3>
		<ul>
		  <li><a href="http://openhatch.readthedocs.org/en/latest/README.html">Intro for developers</a></li>
		  <li><a href="https://github.com/openhatch/oh-mainline">Github (source code)</a></li>
		  <li><a href="http://lists.openhatch.org/mailman/listinfo/devel">Devel mailing list</a></li>
		  <li><a href="http://openhatch.readthedocs.org/">Code docs</a></li>
		  <li><a href="https://openhatch.org/bugs/">Bug tracker</a></li>
		</ul>
	      </div>

	      <div class="column">
		<h3>Other web tools</h3>
		<ul>
                  <li><a href="/wiki/">wiki</a></li>
                  <li><a href="http://forum.openhatch.org/">forum</a></li>
		</ul>
	      </div>
	    </div>
            
          </div>
        </div>

        
        
	<!--Includes for the javascript bundle are in base/assets.py-->
	
		<script type="text/javascript" src="//openhatch.org/static/packed/openhatch.js?1407021888"></script>
	

        
        

        
        
<!-- Goggle Analytics not included because you haven't set the settings.GOOGLE_ANALYTICS_CODE variable! -->
        

    </body>
</html>

