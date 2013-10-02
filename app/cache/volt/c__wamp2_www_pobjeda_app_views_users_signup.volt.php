<?php echo $this->getContent(); ?>
<div class="login">
    <div class="row">
        <div class="span6">
            <div class="page-header">
                <h2>Sign Up</h2>
            </div>
            <?php echo Phalcon\Tag::form(array('users/create', 'class' => 'form-inline')); ?>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                            <?php echo Phalcon\Tag::textField(array('username', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <?php echo Phalcon\Tag::passwordField(array('password', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Repeat Password</label>
                        <div class="controls">
                            <?php echo Phalcon\Tag::passwordField(array('password', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <?php echo Phalcon\Tag::textField(array('name', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="surname">Surname</label>
                        <div class="controls">
                            <?php echo Phalcon\Tag::textField(array('surname', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <?php echo Phalcon\Tag::textField(array('email', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="mobile">Cell Phone</label>
                        <div class="controls">
                            <?php echo Phalcon\Tag::textField(array('mobile', 'size' => '30', 'class' => 'input-xlarge')); ?>
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

