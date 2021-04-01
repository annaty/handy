<nav>
    <div id='logo' class="<?= ($uri == '/') ? 'active' : '' ?>">
        <a href="<?= DOMAIN ?>/"><img src='/handy/public/assets/media/images/logo.svg'></a>
    </div>
    <div id='nav-menu'>
        <ul>
            <li class="<?= ($uri == '/discover') ? 'active' : '' ?>">
                <a href="<?= DOMAIN ?>/discover">Discover</a>
            </li>
            <li class="<?= ($segments[1] == 'join') ? 'active' : '' ?>">
                <a href="<?= DOMAIN ?>/join">Join</a>
            </li>
            <li class="<?= ($uri == '/connect') ? 'active' : '' ?>">
                <a href="<?= DOMAIN ?>/connect">Connect</a>
            </li>
        </ul>
    </div>
</nav>