
<form method="post" autocomplete="off">

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("users", "&larr; Go Back") }}
    </li>
</ul>

{{ content() }}

<div class="left scaffold">
    <h2>Create a User</h2>

    <div class="clearfix">
        <label for="email">E-Mail</label>
        {{ form.render("email") }}
    </div>

    <div class="clearfix">
        <label for="mobile">Cell Phone</label>
        {{ form.render("mobile") }}
    </div>

    <div class="clearfix">
        <label for="Profiles">Profile</label>
        {{ form.render("Profiles") }}
    </div>

    <div class="clearfix">
           {{ submit_button("Save", "class": "btn btn-success") }}
    </div>

</div>

</form>