 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu">
     <div class="h-100" data-simplebar>
         <div id="sidebar-menu">
             <ul id="side-menu">
                 <li class="menu-title">Navigation</li>
                 <li>
                     <a href="#">
                         <i class="mdi mdi-view-dashboard-outline"></i>
                         <span> Dashboard </span>
                     </a>
                 </li>
                 {{-- <li class="menu-title mt-2">Apps</li>
                 <li>
                     <a href="#order" data-bs-toggle="collapse">
                         <i class="mdi mdi-truck-delivery"></i>
                         <span> Orders </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="order">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Order List</a>
                             </li>

                         </ul>
                     </div>
                 </li>

                 <li>
                     <a href="#profit" data-bs-toggle="collapse">
                         <i class="mdi mdi-chart-line"></i>
                         <span> Profits </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="profit">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Profits</a>
                             </li>

                         </ul>
                     </div>
                 </li>




                 <li>
                     <a href="#blogpost" data-bs-toggle="collapse">
                         <i class="mdi mdi-post"></i>
                         <span> Blog Post </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="blogpost">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Create</a>
                             </li>
                             <li>
                                 <a href="#"> Show All </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <li>
                    <a href="#bestoffer" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Best Offer </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="bestoffer">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#"> Create</a>
                            </li>
                            <li>
                                <a href="#"> Show All </a>
                            </li>
                        </ul>
                    </div>
                </li>

                 <li>
                     <a href="#contact" data-bs-toggle="collapse">
                         <i class="mdi mdi-table"></i>
                         <span> Contact </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="contact">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Show All </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li>
                     <a href="#coupon" data-bs-toggle="collapse">
                         <i class="mdi mdi-table"></i>
                         <span> Coupon </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="coupon">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Create</a>
                             </li>
                             <li>
                                 <a href="#"> Show All </a>
                             </li>
                         </ul>
                     </div>
                 </li>
 --}}


                 <li>
                     <a href="#category" data-bs-toggle="collapse">
                         <i class="mdi mdi-table"></i>
                         <span> Category </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="category">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="{{ route('categories.index') }}"> CActegory</a>
                             </li>
                             {{-- <li>
                                 <a href="#"> Show All </a>
                             </li> --}}
                         </ul>
                     </div>
                 </li>

                 {{-- <li>
                     <a href="#subcategory" data-bs-toggle="collapse">
                         <i class="mdi mdi-table"></i>
                         <span> SubCategory </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="subcategory">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Create</a>
                             </li>
                             <li>
                                 <a href="#"> Show All </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <li>
                     <a href="#subsubcategory" data-bs-toggle="collapse">
                         <i class="mdi mdi-table"></i>
                         <span> SubSubCategory </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="subsubcategory">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Create</a>
                             </li>
                             <li>
                                 <a href="#"> Show All </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <li>
                     <a href="#brand" data-bs-toggle="collapse">
                         <i class="mdi mdi-tag"></i>
                         <span> Brand </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="brand">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#"> Create</a>
                             </li>
                             <li>
                                 <a href="#"> Show All </a>
                             </li>
                         </ul>
                     </div>
                 </li> --}}


                 <li>
                     <a href="#product" data-bs-toggle="collapse">
                         <i class="mdi mdi-cube"></i>
                         <span> Product </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="product">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#">All Products</a>
                             </li>
                             <li>
                                 <a href="{{ route('products.create')}}">Add Products</a>
                             </li>
                         </ul>
                     </div>
                 </li>

{{-- 
                 <li>
                     <a href="#division" data-bs-toggle="collapse">
                         <i class="mdi mdi-account-group"></i>
                         <span> Division </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="division">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#">All Division</a>
                             </li>
                             <li>
                                 <a href="#">Add Division</a>
                             </li>
                         </ul>
                     </div>
                 </li>



                 <li>
                     <a href="#district" data-bs-toggle="collapse">
                         <i class="mdi mdi-city"></i>
                         <span> District </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="district">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#">All District</a>
                             </li>
                             <li>
                                 <a href="#">Add District</a>
                             </li>
                         </ul>
                     </div>
                 </li>



                 <li>
                     <a href="#subdistrict" data-bs-toggle="collapse">
                         <i class="mdi mdi-map-marker-radius"></i>

                         <span>Sub District </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="subdistrict">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#">All Sub Districts</a>
                             </li>
                             <li>
                                 <a href="#">Add Sub District</a>
                             </li>
                         </ul>
                     </div>
                 </li>




                 <li>
                     <a href="#stock" data-bs-toggle="collapse">
                         <i class="mdi mdi-cube-outline"></i>
                         <span>Stock </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="stock">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#">Stock List</a>
                             </li>
                             <li>
                                 <a href="#">Add Stock</a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <li>
                     <a href="#vendor" data-bs-toggle="collapse">
                         <i class="mdi mdi-email-outline"></i>
                         <span>Vendor</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="vendor">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="#">All Vendors</a>
                             </li>
                             <li>
                                 <a href="#">Request</a>
                             </li>
                         </ul>
                     </div>
                 </li>


                 <li>
                     <a href="#">
                         <i class="mdi mdi-clipboard-list"></i>
                         <span> Subscriptions </span>
                     </a>
                 </li>
 --}}


             </ul>

         </div>
         <!-- End Sidebar -->

         <div class="clearfix"></div>

     </div>
     <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->
