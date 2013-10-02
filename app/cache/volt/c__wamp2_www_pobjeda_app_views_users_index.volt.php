<?php echo $this->getContent(); ?>

<div align="right">
    <?php echo Phalcon\Tag::linkTo(array('users/create', '<i class=\'icon-plus-sign\'></i> Create Users', 'class' => 'btn btn-primary')); ?>
</div>

<form method="post" action="<?php echo $this->url->get('users/search'); ?>" autocomplete="off">

    <div class="left scaffold">

        <h2>Search users</h2>

        <div class="clearfix">
            <label for="idUsers">Id</label>
            <?php echo $form->render('idUsers'); ?>
        </div>

        <div class="clearfix">
            <label for="name">Username</label>
            <?php echo $form->render('username'); ?>
        </div>

        <div class="clearfix">
            <label for="email">E-Mail</label>
            <?php echo $form->render('email'); ?>
        </div>

        <div class="clearfix">
            <label for="Profiles">Profile</label>
            <?php echo $form->render('Profiles'); ?>
        </div>

        <div class="clearfix">
            <?php echo Phalcon\Tag::submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>