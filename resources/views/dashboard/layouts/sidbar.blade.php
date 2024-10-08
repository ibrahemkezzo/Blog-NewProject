  <div class="sidebar">
         <nav class="sidebar-nav">
             <ul class="nav">
                 <li class="nav-item">
                     <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> {{__('words.dashboard')}} <</a>
                 </li>


                 <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        {{ __('words.users') }}</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            @can('view', $setting)
                            <a class="nav-link" href="{{ route('dashboard.users.create') }}"><i
                                    class="icon-user-follow"></i>{{ __('words.add user') }}</a>
                            @endcan
                            <a class="nav-link" href="{{ route('dashboard.users.index') }}"><i class="icon-people"></i>
                                {{ __('words.users') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        {{ __('words.categories') }}</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            @can('view', $setting)
                                <a class="nav-link" href="{{ route('dashboard.category.create') }}"><i
                                        class="icon-user-follow"></i>{{ __('words.add category') }}</a>
                            @endcan
                            <a class="nav-link" href="{{ route('dashboard.category.index') }}"><i class="icon-people"></i>
                                {{ __('words.categories') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        {{ __('words.posts') }}</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.posts.create') }}"><i
                                    class="icon-user-follow"></i>{{ __('words.add post') }}</a>
                            <a class="nav-link" href="{{ route('dashboard.posts.index') }}"><i class="icon-people"></i>
                                {{ __('words.posts') }}</a>
                        </li>
                    </ul>
                </li>

                @can('view', $setting)
                <li class="nav-item">
                     <a class="nav-link" href="{{route('dashboard.settings.index')}}"><i class="icon-user-follow"></i>{{__('words.settings')}}</a>

                     {{-- <a class="nav-link" href="#"><i class="icon-people"></i> لیست کاربران</a>
                     <a class="nav-link" href="#"><i class="icon-user-following"></i> دسترسی کاربران</a> --}}
                </li>
                @endcan
                 {{-- <li class="nav-title">
                    مدیریت فایل ها
                 </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#"><i class="icon-docs"></i> لیست فایل ها</a>
                 </li>

                 <li class="nav-title">
                    گزارش گیری
                 </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#"><i class="icon-people"></i> کاربران</a>
                     <a class="nav-link" href="#"><i class="icon-docs"></i>  فایل ها</a>
                 </li> --}}
                 <!--<li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> ثبت کاربر جدید</a>
                     <ul class="nav-dropdown-items">
                         <li class="nav-item">
                             <a class="nav-link" href="components-buttons.html"><i class="icon-puzzle"></i> لیست کاربران</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="components-cards.html"><i class="icon-puzzle"></i> Cards</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="components-forms.html"><i class="icon-puzzle"></i> Forms</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="components-switches.html"><i class="icon-puzzle"></i> Switches</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="components-tables.html"><i class="icon-puzzle"></i> Tables</a>
                         </li>
                     </ul>
                 </li>-->

                 <!--<li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
                     <ul class="nav-dropdown-items">
                         <li class="nav-item">
                             <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="tag tag-info">NEW</span></a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
                 </li>-->
                 <!--<li class="divider"></li>
                 <li class="nav-title">
                     Extras
                 </li>
                 <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                     <ul class="nav-dropdown-items">
                         <li class="nav-item">
                             <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                         </li>
                     </ul>
                 </li>-->

             </ul>
         </nav>
     </div>
