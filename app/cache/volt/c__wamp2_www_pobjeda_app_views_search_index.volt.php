<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('users/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::linkTo(array('users/create', '<i class=\'icon-plus-sign\'></i> Create Users', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v27863023761iterated = false; ?><?php $v27863023761iterator = $page->items; $v27863023761incr = 0; $v27863023761loop = new stdClass(); $v27863023761loop->length = count($v27863023761iterator); $v27863023761loop->index = 1; $v27863023761loop->index0 = 1; $v27863023761loop->revindex = $v27863023761loop->length; $v27863023761loop->revindex0 = $v27863023761loop->length - 1; ?><?php foreach ($v27863023761iterator as $user) { ?><?php $v27863023761loop->first = ($v27863023761incr == 0); $v27863023761loop->index = $v27863023761incr + 1; $v27863023761loop->index0 = $v27863023761incr; $v27863023761loop->revindex = $v27863023761loop->length - $v27863023761incr; $v27863023761loop->revindex0 = $v27863023761loop->length - ($v27863023761incr + 1); $v27863023761loop->last = ($v27863023761incr == ($v27863023761loop->length - 1)); ?><?php $v27863023761iterated = true; ?>
<?php if ($v27863023761loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Mobile</th>
            <th>Banned?</th>
            <th>Suspended?</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $user->idUsers; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->surname; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->profile->name; ?></td>
            <td><?php echo $user->mobile; ?></td>
            <td><?php echo ($user->banned == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->suspended == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->active == 'Y' ? 'Yes' : 'No'); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/edit/' . $user->idUsers, '<i class="icon-pencil"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/delete/' . $user->idUsers, '<i class="icon-remove"></i> Delete', 'class' => 'btn btn-danger')); ?></td>
        </tr>
    </tbody>
<?php if ($v27863023761loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo Phalcon\Tag::linkTo(array('users/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v27863023761incr++; } if (!$v27863023761iterated) { ?>
    No users are recorded
<?php } ?>
