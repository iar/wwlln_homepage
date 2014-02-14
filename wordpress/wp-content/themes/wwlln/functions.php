<?php
    add_action('add_googleanalytics', 'the_slug');
    function add_googleanalytics() { ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-47193604-1', 'washington.edu');
          ga('send', 'pageview');

        </script>
    <?php }

	function the_slug($echo=true){
          $slug = basename(get_permalink());
          $slug = apply_filters('slug_filter', $slug);
          return $slug;
    }


    // Remove Wordpress automatically wrapping HTML content with <p> and <br> tags
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );

 ?>
