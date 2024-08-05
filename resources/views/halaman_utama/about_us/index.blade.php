@include('fe_dashboard.menu.header')
<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, black, white);  border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
             
            
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="w-10 h-10 flex shrink-0">
                    <a href="javascript:history.back()">
                        <img src="/assets/menuicon/logogr.png" alt="icon">
                    </a>
                        {{-- <p class="font-semibold text-sm" >HaiuCare Bangun Indonesia</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    {{-- <p class="text-xs leading-[18px] text-white" style="font-size: 14px;">Mitra UMKM</p> --}}
                    <p class="font-semibold text-sm text-white">#goldrich</p>
                </div>

            </nav>

               <div class="mt-[0px] z-10">
                   {{-- <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:20px">HaiuCare Bangun Indonesia<br></h1> --}}
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 18px">Goldrich Renergybar</h4>
                   {{-- <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Tentang Kami</h4> --}}
               </div>
               
               <div style="width: 45%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto; text-align:center;">
                   <img src="/assets/menuutama/menuutama.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>




        <div class="flex flex-col gap-4 px-4">

                
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, white, black);  margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/menuicon/LOGOGR.png" class="w-full h-full object-cover" alt="thumbnail" style="margin-left:10px; width:80px; height:80px; margin-top:20px;">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5" style="margin-top:30px; text-align:justify; margin-bottom:10px;"><span style="color:brown;">Goldrich Renergybar </span> adalah protein bar superfood yang dirancang untuk memberikan energi maksimal dengan manfaat kesehatan yang luar biasa. Menggabungkan bahan-bahan bergizi dari biji-bijian, kacang, dan buah kering, produk ini menawarkan campuran ideal dari protein, serat, dan antioksidan. Dengan kandungan nutrisi yang padat dan kemasan yang praktis, Goldrich Renergybar adalah solusi sempurna untuk mendukung aktivitas fisik dan gaya hidup sehat Anda. </p>
                    </div>
                </div>
            </a>
            
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, white, black);  margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/menuutama/4.png" class="w-full h-full object-cover" alt="thumbnail" style="border-radius:15px; margin-left:10px; width:80px; height:80px; margin-top:20px;">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5" style="margin-top:30px; text-align:justify; margin-bottom:10px;"><span style="color:brown;">Granula Bar</span> adalah camilan praktis yang menggabungkan bahan-bahan bergizi dalam satu paket. Umumnya terbuat dari campuran biji-bijian, kacang-kacangan, dan buah kering yang dipadatkan dengan madu atau sirup sebagai pengikat, granula bar menjadi pilihan populer untuk mengisi waktu lapar dengan cara yang sehat. Camilan ini menawarkan berbagai manfaat kesehatan berkat kandungan serat, protein, dan vitamin yang tinggi, serta rendah kalori jika dibandingkan dengan snack olahan lainnya. Selain itu, granula bar juga mudah dibawa dan disimpan, menjadikannya solusi ideal untuk gaya hidup yang sibuk namun tetap ingin menjaga pola makan yang seimbang</p>
                    </div>
                </div>
            </a>
            
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, white, black);  margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/menuutama/5.png" class="w-full h-full object-cover" alt="thumbnail" style="border-radius:15px; margin-left:10px; width:80px; height:80px; margin-top:20px;">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5" style="margin-top:30px; text-align:justify; margin-bottom:10px;"><span style="color:brown;">Protein Bar</span> 
                            adalah camilan yang dirancang khusus untuk meningkatkan asupan protein dalam diet sehari-hari, ideal bagi mereka yang aktif atau yang membutuhkan tambahan protein untuk mendukung pemulihan otot dan kesehatan umum. Biasanya terbuat dari campuran protein whey, kasein, atau sumber protein nabati seperti kedelai dan pea, protein bar juga sering diperkaya dengan vitamin, mineral, dan serat. Meskipun bervariasi dalam rasa dan kandungan nutrisi, protein bar umumnya dirancang untuk memberikan energi yang tahan lama serta membantu menstabilkan kadar gula darah. Dengan kemasan yang praktis dan portabel, protein bar adalah pilihan populer sebagai camilan pasca-latihan atau sebagai alternatif makan siang cepat bagi mereka yang memiliki jadwal padat.
                        </div>
                </div>
            </a>
            
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, white, black);  margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/menuutama/6.png" class="w-full h-full object-cover" alt="thumbnail" style="border-radius:15px; margin-left:10px; width:80px; height:80px; margin-top:20px;">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5" style="margin-top:30px; text-align:justify; margin-bottom:10px;"><span style="color:brown;">Energy Bar</span> 
                            adalah camilan yang dirancang untuk memberikan dorongan energi cepat dan bertahan lama, terutama saat dibutuhkan dalam aktivitas fisik atau saat menghadapi jadwal padat. Biasanya terbuat dari campuran bahan-bahan seperti oat, biji-bijian, kacang, buah kering, dan pemanis alami seperti madu atau sirup, energy bar mengandung karbohidrat, protein, dan lemak sehat yang seimbang untuk mendukung performa dan ketahanan tubuh. Beberapa energy bar juga diperkaya dengan vitamin dan mineral tambahan untuk meningkatkan manfaat kesehatan. Dengan kemasan yang praktis dan mudah dibawa, energy bar menjadi pilihan populer untuk para atlet, pelancong, dan siapa saja yang memerlukan sumber energi instan tanpa harus menyiapkan makanan rumit.
                        </div>
                </div>
            </a>
            
            
            

        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')