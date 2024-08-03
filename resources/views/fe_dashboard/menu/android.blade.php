<div id="menu" style="border: 0.1rem solid; max-width: 350px; width: 100%; position: fixed; bottom: 20px; padding: 0.75rem; display: flex; align-items: center; justify-content: space-between; border-radius: 20px; background-image: linear-gradient(to bottom, #fafcfd, #fcfcfc); left: 50%; transform: translateX(-50%);">
        
{{--     
    @if(auth()->check()) 
        <a href="/admindashboard" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
            <div style=" solf display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
                <img src="/assets/css/fe_css/images/tentangkami/androiddashboardadmin.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </a>
    
     @else

        @endif --}}
        
        @if(auth()->check() && auth()->user()->is_admin === 'super_admin') 
    <a href="/admindashboard" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style="display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/android/dashboard.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
@else
    <!-- Tindakan yang ingin Anda lakukan jika pengguna bukan super_admin, misalnya: -->

@endif

  
    <a href="/" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style=" solf display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/android/home.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
  
    <a href="/" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style=" solf display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/android/pesanan.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
    
    <a href="/" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style=" solf display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/android/book.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>

    <a href="/" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style=" solf display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/android/profil.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
    
  
    
    @if(auth()->check()) 
    
    <form action="/logout" method="post" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        @csrf
        <button type="submit" class="btn-2" style="background: none; border: none; padding: 0; margin: 0;"><img src="/assets/android/logout.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;"></button>
    </form>
    
    
    @else
    <!-- Jika pengguna belum login -->
    <a href="/404" class="flex items-center justify-center w-[50px] h-[50px] p-[13px_15px]">
        <div style=" display: flex; align-items: center; justify-content: center; overflow: hidden; font-size:100px">
            <img src="/assets/android/login.png" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </a>
    
    @endif

    
  
   
</div>
