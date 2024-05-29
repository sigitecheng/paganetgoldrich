@include('fe_dashboard.menu.header')


<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">


{{-- <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden">
        <div class="header flex flex-col overflow-hidden h-[220px] relative"> --}}
            
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="w-10 h-10 flex shrink-0">
                    <a href="javascript:history.back()">
                        <img src="/assets/css/fe_css/images/icons/menuandroid/homehaiu.png" alt="icon">
                    </a>
                        {{-- <p class="font-semibold text-sm" >HaiuCare Bangun Indonesia</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    {{-- <p class="text-xs leading-[18px] text-white" style="font-size: 14px;">Mitra UMKM</p> --}}
                    <p class="font-semibold text-sm text-white">#makangratis</p>
                </div>

            </nav>
            
               <div class="mt-[0px] z-10">
                   {{-- <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:18px">HaiuCare Bangun Indonesia<br></h1> --}}
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Donasi Makan Gratis Lokasi Cileunyi</h4>
               </div>
               
               <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="/assets/css/fe_css/images/tentangkami/lokasimakangratis.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>

        </div>
        <div class="flex flex-col z-30">
            <div id="content" class="w-full min-h-[calc(100vh-220px)] h-full bg-white rounded-t-[40px] flex flex-col gap-[30px] p-[30px_24px_30px]">
                {{-- <h1 class="text-center font-extrabold text-[24px] leading-[36px]">Pilih Donasi Kamu</h1> --}}
                <div class="flex flex-col gap-4 px-4">
                    
                    <div class="card">
                        <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, rgb(34, 182, 231), rgb(28, 50, 219)); margin-top:5px;">
                            
                            <div class="badge" style="display: inline-block; border-radius: 4px; overflow: hidden; width: 100%; text-align: center;">
                                {{-- <a href="#" class="button" style="width:100%; display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; font-weight: bold; border-radius: 4px; transition: background-color 0.3s ease;">Donasi Sepuasnya</a> --}}
                                <a style="width: 100%" href="checkout.html" class="flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                                    <div class="w-[100%] h-10 flex shrink-0 overflow-hidden" >
                                        <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                                    </div>
                                    <p class="font-bold" style="font-size: 18px; color: white">Donasi Sepuasnya</p>
                                    {{-- <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 10.000</span> --}}
                                <input style="text-align: center;" type="text" placeholder="Click Here" class="rounded-full">
                                </a>
                            </div>
                            
                            </div>
                        </div>
                </div>
                
                <div class="grid grid-cols-2 w-fit mx-auto justify-center gap-[30px]">
                    
                    <a href="https://app.midtrans.com/payment-links/1716977819671" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 10.000</span>
                    </a>
                    
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 20.000</span>
                    </a>
                    
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 30.000</span>
                    </a>
                    
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 40.000</span>
                    </a>
                    
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 50.000</span>
                    </a>
                    
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 60.000</span>
                    </a>
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 70.000</span>
                    </a>
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 80.000</span>
                    </a>
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 90.000</span>
                    </a>
                    <a href="checkout.html" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 100.000</span>
                    </a>
                    
                </div>
            </div>
            @include('fe_dashboard.menu.menufooter')
    
            {{-- @include('fe_dashboard.menu.enter') --}}
    
    
            @include('fe_dashboard.menu.android')
        </div>


        
    </section>

    @include('fe_dashboard.menu.footer')