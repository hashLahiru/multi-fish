<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg" />
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="m-t-xs block font-bold">David Williams</span>
                            <span class="text-muted block text-xs">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li>
                                <a class="dropdown-item" href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="mailbox.html">Mailbox</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">IN+</div>
                </li>
                <li class="{{ Request::is('messages') ? 'active' : '' }}">
                    <a href="/messages"><i class="fa fa-envelope"></i>
                        <span class="nav-label">Mailbox</span></a>
                </li>
                <li class="{{ Request::is('product-list') ? 'active' : '' }}">
                    <a href="/product-list"><i class="fa fa-shopping-cart"></i>
                        <span class="nav-label">Products</span></a>
                </li>
                <li class="{{ Request::is('categories') ? 'active' : '' }}">
                    <a href="/categories"><i class="fa fa-object-group"></i>
                        <span class="nav-label">Category</span></a>
                </li>
                <li class="{{ Request::is('blogsAdmin') ? 'active' : '' }}">
                    <a href="/blogsAdmin"><i class="fa fa-rss"></i>
                        <span class="nav-label">Blog</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i
                            class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control"
                                name="top-search" id="top-search" />
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li style="padding: 20px">
                        <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages dropdown-menu-right">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a7.jpg" />
                                    </a>
                                    <div class="media-body">
                                        <small class="float-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following
                                        <strong>Monica Smith</strong>. <br />
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a4.jpg" />
                                    </a>
                                    <div class="media-body">
                                        <small class="text-navy float-right">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started
                                        following <strong>Monica Smith</strong>. <br />
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/profile.jpg" />
                                    </a>
                                    <div class="media-body">
                                        <small class="float-right">23h ago</small>
                                        <strong>Monica Smith</strong> love
                                        <strong>Kim Smith</strong>. <br />
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="link-block text-center">
                                    <a href="mailbox.html" class="dropdown-item">
                                        <i class="fa fa-envelope"></i>
                                        <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>
                            <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16
                                        messages
                                        <span class="text-muted small float-right">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="profile.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="text-muted small float-right">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="grid_options.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="text-muted small float-right">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="link-block text-center">
                                    <a href="notifications.html" class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <form action="{{ route('login') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
