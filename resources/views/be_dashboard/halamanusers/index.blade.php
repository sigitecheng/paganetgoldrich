@include('be_dashboard.dashboard.part.header')
@include('be_dashboard.dashboard.part.menuheader')
@include('be_dashboard.dashboard.part.sidebar')

    
    <!--Page Wrapper-->

    {{-- <div class="container-fluid"> --}}

        

        
            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Tables</strong></h5>
                <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i> Basic tables</span>


                  <!--Products summary-->
                <div class="mt-4 mb-4 bg-white border shadow lh-sm">
                    <!--Recent Sales-->
                    <div class="product-list">
                        
                        <div class="row mb-0 px-3 pt-3">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Recent Sales</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <div class="pull-right mr-3 btn-order-bulk">
                                    <button class="btn btn-theme btn-round">View all</button>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Customer</th>
                                        <th>Categories</th>
                                        <th>Popularity</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">IphoneX</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+8</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="85" style="width: 85%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 4,500</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">One Plus</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img2.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" style="width: 55%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 650</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Samsumg S7</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img2.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+5</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Techno</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Sony Xperia</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/profile.jpg')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" style="width: 60%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 3,500</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">HTC</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/profile.jpg')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+18</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <!--/Recent sales-->
                </div>
                <!--Product summary-->

                
                
                
                <!--Footer-->
             
                @include('be_dashboard.dashboard.part.menufooter')
                <!--Footer-->
                
                </div>
        </div>

        <!--Main Content-->
        
        </div>
        
        @include('be_dashboard.dashboard.part.footer')
    