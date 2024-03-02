<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <?php
      global $post;
      $args = array('posts_per_page' => 6, 'post_type' => 'about');
      $myposts = get_posts($args);
      foreach ($myposts as $post) : setup_postdata($post); ?>

        <?php
        $service_icon = get_post_meta($post->ID, 'service_icon', true);
        ?>
          

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <?php the_post_thumbnail('about-thumb') ?>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3><?php the_title(); ?></h3>
            
            <ul>
              <li><i class="ri-check-double-line"></i> <?php the_content(); ?></li>
            </ul>
            <p><?php //the_excerpt(); ?>
            </p>
          </div>
          <?php endforeach; ?>

        </div>

      </div>
    </section>