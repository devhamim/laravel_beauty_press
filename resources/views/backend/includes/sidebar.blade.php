<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-cyan elevation-3">
    <a class="brand-link" href="{{ route('frontend.index') }}">
        <img src="{{ asset(get_setting('admin_logo')) }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ app_name() }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <x-utils.link-sidebar :href="route('admin.dashboard')" :text="__('Dashboard')" icon="nav-icon icon-speedometer"
                        :active="activeClass(Route::is('admin.dashboard'))" class="nav-link" />
                </li>


                @if (
                    $logged_in_user->hasAllAccess() ||
                        ($logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')))

                    <li
                        class="nav-item {{ activeClass(Route::is('admin.auth.user.') || Route::is('admin.auth.role.'), 'menu-open') }}">
                        @if ($logged_in_user->hasAllAccess() || $logged_in_user->can('admin.setting'))
                    <li class="nav-item">
                        <x-utils.link-sidebar href="#" :text="__('Site Settings')" icon="nav-icon icon-star"
                            class="nav-link" rightIcon="fas fa-angle-left right" />
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.general')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('General Settings')" />
                            </li>

                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.about')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('About Banner Settings')" />
                            </li>

                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.team')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Team Settings')" />
                            </li>

                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.shedule')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Time Shedule Settings')" />
                            </li>

                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.blogs')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Blog Settings')" />
                            </li>


                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.page')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Page Settings')" />
                            </li> --}}
                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.appointment')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Appointment')" />
                            </li>
                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.slider')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Slider Settings')" />
                            </li>
                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.activity')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Activity Settings')" />
                            </li> --}}
                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.event')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Event Settings')" />
                            </li> --}}
                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.brand')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Brand Settings')" />
                            </li> --}}
                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.gallery')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Gallery Settings')" />
                            </li> --}}
                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.donate')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Donate Settings')" />
                            </li> --}}
                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.project')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Gallery Settings')" />
                            </li>
                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.service')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Service Settings')" />
                            </li>
                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.testmony')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Testmony Settings')" />
                            </li> --}}
                            {{-- <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.blog')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Blog Settings')" />
                            </li> --}}
                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.secrets')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Home About Settings')" />
                            </li>
                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.pricing')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Pricing Settings')" />
                            </li>
                            <li class="nav-item">
                                <x-utils.link :href="route('admin.setting.video')" icon="nav-icon icon-arrow-right" class="nav-link"
                                    :text="__('Videos Settings')" />
                            </li>

                            <li class="nav-item">
                                <x-utils.link-sidebar href="#" :text="__('Contact Settings')" icon="nav-icon icon-star"
                                    class="nav-link" rightIcon="fas fa-angle-left right" />
                                <ul class="nav nav-treeview" style="margin-left: 8px">
                                    <li class="nav-item">
                                        <x-utils.link :href="route('admin.setting.contactBanner')" icon="nav-icon icon-arrow-right"
                                            class="nav-link" :text="__('Contact Banner Settings')" />
                                    </li>
                                    <li class="nav-item">
                                        <x-utils.link :href="route('admin.setting.team')" icon="nav-icon icon-arrow-right"
                                            class="nav-link" :text="__('About Team Settings')" />
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                @endif

                <x-utils.link-sidebar href="#" :text="__('Access')" icon="nav-icon flaticon-lock" class="nav-link"
                    rightIcon="fas fa-angle-left right" />
                <ul class="nav nav-treeview">

                    @if (
                        $logged_in_user->hasAllAccess() ||
                            ($logged_in_user->can('admin.access.user.list') ||
                                $logged_in_user->can('admin.access.user.deactivate') ||
                                $logged_in_user->can('admin.access.user.reactivate') ||
                                $logged_in_user->can('admin.access.user.clear-session') ||
                                $logged_in_user->can('admin.access.user.impersonate') ||
                                $logged_in_user->can('admin.access.user.change-password')))
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.auth.user.index')" icon="nav-icon icon-user" class="nav-link"
                                :text="__('User Management')" :active="activeClass(Route::is('admin.auth.user.*'))" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.auth.role.index')" icon="nav-icon fas fa-user" class="nav-link"
                                :text="__('Role Management')" :active="activeClass(Route::is('admin.auth.role.*'))" />
                        </li>
                    @endif
                </ul>
                </li>
                @endif

                @if ($logged_in_user->hasAllAccess())
                    <li class="nav-item ">
                        <x-utils.link-sidebar href="#" :text="__('Logs')" icon="nav-icon fas fa-list"
                            class="nav-link" rightIcon="fas fa-angle-left right" />
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <x-utils.link :href="route('log-viewer::dashboard')" icon="nav-icon far fa-circle" class="nav-link"
                                    :text="__('Dashboard')" />
                            </li>
                            <li class="nav-item">
                                <x-utils.link :href="route('log-viewer::logs.list')" icon="nav-icon far fa-circle" class="nav-link"
                                    :text="__('Logs')" />
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
