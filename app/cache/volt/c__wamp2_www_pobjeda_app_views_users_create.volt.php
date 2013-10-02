
<form method="post" autocomplete="off">

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('users', '&larr; Go Back')); ?>
    </li>
</ul>

<?php echo $this->getContent(); ?>

<div class="left scaffold">
    <h2>Create a User</h2>

    <div class="clearfix">
        <label for="email">E-Mail</label>
        <?php echo $form->render('email'); ?>
    </div>

    <div class="clearfix">
        <label for="mobile">Cell Phone</label>
        <?php echo $form->render('mobile'); ?>
    </div>

    <div class="clearfix">
        <label for="Profiles">Profile</label>
        <?php echo $form->render('Profiles'); ?>
    </div>

    <div class="clearfix">
           <?php echo Phalcon\Tag::submitButton(array('Save', 'class' => 'btn btn-success')); ?>
    </div>

</div>

</form>