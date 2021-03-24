<?php require("..\..\myclass\Form.php");
$form = new Form($_POST);
?>

<form action="step2.view.php" method="post">
    <?php
        echo $form->input('name','text');
        echo $form->input('lastname','text');
        echo $form->input('password','password');
        echo $form->input('confirm password','password');
        echo $form->input('email',' email');
        echo $form->submit('');

       
    ?>
</form>
