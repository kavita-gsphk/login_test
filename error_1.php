<?php
if (count($error_1) > 0) : ?>
    <div>
        <?php
        foreach ($error_1 as $errors_1) : ?>
            <label><b style="color: brown;"><?php
                                            print $errors_1;
                                            ?></b></label>
        <?php endforeach ?>

    </div>
<?php endif ?>