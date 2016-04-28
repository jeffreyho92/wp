<?php
    add_filter('the_posts',  'themepark_sticky' );
    function themepark_sticky( $posts ) {
      if(!is_archive())
        return $posts;
      global $wp_query;
      $sticky_posts = get_option('sticky_posts');
      if ( $wp_query->query_vars['paged'] <= 1 && is_array($sticky_posts) && !empty($sticky_posts) && !get_query_var('ignore_sticky_posts') ) {        $stickies1 = get_posts( array( 'post__in' => $sticky_posts ) );
        foreach ( $stickies1 as $sticky_post1 ) {
          if($wp_query->is_category == 1 && !has_category($wp_query->query_vars['cat'], $sticky_post1->ID)) {
            $offset1 = array_search($sticky_post1->ID, $sticky_posts);
            unset( $sticky_posts[$offset1] );
          }
          if($wp_query->is_tag == 1 && has_tag($wp_query->query_vars['tag'], $sticky_post1->ID)) {
            $offset1 = array_search($sticky_post1->ID, $sticky_posts);
            unset( $sticky_posts[$offset1] );
          }
          if($wp_query->is_year == 1 && date_i18n('Y', strtotime($sticky_post1->post_date))!=$wp_query->query['m']) {
            $offset1 = array_search($sticky_post1->ID, $sticky_posts);
            unset( $sticky_posts[$offset1] );
          }
          if($wp_query->is_month == 1 && date_i18n('Ym', strtotime($sticky_post1->post_date))!=$wp_query->query['m']) {
            $offset1 = array_search($sticky_post1->ID, $sticky_posts);
            unset( $sticky_posts[$offset1] );
          }
          if($wp_query->is_day == 1 && date_i18n('Ymd', strtotime($sticky_post1->post_date))!=$wp_query->query['m']) {
            $offset1 = array_search($sticky_post1->ID, $sticky_posts);
            unset( $sticky_posts[$offset1] );
          }
          if($wp_query->is_author == 1 && $sticky_post1->post_author != $wp_query->query_vars['author']) {
            $offset1 = array_search($sticky_post1->ID, $sticky_posts);
            unset( $sticky_posts[$offset1] );
          }
        }
        $num_posts = count($posts);
        $sticky_offset = 0;
        for ( $i = 0; $i < $num_posts; $i++ ) {
          if ( in_array($posts[$i]->ID, $sticky_posts) ) {
            $sticky_post = $posts[$i];
            array_splice($posts, $i, 1);
            array_splice($posts, $sticky_offset, 0, array($sticky_post));
            $sticky_offset++;
            $offset = array_search($sticky_post->ID, $sticky_posts);
            unset( $sticky_posts[$offset] );
          }
        }
        if ( !empty($sticky_posts) && !empty($wp_query->query_vars['post__not_in'] ) )
          $sticky_posts = array_diff($sticky_posts, $wp_query->query_vars['post__not_in']);
        if ( !empty($sticky_posts) ) {
          $stickies = get_posts( array(
            'post__in' => $sticky_posts,
            'post_type' => $wp_query->query_vars['post_type'],
            'post_status' => 'publish',
            'nopaging' => true
          ) );
          foreach ( $stickies as $sticky_post ) {
            array_splice( $posts, $sticky_offset, 0, array( $sticky_post ) );
            $sticky_offset++;
          }
        }
      }
      return $posts;
    }
?>