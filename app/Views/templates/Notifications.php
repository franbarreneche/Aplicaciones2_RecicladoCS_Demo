<?php if(session('error')) { ?>
<div class="notification is-danger">
    <button class="delete"></button>
         <div>
            <div>Mensaje</div>
            <p><?php echo session('error') ?></p>
        </div>
</div>
<?php } ?>
<?php if(session('message')) { ?>
<div class="notification is-success">
    <button class="delete"></button>
         <div>
            <div>Mensaje</div>
            <p><?php echo session('message') ?></p>
        </div>
</div>
<?php } ?>
