<?php
if (count($error) > 0) : ?>
    <div>
        <?php
        foreach ($error as $errors) : ?>
            <label><b style="color: brown;"><?php
                                            print $errors;
                                            ?></b></label>
        <?php endforeach ?>

    </div>
<?php endif ?>