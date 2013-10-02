{{ content() }}
<div class="login">
    <div class="row">
        <div class="span6">
            <div class="page-header">
                <h2>Sign Up</h2>
            </div>
            {{ form('users/create', 'class': 'form-inline') }}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                            {{ text_field('username', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            {{ password_field('password', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Repeat Password</label>
                        <div class="controls">
                            {{ password_field('password', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            {{ text_field('name', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="surname">Surname</label>
                        <div class="controls">
                            {{ text_field('surname', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            {{ text_field('email', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="mobile">Cell Phone</label>
                        <div class="controls">
                            {{ text_field('mobile', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>
                    <div class="form-actions">
                        {{ submit_button('Sign Up', 'class': 'btn btn-primary btn-large') }}
                    </div>
                </fieldset>
            </form>
        </div>   
    </div>
</div>

