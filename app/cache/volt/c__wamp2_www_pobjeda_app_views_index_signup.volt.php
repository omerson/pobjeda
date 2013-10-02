<?php echo $this->getContent(); ?>
<div class="login">
    <div class="row">
        <div class="span6">
            <div class="page-header">
                <h2>Sign Up</h2>
            </div>
            <?php echo Phalcon\Tag::form(array('class' => 'form-inline')); ?>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                            <?php echo $form->render('username'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <?php echo $form->render('email'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="surname">Surname</label>
                        <div class="controls">
                            <?php echo $form->render('email'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <?php echo $form->render('email'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <?php echo $form->render('password'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Repeat Password</label>
                        <div class="controls">
                           <?php echo $form->render('confirmPassword'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="mobile">Profile</label>
                        <div class="controls">
                            <?php echo $form->render('Profiles'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="mobile">Cell Phone</label>
                        <div class="controls">
                            <?php echo $form->render('mobile'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mobile">Banned?</label>
                        <div class="controls">
                            <?php echo $form->render('banned'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mobile">Suspended?</label>
                        <div class="controls">
                            <?php echo $form->render('suspended'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mobile">Active?</label>
                        <div class="controls">
                            <?php echo $form->render('active'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="mobile">Agree on terms</label>
                        <div class="controls">
                            <?php echo $form->render('terms'); ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <?php echo Phalcon\Tag::submitButton(array('Sign Up', 'class' => 'btn btn-primary btn-large')); ?>
                    </div>
                </fieldset>
            </form>
        </div>   
    </div>
</div>

