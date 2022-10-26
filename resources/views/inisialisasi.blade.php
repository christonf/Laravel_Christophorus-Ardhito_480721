@extends('layouts.utsapp')

@section('content')
<p>1)	Pertama kita membuat file baru di dalam folder “views” dengan nama “UTS_WEB2_2022_CHRISTOPHORUS.blade.php”.<br><br>
2)	Setelah itu, kita perlu memanggil route agar bisa terbuka di web dngan cara menambahkan command berikut pada file web.php yang terletak di dalam folder routes.
Untuk penamaan URI-nya saya menggunakan ‘/uts2022’ agar mudah dan tidak terlalu panjang untuk diakses. Lalu, 
jika kita coba buka di web dengan pertama – tama menyalakan php artisan di command prompt dan juga php-nya.<br><br>
1)	Lalu untuk selanjutnya dalah menyambungkan dengan database yang tersedia di web dengan cara pertama – tama mengganti isi dari “DB_DATABASE” dengan database yang ingin kita gunakan, yaitu database “responsi_pemrograman_web” seperti di bawah ini.
Maka, jika sudah, website akan terhubung dengan database “responsi_pemrograman_web”.

@endsection