<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('frontend.index') }}" class="nav-link" target="_blank">Frontend</a>
        </li>
        <!--<li class="nav-item d-none d-sm-inline-block">-->
        <!--  <a href="{{ route('admin.messaging.contact.index') }}" class="nav-link">Contacts</a>-->
        <!--</li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!--<li class="nav-item dropdown">-->
        <!--  <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--    <i class="far fa-comments"></i>-->
        <!--    <span class="badge badge-danger navbar-badge">3</span>-->
        <!--  </a>-->
        <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--    <a href="#" class="dropdown-item">-->
        <!-- Message Start -->
        <!--      <div class="media">-->
        <!-- <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" /> -->
        <!--        <div class="media-body">-->
        <!--          <h3 class="dropdown-item-title">-->
        <!--            Brad Diesel-->
        <!--            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
        <!--          </h3>-->
        <!--          <p class="text-sm">Call me whenever you can...</p>-->
        <!--          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- Message End -->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!-- Message Start -->
        <!--      <div class="media">-->
        <!-- <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" /> -->
        <!--        <div class="media-body">-->
        <!--          <h3 class="dropdown-item-title">-->
        <!--            John Pierce-->
        <!--            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
        <!--          </h3>-->
        <!--          <p class="text-sm">I got your message bro</p>-->
        <!--          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- Message End -->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--<a href="#" class="dropdown-item">-->
        <!-- Message Start -->
        <!--  <div class="media">-->
        <!-- <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" /> -->
        <!--    <div class="media-body">-->
        <!--      <h3 class="dropdown-item-title">-->
        <!--        Nora Silvester-->
        <!--        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
        <!--      </h3>-->
        <!--      <p class="text-sm">The subject goes here</p>-->
        <!--      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--    </div>-->
        <!--  </div>-->
        <!-- Message End -->
        <!--</a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="{{ route('admin.messaging.contact.index') }}" class="dropdown-item dropdown-footer">See All Messages</a>-->
        <!--  </div>-->
        <!--</li>-->
        <!-- Notifications Dropdown Menu -->
        <!--<li class="nav-item dropdown">-->
        <!--  <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--    <i class="far fa-bell"></i>-->
        <!--    <span class="badge badge-warning navbar-badge">15</span>-->
        <!--  </a>-->
        <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--    <span class="dropdown-item dropdown-header">15 Notifications</span>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-envelope mr-2"></i> 4 new messages-->
        <!--      <span class="float-right text-muted text-sm">3 mins</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-users mr-2"></i> 8 friend requests-->
        <!--      <span class="float-right text-muted text-sm">12 hours</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-file mr-2"></i> 3 new reports-->
        <!--      <span class="float-right text-muted text-sm">2 days</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
        <!--  </div>-->
        <!--</li>-->
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link" data-widget="fullscreen" href="#" role="button">-->
        <!--    <i class="fas fa-expand-arrows-alt"></i>-->
        <!--  </a>-->
        <!--</li>-->
        <li class="nav-item dropdown">
            <x-utils.link href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <x-slot name="text">
                    <img class="rounded-circle" style="max-height: 20px" src="{{ $logged_in_user->avatar }}" />
                    {{ $logged_in_user->name }} <span class="caret"></span>
                </x-slot>
            </x-utils.link>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @if ($logged_in_user->isAdmin())
                    <x-utils.link :href="route('admin.dashboard')" :text="__('Administration')" class="dropdown-item" />
                @endif

                @if ($logged_in_user->isUser())
                    <x-utils.link :href="route('frontend.user.dashboard')" :active="activeClass(Route::is('frontend.user.dashboard'))" :text="__('Dashboard')" class="dropdown-item" />
                @endif

                <x-utils.link :href="route('frontend.user.account')" :active="activeClass(Route::is('frontend.user.account'))" :text="__('My Account')" class="dropdown-item" />

                <x-utils.link :text="__('Logout')" class="dropdown-item"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <x-slot name="text">
                        @lang('Logout')
                        <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                    </x-slot>
                </x-utils.link>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
