<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('users/', '&larr; Go Back')); ?>
    </li>
</ul>
<form method="post" autocomplete="off" action="<?php echo $this->url->get('users/changePassword'); ?>">

    <div class="left scaffold">

        <h2>Change Password</h2>

        <div class="clearfix">
            <label for="password">Password</label>
            <?php echo $form->render('password'); ?>
        </div>

        <div class="clearfix">
            <label for="confirmPassword">Confirm Password</label>
            <?php echo $form->render('confirmPassword'); ?>
        </div>

        <div class="clearfix">
            <?php echo Phalcon\Tag::submitButton(array('Change Password', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>