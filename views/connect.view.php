<?php require('partials/head.php'); ?>

<div class='content' id='login-page'>
    <div class='container'>
        <form action='' method='post'>
            <h1>Log in</h1>
            <div class='login-input'>
                <img src='/handy/public/assets/media/images/login-page/mail.png'>
                <input type='text' name='email' id='email' placeholder='yourname@domain.com' required>
            </div>
            <div class='login-input'>
                <img src='/handy/public/assets/media/images/login-page/key.png'>
                <input type='email' name='password' id='password' placeholder='Password' required>
            </div>
            <a class='' href='#'>Forgot password?</a>
            <button type='submit' class='brown-button'>Log in</button>
        </form>
    </div>
    <div class='container'>
        <h1>
            Nice to see you <br>back
        </h1>
        <p>
            We love you, don't ever leave us again!
        </p>
    </div>
</div>

<?php require('partials/footer.php'); ?>