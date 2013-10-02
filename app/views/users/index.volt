{{ content() }}

<div align="right">
    {{ link_to("users/create", "<i class='icon-plus-sign'></i> Create Users", "class": "btn btn-primary") }}
</div>

<form method="post" action="{{ url("users/search") }}" autocomplete="off">

    <div class="left scaffold">

        <h2>Search users</h2>

        <div class="clearfix">
            <label for="idUsers">Id</label>
            {{ form.render("idUsers") }}
        </div>

        <div class="clearfix">
            <label for="name">Username</label>
            {{ form.render("username") }}
        </div>

        <div class="clearfix">
            <label for="email">E-Mail</label>
            {{ form.render("email") }}
        </div>

        <div class="clearfix">
            <label for="Profiles">Profile</label>
            {{ form.render("Profiles") }}
        </div>

        <div class="clearfix">
            {{ submit_button("Search", "class": "btn btn-primary") }}
        </div>

    </div>

</form>