<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <?php echo Phalcon\Tag::linkTo(array(null, 'class' => 'brand', 'POBJEDA')); ?>
        <div class="nav-collapse">
          <ul class="nav pull-right">
            <li><?php echo Phalcon\Tag::linkTo(array('session/login', 'Login')); ?></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div>

<div class="container">
    <?php echo $this->getContent(); ?>
    <hr>
    <footer>
        <p>&copy; LAP Studios 2013</p>
    </footer>
</div>