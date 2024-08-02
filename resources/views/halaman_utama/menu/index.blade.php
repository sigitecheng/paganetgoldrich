@include('fe_dashboard.menu.header')


            <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
                    
                    <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, black, white); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
            
            <nav class="pt-5 px-3 flex justify-between items-center">
             
             <a href="/404">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="/assets/menuicon/aboutusgr.png" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                        <p class="font-semibold text-sm">About Us</p>
                    </div>
                </div>
            </a>   
             
             {{-- <a href="/lokasimakangratis">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0 text-white">
                        <img src="/assets/css/fe_css/images/tentangkami/tempatmakangratis.png" alt="icon">
                    </div> --}}
                    {{-- <div class="flex flex-col text-white"> --}}
                        {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                        {{-- <p class="font-semibold text-sm">Lokasi Makan Gratis</p>
                    </div> --}}
                {{-- </div>
            </a>    --}}
             
             {{-- <a href="/daftarumkm">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="/assets/css/fe_css/images/tentangkami/listumkm.png" alt="icon">
                    </div>
                    <div class="flex flex-col text-white"> --}}
                        {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                        {{-- <p class="font-semibold text-sm">Daftar UMKM</p>
                    </div>
                </div>
            </a>   
              --}}
             
            </nav>

            <div class="mt-[30px] z-10">
                @if(auth()->check()) 
                            <!-- Jika pengguna sudah login -->
                            <h1 class="font-semibold leading-[36px] text-white text-center" style="font-size: 18px;">Selamat Datang ! <span class="font-bold" style="color:white"> {{ auth()->user()->name }}</span></h1>
                        @else
                            <!-- Jika pengguna belum login -->
                            <h2 class="font-semibold leading-[36px] text-white text-center" style="font-size: 18px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">fruits|seeds|nuts|herbs</h2>
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 22px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Goldrich Renergybar<br></h1>
                        @endif
             
                 @if(auth()->check()) 
                            <!-- Jika pengguna sudah login -->
                            <h1 class="font-semibold leading-[36px] text-white text-center" style="font-size: 18px;">Anda Adalah <span class="font-bold" style="color:white"> {{ auth()->user()->is_admin }}</span></h1>
                        @else
                            <!-- Jika pengguna belum login -->
                            {{-- <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px;">Program Makan Gratis<br></h1> --}}
                        @endif

            </div>
            <div style="
    display: flex; 
    justify-content: center; 
    align-items: center; 
    overflow: hidden; 
    margin: 0;
">
    <div style="
        width: 30%; 
        height: fit-content; 
        margin: 1rem;
    ">
        <img src="/assets/menuicon/LOGOGR.png" style="
            width: 100%; 
            height: 100%; 
            object-fit: contain;
        " alt="background">
    </div>
</div>


            {{-- <div class="container" style="display: flex; justify-content: center; margin-top: 10px; margin-left: 10px; margin-right: 10px;">
                <div class="scrollable-div" style="width: 100%; max-width: 100%; height: 300px; overflow-y: scroll; border: 1px solid #ccc; border-radius: 8px;">
                      
                    <div id="latest-fundrising">
                       <br>
                       <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 14px; padding-left: 10px; padding-right: 10px;">

 --}}
{{-- @foreach ($data_lokasimakangratis as $data) --}}
    

{{-- <a href="/paymentgateway/mitra/{{ $data->kota}}" class="card">
    <div style="` border: 1px solid #E8E9EE; display: flex; align-items: center; padding: 14px; gap: 0.75rem; border-radius: 1rem; background-color: #fff; margin-bottom:8px">
        <div style="width: 20%; height: 90px; flex-shrink: 0; border-radius: 1rem; overflow: hidden; margin-right: 1rem;">
            <img src="{{$data->daftarmitrarumahmakann->gambar}}" class="w-full h-full object-cover" alt="assets/images/programmakangratis/makangratiscileunyi.jpeg">
        </div> --}}
        
        {{-- <div class="flex flex-col gap-1">
            <p class="font-bold line-clamp-1 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis {{ $data->kota}}</p>
            <p class="font-bold line-clamp-1 hover:line-clamp-none" style="font-size: 14px; color:blue;">Rumah Makan : {{ $data->daftarmitrarumahmakann->namarumahmakan}}</p> --}}
            {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p> --}}
            {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end"> --}}
                {{-- <p class="font-semibold sm:font-medium text-xs leading-[18px] text-green-500 badge ">Donasi</p> --}}
                {{-- <div style="display: inline-block; text-align: center; background-color: silver; padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 0.25rem; padding-bottom: 0.25rem; border-radius: 9999px; color: #000000; font-weight: bold; transition: background-color 0.3s, color 0.3s; font-size: 0.75rem;" class="badge">
                    Donasi
                </div>
            </div>
        </div>
    </div> --}}
{{-- </a>

@endforeach --}}
                            
                            
                            
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        
<a href="/404">

    <div style="margin-top: 0.5rem; margin-bottom: 0.5rem;">
        <div style="text-align: center;">
            <button style="padding: 8px 12px; border-radius: 9999px; background-color: silver; font-weight: bold; font-size: 0.875rem; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s; border: none;">
                Our Product
            </button>
        </div>
                
    </div>

</div>
</a>


        {{-- ========================================= --}}

        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-sm">Goldrich Renergybar<br></h2>
                <a href="/404" style="padding: 6px 12px; border-radius: 9999px; background-color: #E8E9EE; font-weight: bold; font-size:12px; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s;" class="rounded-full bg-[#E8E9EE] font-semibold text-sm">
                    <i class="fas fa-file" style="margin-right: 5px;"></i> Product Catalog List
                  </a>
                  
                  
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
            </div>
            
            <div class="main-carousel" style="margin-top: 14px; display: flex; flex-direction: row; overflow-x: auto;">
            
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/404">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/menuutama/3.png" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg">
                            </div>
                            {{-- <div class="flex flex-col gap-[6px]">
                                <a  class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div> --}}
                            {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                        </a>
                    </div>
                </div>
            
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/404">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/menuutama/4.png" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg">
                            </div>
                            {{-- <div class="flex flex-col gap-[6px]">
                                <a  class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div> --}}
                            {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                        </a>
                    </div>
                </div>
            
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/404">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/menuutama/5.png" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg">
                            </div>
                            {{-- <div class="flex flex-col gap-[6px]">
                                <a  class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div> --}}
                            {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                        </a>
                    </div>
                </div>
            
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/404">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/menuutama/6.png" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg">
                            </div>
                            {{-- <div class="flex flex-col gap-[6px]">
                                <a  class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div> --}}
                            {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                        </a>
                    </div>
                </div>
            
              
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/404">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/menuutama/7.png" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg">
                            </div>
                            {{-- <div class="flex flex-col gap-[6px]">
                                <a  class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div> --}}
                            {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                        </a>
                    </div>
                </div>
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/404">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/menuutama/8.png" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg">
                            </div>
                            {{-- <div class="flex flex-col gap-[6px]">
                                <a  class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div> --}}
                            {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                        </a>
                    </div>
                </div>
            
              
              
            
                <!-- Konten carousel selanjutnya disini -->
            </div>
            

            
        </div>

        {{-- ======================================================================================== --}}
<br><br>        
        {{-- ===================================================================================================== --}}

        <div class="px-4 flex justify-between items-center mb-4">
            <h2 class="font-bold text-sm">More Informations<br>Goldrich Renergybar</h2>
            <a href="/lokasipengajuan" style="padding: 6px 12px; border-radius: 9999px; background-color: #E8E9EE; font-weight: bold; font-size:12px; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s;" class="rounded-full bg-[#E8E9EE] font-semibold text-sm">
               <i class="fas fa-file" style="margin-right: 5px;"></i> Our Menus
              </a>
            
              
            {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
        </div>
        <br>
                <div id="popular-fundrising" class="mt-4" style="display: flex; overflow-x: auto;">
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/404" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/createmenu/createmenu.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Create Your Own Menu</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/404" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/createmenu/fruits.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Fruits</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/404" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/createmenu/nuts.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Seeds</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/404" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/createmenu/seeds.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Herbs</span>
                        </a>
                    </div>
                    
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/404" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/createmenu/herbs.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Nuts</span>
                        </a>
                    </div>
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                </div>

                
                {{-- =============================================================================== --}}
        
                {{-- <div id="popular-fundrising" class="mt-8">
                    <div class="px-4 popular-link" style="display: flex; justify-content: center; align-items: center;">
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/kontributors.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Kontributors
                      </a>
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/distribusi.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                         Distribusi
                      </a>
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Awwards
                      </a>
                    </div>
                    <div class="px-4 popular-link mt-4" style="display: flex; justify-content: center; align-items: center;">
                      <a href="/tentangkami" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Tentang Kami
                      </a>
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Kontak Kami
                      </a>
                    </div>
                  </div>
                  
         --}}
                  @include('fe_dashboard.menu.android')
                  
                </div>
            </div>
            @include('fe_dashboard.menu.menufooter')
            {{-- @include('fe_dashboard.menu.android') --}}
        

    </section>
    
    @include('fe_dashboard.menu.footer')
