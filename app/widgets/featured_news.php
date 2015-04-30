<?php

$news = array(
  array(
    'created_at' => '2015-04-29 00:00:00',
    'image'      => 'http://fakeimg.pl/768x370/3c3c3c/',
    'thumb'      => 'http://fakeimg.pl/200x200/3c3c3c/',
    'title'      => 'Blimps to Defend Washington, D.C. Airspace',
    'content'    => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in pulvinar neque. Duis in pharetra purus. Mauris varius porttitor augue in iaculis. Phasellus tincidunt justo magna, eget porta est sagittis quis. Quisque at ante nec dolor euismod elementum sit amet hendrerit nibh. Etiam ut odio tortor. Mauris blandit purus et mauris gravida, eget gravida nulla convallis.</p><p>Vivamus vehicula dignissim malesuada. Donec cursus luctus mi, ac sagittis arcu scelerisque a. Nullam et metus quis sem mollis accumsan. Aenean in sapien pretium, pretium leo eu, ullamcorper sapien. Nulla tempus, metus eu iaculis posuere, ipsum ex faucibus velit, cursus condimentum ligula ex non enim. Aliquam iaculis pellentesque erat molestie feugiat. Morbi ornare maximus rutrum. Pellentesque id euismod erat, eget aliquam massa.</p>'
  ),
  array(
    'created_at' => '2015-04-26 00:00:00',
    'image'      => 'http://fakeimg.pl/768x370/3c3c3c/',
    'thumb'      => 'http://fakeimg.pl/200x200/3c3c3c/',
    'title'      => 'Eye Receptor Transplants May Restore Eyesight to the Blind',
    'content'    => '<p>Praesent cursus lobortis dui eu congue. Phasellus pellentesque posuere commodo. Curabitur dignissim placerat sapien, nec egestas ante. Mauris nec commodo est, ac faucibus massa. Nam et dolor at est dignissim condimentum. Quisque consequat tempus aliquam. Mauris consectetur rutrum efficitur.</p><p>Quisque vulputate massa velit, at facilisis turpis euismod id. Pellentesque molestie lectus ut nisl dignissim sagittis. Sed vitae rutrum turpis. Aenean ex est, sagittis vel lectus nec, suscipit condimentum ligula. Ut vitae vehicula lectus. Morbi sit amet cursus arcu. Curabitur quis nunc ultrices, suscipit erat vel, faucibus diam. Sed odio turpis, consequat eu feugiat a, porttitor eget nisl.</p>'
  ),
  array(
    'created_at' => '2015-04-27 00:00:00',
    'image'      => 'http://fakeimg.pl/768x370/3c3c3c/',
    'thumb'      => 'http://fakeimg.pl/200x200/3c3c3c/',
    'title'      => 'Researchers Look to Tattoos to Monitor Your Sweat',
    'content'    => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies malesuada risus, at pretium elit scelerisque in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel risus sed leo suscipit tempus vel vel eros. Suspendisse augue elit, tempor a leo tempus, egestas hendrerit leo. Fusce mattis quam magna, ut mattis nulla ultrices at. Etiam sollicitudin tempus placerat. Nulla facilisi. Praesent non porttitor diam, imperdiet volutpat dolor. Pellentesque viverra consectetur auctor. Etiam metus purus, accumsan ac efficitur et, laoreet ut orci. Phasellus rutrum rhoncus lacus a imperdiet. Nam ac scelerisque quam. Donec vitae est pharetra, consequat risus et, maximus odio.</p>'
  ),
);

?>

<?php if ( isset( $news ) ) : ?>

  <div class="widget widget-featured-news">

    <div class="widget-header">

      <h3 class="widget-title">

        <i class="glyphicon glyphicon-star"></i>

        Featured News

      </h3>

      <!-- /.widget-title -->

    </div>

    <!-- /.widget-header -->

    <div class="widget-content">

      <ul class="list-unstyled">

        <?php foreach ( $news as $new ) : ?>

          <li data-title="<?php echo $new['title']; ?>">

            <a href="#">

              <img alt="<?php echo $new['title']; ?>" class="img-responsive" height="370" src="<?php echo $new['image']; ?>" width="768">

            </a>

            <h2><a href="#"><?php echo $new['title']; ?></a></h2>

            <div class="article hidden">

              <button class="btn btn-close" type="button"><i class="glyphicon glyphicon-remove"></i></button>

              <p class="h2"><?php echo $new['title']; ?></p>

              <!-- /.h2 -->

              <?php echo $new['content']; ?>

            </div>

            <!-- /.article hidden -->

          </li>

        <?php endforeach; ?>

      </ul>

      <!-- /.list-unstyled -->

    </div>

    <!-- /.widget-content -->

  </div>

  <!-- /.widget widget-featured-news -->

<?php endif; ?>
