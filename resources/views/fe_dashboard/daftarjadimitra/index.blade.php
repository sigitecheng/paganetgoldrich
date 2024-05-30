@include('fe_dashboard.menu.header')

{{-- <body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header"> --}}

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-slate-100 overflow-x-hidden pb-4">
        <div class="header flex flex-col bg-[#5856c5] rounded-b-[50px] overflow-hidden h-[320px] bg-gradient-to-b from-[#3e5c9c] to-[#0b4fb6] -mb-[181px]" style="background-image: linear-gradient(to bottom, #2fb7da, #1539b1);">
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
                   <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:18px">HaiuCare Bangun Indonesia<br></h1>
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 16px">Form Pendaftaran UMKM</h4>
               </div>

               
               
               
               {{-- <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="/assets/css/fe_css/images/tentangkami/daftarumkm.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div> --}}
   
   
        </div>
        <div class="flex flex-col justify-content-center align-items-center gap-2 px-2" style="text-align: center;">
            <div class="w-full flex p-[14px] gap-3 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, rgb(141, 214, 238), rgb(172, 188, 209)); margin-top:5px;">
                <form method="post" action="/daftarjadimitra/create" enctype="multipart/form-data" class="w-full">
                    @csrf

{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 15px;">
    <label class="font-semibold flex items-center" for="nama_rumahmakan" style="text-align: center">
        <i class="fas fa-utensils mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Nama Rumah Makan</span>
    </label>
    <input style="padding: 5px 10px; margin-bottom:20px;" type="text" name="nama_rumahmakan" class="form-control rounded-full mt-0 @error('nama_rumahmakan') is-invalid @enderror" id="nama_rumahmakan" placeholder="Nama Rumah Makan" required value="{{ old('nama_rumahmakan') }}">
    @error('nama_rumahmakan') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>
{{-- ================================================================================================== --}}


{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="nama_pemilik" style="text-align: center">
        <i class="fas fa-user mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Nama Pemilik</span>
    </label>
    <input style="padding: 5px 10px; margin-bottom:20px;" type="text" name="nama_pemilik" class="form-control rounded-full mt-0 @error('nama_pemilik') is-invalid @enderror" id="nama_pemilik" placeholder="Nama Pemilik Rumah Makan" required value="{{ old('nama_pemilik') }}">
    @error('nama_pemilik') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>


{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="kota input-group mb-3" style="margin-top: 15px;">
    <label class="font-semibold flex items-center" for="pilihan_kota" style="text-align: center">
        <i class="fas fa-map-marker-alt mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Kota/Kab</span>
    </label>
    <select style="padding: 5px 20px; margin-bottom:20px;" name="pilihan_kota" class="form-control rounded-full mt-0 @error('pilihan_kota') is-invalid @enderror" id="pilihan_kota" required>
        <option value="">Pilih Kota/Kab</option>
        <optgroup label="Kota Bandung">
            <option value="Andir">Andir</option>
            <option value="Antapani">Antapani</option>
            <option value="Arcamanik">Arcamanik</option>
            <option value="Astanaanyar">Astanaanyar</option>
            <option value="Babakan Ciparay">Babakan Ciparay</option>
            <option value="Bandung Kidul">Bandung Kidul</option>
            <option value="Bandung Kulon">Bandung Kulon</option>
            <option value="Bandung Wetan">Bandung Wetan</option>
            <option value="Batununggal">Batununggal</option>
            <option value="Bojongloa Kaler">Bojongloa Kaler</option>
            <option value="Bojongloa Kidul">Bojongloa Kidul</option>
            <option value="Buahbatu">Buahbatu</option>
            <option value="Cibeunying Kaler">Cibeunying Kaler</option>
            <option value="Cibeunying Kidul">Cibeunying Kidul</option>
            <option value="Cibiru">Cibiru</option>
            <option value="Cicendo">Cicendo</option>
            <option value="Cidadap">Cidadap</option>
            <option value="Cinambo">Cinambo</option>
            <option value="Coblong">Coblong</option>
            <option value="Gedebage">Gedebage</option>
            <option value="Kiaracondong">Kiaracondong</option>
            <option value="Lengkong">Lengkong</option>
            <option value="Mandalajati">Mandalajati</option>
            <option value="Panyileukan">Panyileukan</option>
            <option value="Rancasari">Rancasari</option>
            <option value="Regol">Regol</option>
            <option value="Sukajadi">Sukajadi</option>
            <option value="Sukasari">Sukasari</option>
            <option value="Sumur Bandung">Sumur Bandung</option>
            <option value="Ujungberung">Ujungberung</option>
        </optgroup>
        <option value=""></option>
        <optgroup label="Kabupaten Bandung">
            <option value="Arjasari">Arjasari</option>
            <option value="Baleendah">Baleendah</option>
            <option value="Banjaran">Banjaran</option>
            <option value="Bojongsoang">Bojongsoang</option>
            <option value="Cangkuang">Cangkuang</option>
            <option value="Cicalengka">Cicalengka</option>
            <option value="Cikancung">Cikancung</option>
            <option value="Cilengkrang">Cilengkrang</option>
            <option value="Cileunyi">Cileunyi</option>
            <option value="Cimaung">Cimaung</option>
            <option value="Cimenyan">Cimenyan</option>
            <option value="Ciparay">Ciparay</option>
            <option value="Cipeundeuy">Cipeundeuy</option>
            <option value="Cipongkor">Cipongkor</option>
            <option value="Cisarua">Cisarua</option>
            <option value="Dayeuhkolot">Dayeuhkolot</option>
            <option value="Ibun">Ibun</option>
            <option value="Katapang">Katapang</option>
            <option value="Kertasari">Kertasari</option>
            <option value="Kutawaringin">Kutawaringin</option>
            <option value="Majalaya">Majalaya</option>
            <option value="Margaasih">Margaasih</option>
            <option value="Margahayu">Margahayu</option>
            <option value="Nagreg">Nagreg</option>
            <option value="Pacet">Pacet</option>
            <option value="Pameungpeuk">Pameungpeuk</option>
            <option value="Pangalengan">Pangalengan</option>
            <option value="Paseh">Paseh</option>
            <option value="Pasirjambu">Pasirjambu</option>
            <option value="Rancabali">Rancabali</option>
            <option value="Rongga">Rongga</option>
            <option value="Saguling">Saguling</option>
            <option value="Sindangkerta">Sindangkerta</option>
            <option value="Solokan Jeruk">Solokan Jeruk</option>
            <option value="Soreang">Soreang</option>
        </optgroup>
    </select>
    @error('pilihan_kota') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>


<script>
    // Simpan elemen yang terkait dengan "Kota/Kab" ke dalam variabel
var elemenKota = document.querySelector('.kota.input-group.mb-3');

// Mulai dengan menyembunyikan elemen "Kota/Kab"
elemenKota.style.display = "none";

// Simpan elemen input "Nama Pemilik" ke dalam variabel
var inputNamaPemilik = document.getElementById("nama_pemilik");

// Tambahkan event listener untuk mendeteksi perubahan pada input "Nama Pemilik"
inputNamaPemilik.addEventListener("change", function() {
    // Periksa apakah nilai input "Nama Pemilik" sudah terisi atau tidak
    if (inputNamaPemilik.value.trim() !== "") {
        // Jika terisi, tampilkan kembali elemen "Kota/Kab"
        elemenKota.style.display = "block";
    } else {
        // Jika tidak terisi, sembunyikan kembali elemen "Kota/Kab"
        elemenKota.style.display = "none";
    }
});

</script>
{{-- ================================================================================================== --}}
<div class="alamat input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="alamat" style="text-align: center">
        <i class="fas fa-home mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Alamat</span>
    </label>
    {{-- <input style="padding: 5px 10px; margin-bottom:20px;" type="text" name="alamat" class="form-control rounded-full mt-0 @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}"> --}}
    <textarea style="width:300px; height:200px; margin-bottom: 2px; rounded:10%" name="keterangan_mitra" class="form-control mt-0 @error('keterangan_mitra') is-invalid @enderror" id="keterangan_mitra" placeholder="Jelaskan Disini" required>{{ old('keterangan_mitra') }}</textarea>

    @error('alamat') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>

<script>
    // Simpan elemen yang terkait dengan "Kota/Kab" ke dalam variabel
var elemenAlamat = document.querySelector('.alamat.input-group.mb-3');

// Mulai dengan menyembunyikan elemen "Kota/Kab"
elemenAlamat.style.display = "none";

// Simpan elemen input "Nama Pemilik" ke dalam variabel
var inputPilihanKota = document.getElementById("pilihan_kota");

// Tambahkan event listener untuk mendeteksi perubahan pada input "Nama Pemilik"
inputPilihanKota.addEventListener("change", function() {
    // Periksa apakah nilai input "Nama Pemilik" sudah terisi atau tidak
    if (inputPilihanKota.value.trim() !== "") {
        // Jika terisi, tampilkan kembali elemen "Kota/Kab"
        elemenAlamat.style.display = "block";
    } else {
        // Jika tidak terisi, sembunyikan kembali elemen "Kota/Kab"
        elemenAlamat.style.display = "none";
    }
});

</script>

{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="telepon input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="nomor_telepon" style="text-align: center">
        <i class="fas fa-phone mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">No Telepon</span>
    </label>
    <input style="padding: 5px 10px; margin-bottom:20px;" type="text" name="nomor_telepon" class="form-control rounded-full mt-0 @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" placeholder="Nomor Telepon" required value="{{ old('nomor_telepon') }}">
    @error('nomor_telepon') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>


<script>
// Simpan elemen yang terkait dengan "Kota/Kab" ke dalam variabel
var elemenTelepon = document.querySelector('.telepon.input-group.mb-3');

// Mulai dengan menyembunyikan elemen "Kota/Kab"
elemenTelepon.style.display = "none";

// Simpan elemen textarea "Alamat" ke dalam variabel
var textareaAlamat = document.getElementById("alamat");

// Tambahkan event listener untuk mendeteksi perubahan pada textarea "Alamat"
textareaAlamat.addEventListener("change", function() {
    // Periksa apakah nilai textarea "Alamat" sudah terisi atau tidak
    if (textareaAlamat.value.trim() !== "") {
        // Jika terisi, tampilkan kembali elemen "Kota/Kab"
        elemenTelepon.style.display = "block";
    } else {
        // Jika tidak terisi, sembunyikan kembali elemen "Kota/Kab"
        elemenTelepon.style.display = "none";
    }
});



</script>

{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="email input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="email" style="text-align: center">
        <i class="fas fa-envelope mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Email</span>
    </label>
    <input style="padding: 5px 10px; margin-bottom:20px;" type="email" name="email" class="form-control rounded-full mt-0 @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
    @error('email') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>


{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="tanggal_berdiri" style="text-align: center">
        <i class="fas fa-edit mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Berdiri</span>
    </label>
    <input style="padding: 5px 10px; margin-bottom:20px;" type="date" name="tanggal_berdiri" class="form-control rounded-full mt-0 @error('tanggal_berdiri') is-invalid @enderror" id="tanggal_berdiri" placeholder="Didirikan" required value="{{ old('tanggal_berdiri') }}">
    @error('tanggal_berdiri') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>
{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="kuota_porsi" style="text-align: center">
        <i class="fas fa-calculator mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Kuota Porsi Makan</span>
    </label>
    <p style="font-size: 12px;">Silahkan Isi Sesuai Kemampuan Rumah Makan</p>
    <input style="padding: 5px 10px; margin-bottom:20px;" type="number" name="kuota_porsi" class="form-control rounded-full mt-0 @error('kuota_porsi') is-invalid @enderror" id="kuota_porsi" placeholder="Kuota" required value="{{ old('kuota_porsi') }}">
    @error('kuota_porsi') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>
{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="ktp" style="text-align: center">
        <i class="fas fa-camera mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Foto KTP</span>
    </label>
    <p style="font-size: 12px;">Kualitas Gambar Minimal 300Dpi, Foto KTP Pemilik</p>
    <input style="margin-left:50px; padding: 5px 10px; margin-bottom:20px;" type="file" name="ktp" class="form-control rounded-full mt-0 @error('ktp') is-invalid @enderror" id="ktp" placeholder="KTP" required value="{{ old('ktp') }}">

    @error('ktp') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>
{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="foto_mitra" style="text-align: center">
        <i class="fas fa-camera mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Foto Pemilik</span>
    </label>
    <p style="font-size: 12px;">Kualitas Gambar Minimal 300Dpi, Foto Selfie</p>
    <input style="margin-left:50px; padding: 5px 10px; margin-bottom:20px;" type="file" name="foto_mitra" class="form-control rounded-full mt-0 @error('foto_mitra') is-invalid @enderror" id="foto_mitra" placeholder="Foto Pemilik" required value="{{ old('foto_mitra') }}">

    @error('foto_mitra') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>
{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="foto_umkm" style="text-align: center">
        <i class="fas fa-camera mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Foto Rumah Makan</span>
    </label>
    <p style="font-size: 12px;">Kualitas Gambar Minimal 300Dpi, Foto Rumah Makan</p>
    <input style="margin-left:50px; padding: 5px 10px; margin-bottom:20px;" type="file" name="foto_umkm" class="form-control rounded-full mt-0 @error('foto_umkm') is-invalid @enderror" id="foto_umkm" placeholder="Foto Rumah Makan" required value="{{ old('foto_umkm') }}">

    @error('foto_umkm') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>
{{-- ================================================================================================== --}}
{{-- ================================================================================================== --}}
<div class="input-group mb-3" style="margin-top: 2px;">
    <label class="font-semibold flex items-center" for="keterangan_mitra" style="text-align: center">
        <i class="fas fa-file mr-2" style="margin-left: 75px;"></i> <span style="margin-left: 10px;">Keterangan Rumah Makan</span>
    </label>
    <p style="font-size: 12px;">Silahkan jelaskan tentang rumah makan Saudara</p>
    {{-- <input style=" padding: 5px 40px; margin-bottom:20px;" type="textarea" name="keterangan_mitra" class="form-control rounded-full mt-0 @error('keterangan_mitra') is-invalid @enderror" id="keterangan_mitra" placeholder="Jelaskan Disini" required value="{{ old('keterangan_mitra') }}"> --}}
    <textarea style="width:300px; height:200px; margin-bottom: 2px; rounded:10%" name="keterangan_mitra" class="form-control mt-0 @error('keterangan_mitra') is-invalid @enderror" id="keterangan_mitra" placeholder="Jelaskan Disini" required>{{ old('keterangan_mitra') }}</textarea>

    @error('keterangan_mitra') 
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>
{{-- ================================================================================================== --}}

                    <button type="submit" class="btn btn-primary mb-4"><i class="fa fa-file"></i> Save Dokumen </button>
                </form>
            </div>
        </div>
        

             
        @include('fe_dashboard.menu.menufooter')
        @include('fe_dashboard.menu.enter')

        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')