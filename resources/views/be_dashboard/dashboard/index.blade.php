@include('be_dashboard.dashboard.part.header')
@include('be_dashboard.dashboard.part.menuheader')
@include('be_dashboard.dashboard.part.sidebar')
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">

                {{-- <h5 class="mb-3" style="font-size: 18px;"><strong>Dashboard {{$title_halamandata}} </strong></h5> --}}
                 
                <div class="row mb-0 pt-3">
                    <div class="font-bold col-sm-8 pt-2"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                            <button class="btn btn-theme btn-round" style="width:100%"><i class="fab fa-ravelry mr-2"></i>Halaman {{ $title_halamandata}}</button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                
           
                <!--Products summary-->
                <div class="mt-4 mb-4 bg-white border shadow lh-sm">
                    <!--Recent Sales-->
                    <div class="product-list">
                        
                        <div class="row mb-0 px-3 pt-3">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><i class="fab fa-ravelry mr-2"></i>Daftar Donasi Mitra</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                {{-- <div class="pull-right mr-3 btn-order-bulk">
                                    <button class="btn btn-theme btn-round">View all</button>
                                </div> --}}

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Rumah Makan</th>
                                        <th class="text-center">Donatur</th>
                                        <th class="text-center">Kontak</th>
                                        <th class="text-center">Kuota</th>
                                        <th class="text-center">Donasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($data_lokasimakangratis as $data)
                                    
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration}}</td>
                                        <td class="align-middle">{{ $data->daftarmitrarumahmakann->namarumahmakan}}</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+9</span>
                                                </div>
                                                </td>
                                                <td class="align-middle">
                                                    <button class="btn-outline-theme btn-round">
                                                        {{ $data->kontak}}
                                                        </button>
                                                        </td>
                                                <td class="align-middle">
                                                    <button class="btn-outline-success btn-round">
                                                        {{ $data->kuota}}
                                                        </button>
                                                        </td>
                                                    <td>Rp. 25.000.000,- </td>
                                                                </tr>
                                                              
                                                            @endforeach
                            </table>
                            </div>
                    </div>
                    <!--/Recent sales-->
                </div>
                <!--Product summary-->
     
                @include('be_dashboard.dashboard.part.menufooter')
              
            </div>
        </div>

        <!--Main Content-->

    </div>


    @include('be_dashboard.dashboard.part.footer')

    