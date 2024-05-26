@include('fe_dashboard.menu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-slate-100 overflow-x-hidden pb-4">
        <div class="header flex flex-col bg-[#5856c5] rounded-b-[50px] overflow-hidden h-[320px] bg-gradient-to-b from-[#5bc7eb] to-[#0b4fb6] -mb-[181px]" style="background-image: linear-gradient(to bottom, #2fb7da, #1539b1);">
            <nav class="pt-5 px-3 flex justify-between items-center">
                <a href="/">
                    <div class="flex items-center gap-[10px]">
                        <div class="w-10 h-10 flex shrink-0">
                           <img src="assets/css/fe_css/images/icons/menuandroid/menuback.png" alt="icon">
                       </div>
                       <div class="flex flex-col text-white">
                           {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                           <p class="font-semibold text-sm">HaiuCare Bangun Indonesia</p>
                       </div>
                   </div>
               </a>   
                
                
               </nav>
   
               <div class="mt-[30px] z-10">
                   <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:18px">Daftar Mitra UMKM<br></h1>
                   {{-- <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Tentang Kami</h4> --}}
               </div>
               
               <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="assets/css/fe_css/images/tentangkami/tentangkami.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>
        <div class="flex flex-col gap-4 px-4">

            @foreach ($data_daftarmitrarumahmakan as $data)
                
            <a href="" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, rgb(148, 225, 250), rgb(190, 192, 206)); margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                        <img src="https://picsum.photos/200/300/?{{ $data->gambar}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        {{-- <p class="font-bold text-blue-800 border-spacing-2" style="font-size: 14px; color : blue; ">{{ $data->kota }}, Kota Bandung, Jawa Barat</p> --}}
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Nama Pemilik : <span style="font-size: 14px; color: red ">{{ $data->nama_pemilik}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Rumah Makan : <span style="font-size: 14px; color: blueviolet;">{{ $data->namarumahmakan}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Telepon : <span style="font-size: 14px; color:black ;">{{ $data->telepon}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Email : <span style="font-size: 14px; color:green">{{ $data->email}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Alamat Rumah Makan : <span style="font-size: 14px; color:black">{{ $data->alamat_rumahmakan}}</span></p> 
                        {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Deskripsi : <span class="font-bold text-stone-800">{{ $data->deskripsi}}</span></p>  --}}
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Kuota : <span style="font-size: 14px; color: blue; border: black">{{ $data->kuotamakan}} </span><span style="font-size: 14px">Porsi</span></p> 
                        {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Rumah Makan : <span class="bg-blue-200 px-3 badge-pill rounded-full font-bold text-stone-800">{{ $data->nama_rumah_makan}}</span></p>  --}}
                         
                    </div>
                </div>
            </a>

           
            @endforeach
            
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')
        @include('fe_dashboard.menu.enter')

        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')