
@include('fe_dashboard.menu.header')


<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
                    <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
            
            <nav class="pt-5 px-3 flex justify-between items-center">
             
             <a href="/halo">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="assets/css/fe_css/images/icons/loc.svg" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                        <p class="font-semibold text-sm">Tentang Kami</p>
                    </div>
                </div>
            </a>   
             
             <a href="/halo">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="assets/css/fe_css/images/icons/loc.svg" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                        <p class="font-semibold text-sm">Lokasi Makan Gratis</p>
                    </div>
                </div>
            </a>   
             
             <a href="/halo">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="assets/css/fe_css/images/icons/loc.svg" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                        <p class="font-semibold text-sm">Daftar UMKM</p>
                    </div>
                </div>
            </a>   
             
             
             
            </nav>

            <div class="mt-[30px] z-10">
                <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center">HaiuCare Bangun Indonesia<br></h1>
                <h4 class="font-extrabold text-xl leading-[36px] text-white text-center">Program Makan Gratis</h4>
            </div>
            
            <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 1rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                <img src="assets/css/fe_css/images/backgrounds/programmakangratis.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
            </div>

            <div class="container" style="display: flex; justify-content: center; margin-top: 10px; margin-left: 10px; margin-right: 10px;">
                <div class="scrollable-div" style="width: 100%; max-width: 100%; height: 300px; overflow-y: scroll; border: 1px solid #ccc; border-radius: 8px;">
                      
                    <div id="latest-fundrising">
                       <br>
                       <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 14px; padding-left: 10px; padding-right: 10px;">

                            <a href="details.html" class="card">
                                <div style="` border: 1px solid #E8E9EE; display: flex; align-items: center; padding: 14px; gap: 0.75rem; border-radius: 1rem; background-color: #fff;">
                                    <div style="width: 20%; height: 90px; flex-shrink: 0; border-radius: 1rem; overflow: hidden; margin-right: 1rem;">
                                        <img src="https://picsum.photos/200/300/?fish" class="w-full h-full object-cover" alt="thumbnail">
                                    </div>
                                    
                                    <div class="flex flex-col gap-1">
                                        <p class="font-bold line-clamp-1 hover:line-clamp-none">Makan Gratis Cileunyi, Bandung</p>
                                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                                            {{-- <p class="font-semibold sm:font-medium text-xs leading-[18px] text-green-500 badge ">Donasi</p> --}}
                                            <div style="display: inline-block; text-align: center; background-color: silver; padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 0.25rem; padding-bottom: 0.25rem; border-radius: 9999px; color: #000000; font-weight: bold; transition: background-color 0.3s, color 0.3s; font-size: 0.75rem;" class="badge">
                                                Donasi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                            
                            <a href="details.html" class="card">
                                <div style="` border: 1px solid #E8E9EE; display: flex; align-items: center; padding: 14px; gap: 0.75rem; border-radius: 1rem; background-color: #fff;">
                                    <div style="width: 20%; height: 90px; flex-shrink: 0; border-radius: 1rem; overflow: hidden; margin-right: 1rem;">
                                        <img src="https://picsum.photos/200/300/?bandng" class="w-full h-full object-cover" alt="thumbnail">
                                    </div>
                                    
                                    <div class="flex flex-col gap-1">
                                        <p class="font-bold line-clamp-1 hover:line-clamp-none">Makan Gratis Kopo, Bandung</p>
                                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                                            {{-- <p class="font-semibold sm:font-medium text-xs leading-[18px] text-green-500 badge ">Donasi</p> --}}
                                            <div style="display: inline-block; text-align: center; background-color: silver; padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 0.25rem; padding-bottom: 0.25rem; border-radius: 9999px; color: #000000; font-weight: bold; transition: background-color 0.3s, color 0.3s; font-size: 0.75rem;" class="badge">
                                                Donasi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                            
                            <a href="details.html" class="card">
                                <div style="` border: 1px solid #E8E9EE; display: flex; align-items: center; padding: 14px; gap: 0.75rem; border-radius: 1rem; background-color: #fff;">
                                    <div style="width: 20%; height: 90px; flex-shrink: 0; border-radius: 1rem; overflow: hidden; margin-right: 1rem;">
                                        <img src="https://picsum.photos/200/300/?jakarta" class="w-full h-full object-cover" alt="thumbnail">
                                    </div>
                                    
                                    <div class="flex flex-col gap-1">
                                        <p class="font-bold line-clamp-1 hover:line-clamp-none">Makan Gratis Lembang, Kab Bandung</p>
                                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                                            {{-- <p class="font-semibold sm:font-medium text-xs leading-[18px] text-green-500 badge ">Donasi</p> --}}
                                            <div style="display: inline-block; text-align: center; background-color: silver; padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 0.25rem; padding-bottom: 0.25rem; border-radius: 9999px; color: #000000; font-weight: bold; transition: background-color 0.3s, color 0.3s; font-size: 0.75rem;" class="badge">
                                                Donasi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="details.html" class="card">
                                <div style="` border: 1px solid #E8E9EE; display: flex; align-items: center; padding: 14px; gap: 0.75rem; border-radius: 1rem; background-color: #fff;">
                                    <div style="width: 20%; height: 90px; flex-shrink: 0; border-radius: 1rem; overflow: hidden; margin-right: 1rem;">
                                        <img src="https://picsum.photos/200/300/?surabaya" class="w-full h-full object-cover" alt="thumbnail">
                                    </div>
                                    
                                    <div class="flex flex-col gap-1">
                                        <p class="font-bold line-clamp-1 hover:line-clamp-none">Makan Gratis Stasiun Bandung, Bandung</p>
                                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                                            {{-- <p class="font-semibold sm:font-medium text-xs leading-[18px] text-green-500 badge ">Donasi</p> --}}
                                            <div style="display: inline-block; text-align: center; background-color: silver; padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 0.25rem; padding-bottom: 0.25rem; border-radius: 9999px; color: #000000; font-weight: bold; transition: background-color 0.3s, color 0.3s; font-size: 0.75rem;" class="badge">
                                                Donasi
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                            
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 0.5rem; margin-bottom: 0.5rem;">
                <div style="text-align: center;">
                    <button style="padding: 8px 12px; border-radius: 9999px; background-color: silver; font-weight: bold; font-size: 0.875rem; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s; border: none;">
                        Donasi
                    </button>
                </div>
                
              </div>
              
        </div>


        {{-- ========================================= --}}

        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-sm">HaiuCare Indonesia <br>Penggalangan Dana Untuk Sesama</h2>
                <a href="" style="padding: 6px 12px; border-radius: 9999px; background-color: #E8E9EE; font-weight: bold; font-size: 0.875rem; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s;" class="rounded-full bg-[#E8E9EE] font-semibold text-sm">
                    Daftar Mitra
                  </a>
                  
                  
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
            </div>
            
            <div class="main-carousel" style="margin-top: 14px; display: flex; flex-direction: row; overflow-x: auto;">
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="https://picsum.photos/200/300/?kopo" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                        </a>
                    </div>
                </div>
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="https://picsum.photos/200/300/?gratis" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Makan Gratis Kopo, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                        </a>
                    </div>
                </div>
             
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="https://picsum.photos/200/300/?lembang" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Makan Gratis Lembang, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="https://picsum.photos/200/300/?bandung" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Makan Gratis Stasiun Bandung, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
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
            <h2 class="font-bold text-sm">Program <br>Makan Gratis</h2>
            <a href="" style="padding: 6px 12px; border-radius: 9999px; background-color: #E8E9EE; font-weight: bold; font-size: 0.875rem; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s;" class="rounded-full bg-[#E8E9EE] font-semibold text-sm">
                Ajukan Lokasi
              </a>
            
              
            {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
        </div>
        <br>
                <div id="popular-fundrising" class="mt-4" style="display: flex; overflow-x: auto;">
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/icons/icon natural disasters.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center;">Distribusi Makan Gratis</span>
                        </a>
                    </div>
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/icons/icon natural disasters.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center;">Mitra UMKM</span>
                        </a>
                    </div>
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/icons/icon natural disasters.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center;">Laporan Distribusi </span>
                        </a>
                    </div>
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/icons/icon natural disasters.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center;">Daftar Menu Makanan</span>
                        </a>
                    </div>
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                </div>

                
                {{-- =============================================================================== --}}
        
                <div id="popular-fundrising" class="mt-8">
                    <div class="px-4 popular-link" style="display: flex; justify-content: center; align-items: center;">
                      <a href="" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s;">
                        <img src="assets/css/fe_css/images/icons/kontributors.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Kontributors
                      </a>
                      <a href="" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s;">
                        <img src="assets/css/fe_css/images/icons/distribusi.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                         Distribusi
                      </a>
                      <a href="" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s;">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Awwards
                      </a>
                    </div>
                    <div class="px-4 popular-link mt-4" style="display: flex; justify-content: center; align-items: center;">
                      <a href="/tentangkami" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s;">
                        <img src="assets/css/fe_css/images/icons/distribusi.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Tentang Kami
                      </a>
                      <a href="" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s;">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Kontak Kami
                      </a>
                    </div>
                  </div>
                  
        
                  {{-- @include('fe_dashboard.menu.android') --}}
                  
                </div>
            </div>
            @include('fe_dashboard.menu.menufooter')
            {{-- @include('fe_dashboard.menu.android') --}}
        

    </section>
    
    @include('fe_dashboard.menu.footer')