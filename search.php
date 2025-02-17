<?php 
get_header(); ?>

<section id="primary" class="content-area mb-4">
  <div id="content" class="site-content container recent-block" role="main">
    <div class="search__box bg-white px-3 py-5">
      <?php if ( have_posts() ) : ?>
        <header class="page-header">
          <h2 class="page-title mb-4 text-center">
            <?php
            printf( __( 'तपाइले खोजेको <span style="color : var(--tlt-orange)">"%s"</span> किवोर्ड अनुसार नतिजा प्राप्त भयो', 'muluk_sanchar' ), get_search_query() );
            ?>
          </h2>
        </header>
        <div class="row">
          <?php
          while ( have_posts() ) :
            the_post();
            ?>
            <div class="col-md-4">
              <div class="post-item media">
                <div class="feture">
                  <figure class="image" style="width: 130px">
                    <?php if(has_post_thumbnail()){
                      the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') );
                    }
                    else{
                      default_image();
                    }
                    ?>
                  </figure>
                </div>
                <div class="media-body title ml-3">
                  <h5>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h5>
                </div>
              </div>
            </div>
            <?php 
          endwhile; 
          wp_reset_postdata(); ?>
        </div>
        <?php topline_pagination(); ?>
        <div class="no_result"> 
          <?php
        else :
          echo "<h1 class=".'text-danger text-center'.">माफ गर्नुहोस तपाइले खोजेको नतिजा हामीले फेला पार्न सकेनौ </h1>";
          $home_link = esc_url( home_url( '/' ) );
          echo '<a href="'.$home_link.'" class="btn btn-primary text-center my-3">अगाडी जानुहोस</a>';
          ?>
        </div>
        <?php 
      endif;
      ?>
    </div>
  </div>
</section>
<?php
get_footer();