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

        </ul>
    </div>
</div>