{{ content() }}

<div class="login-or-signup">
    <div class="row">

        <div class="span6">
            <div class="page-header">
                <h2>Log In</h2>
            </div>
            {{ form('users/login', 'class': 'form-inline') }}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="email">Username/Email</label>
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
                    <div class="form-actions">
                        {{ submit_button('Login', 'class': 'btn btn-primary btn-large') }}
                    </div>
                </fieldset>
            </form>
        </div>   
    </div>
</div>
