<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class=" waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                            
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Super Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                {{-- <li><a href="{{route('add')}}">Add Banner </a></li> --}}
                                <li><a href="{{route('admin.add')}}">Admin Add</a></li>
                                <li><a href="{{route('admin.manage')}}">Admin Manage</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Banner</span></a>
                            <ul aria-expanded="false" class="collapse">
                                {{-- <li><a href="{{route('add')}}">Add Banner </a></li> --}}
                                <li><a href="{{route('manage')}}">Manage Banner</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Store</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('add.product')}}">Add Product</a></li>
                                <li><a href="{{route('manage.product')}}">Manage Product</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Mission</span></a>
                            <ul aria-expanded="false" class="collapse">
                                {{-- <li><a href="{{route('mission.add')}}">Add Mission</a></li> --}}
                                <li><a href="{{route('mission.manage')}}">Manage Mission</a></li>
                                
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Order Module</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.order')}}">Manage Order</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-credit-card"></i><span class="hide-menu">Currency</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('currency')}}">Manage</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-direction"></i><span class="hide-menu">Journey to IFMH</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('journey')}}">Add</a></li>
                                <li><a href="{{route('manage.journey')}}">Manage</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-world"></i><span class="hide-menu">Social Media</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('media.manage')}}">Manage</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-world"></i><span class="hide-menu">Subscribe Email</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('Subscribe.view')}}">view</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pencil-alt"></i><span class="hide-menu">Contact</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('contact.view')}}">View</a></li>
                            </ul>
                        </li>
                        {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">User Module</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Add User</a></li>
                                <li><a href="pages-blank.html">Manage User</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Coupon Module</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Add Coupon</a></li>
                                <li><a href="chart-chartist.html">Manage Coupon</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Setting Module</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Company Setting</a></li>
                                <li><a href="icon-fontawesome.html">Tax Setting</a></li>
                                <li><a href="icon-themify.html">Shipping Setting</a></li>
                    
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li> --}}
                    
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->