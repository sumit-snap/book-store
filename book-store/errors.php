<?php if(count($errors)) : ?>
    <div class="error" style="border:1px solid red; border-radius:1px; padding:10px; margin-bottom:5px;">
            <?php foreach($errors as $error): ?>
            <p><?php echo $error ?></p>
            <?php endforeach ?>
    </div>
<?php endif ?>