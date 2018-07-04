<div class="sidebar" data-color="blue">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">Denapia</a>
        </div>
        <ul class="nav">

            @foreach( share()->menu()->get() as $item )

                <li class="nav-item {{ is_menu_item_active($item) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ make_menu_link($item) }}">
                        <i class="{{ array_get($item, 'icon') }}"></i>
                        <p>{{ array_get($item, 'label') }}</p>
                    </a>
                </li>

            @endforeach
            
            <li>
                <a class="nav-link" href="./user.html">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./table.html">
                    <i class="nc-icon nc-notes"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./typography.html">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./icons.html">
                    <i class="nc-icon nc-atom"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./maps.html">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./notifications.html">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="upgrade.html">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>