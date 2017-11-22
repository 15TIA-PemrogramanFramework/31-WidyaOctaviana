<html>
    <head>
    <title>Form Validation Example</title>
    <style>
    .field_title{font-size: 13px;font-family:Arial;width: 300px;margin-top: 10px}
    .form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
    </style>
    </head>
     
    <body>
        <div class="form_error">
          <?php echo validation_errors(); ?>
        </div>
         
        <?php echo form_open('CekValidasi/validasi'); ?>
         
            <h2>Form Validation Example</h2>
         
            <div>
                <div class="field_title">nama (Required)</div>
                <input type="text" name="nama" value="<?php echo set_value('text_field'); ?>" size="30" />
                <?php echo form_error('text_field'); ?>

            </div>
             
            <div>
                <div class="field_title">email (Minimum length)</div>
                <input type="text" name="min_text_field" value="<?php echo set_value('min_text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">username (Maximum length)</div>
                <input type="text" name="username" value="<?php echo set_value('max_text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">konfir_email</div>
                <input type="text" name="konfir_email" value="<?php echo set_value('exact_text_field'); ?>" size="30" />
            </div>
             
             
            <div class="field_title">
                <input type="submit" value="Submit" />
            </div>
         
        </form>
    </body>
</html>