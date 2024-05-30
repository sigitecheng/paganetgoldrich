<div id="menu" style="max-width: 350px; width: 100%; position: fixed; bottom: 20px; padding: 0.75rem; display: flex; align-items: center; justify-content: space-between; border-radius: 20px; background-image: linear-gradient(to bottom, #38b5df, #2c2cbe); left: 50%; transform: translateX(-50%);">

    <a href="/comingsoon" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style=" solf display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
  
    <a href="/comingsoon" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style="display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/css/fe_css/images/icons/menuandroid/applaporan.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>

    <a href="/comingsoon" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style="  display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/css/fe_css/images/icons/menuandroid/appplus.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>

    <a href="/comingsoon" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style="display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/css/fe_css/images/icons/menuandroid/appsettings.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
  
    
    @if(auth()->check()) 
    
    <form action="/logout" method="post" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        @csrf
        <button type="submit" class="btn-2" style="background: none; border: none; padding: 0; margin: 0;"><img src="/assets/css/fe_css/images/icons/menuandroid/menulogout.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;"></button>
    </form>
    
    
    @else
    <!-- Jika pengguna belum login -->
    <a href="/logins" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style=" display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/css/fe_css/images/icons/menuandroid/menulogin.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
    
    @endif

    
  
   
</div>
