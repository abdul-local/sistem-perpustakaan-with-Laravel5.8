# Membuat sistem purpustakaan dengan laravel
1. instll laravel 5.8
2. buat database authors dengan printah php artisan make:migration create_authors_table yang isinya id dan name
3. buat database books dengan printah php artisan make:migration create_books_table lalu isi sesui kebuhan anda
4. buat database borrow_history dengan printah php artisan make:migration create_borrow_books_table --create=borrow_history 
5. setelah itu install untuk permission denga  printah composer spatie/laravel-permision
6. setalah itu lakukan printah php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
7. lalu php artisan migrate 
8. setealh itu tambahkan konfiguarsi ini di karnel 
'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
    'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
    'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class
9. untuk mempermudah kodingan kita install debug dari laravel dengan printah
composer require barryvdh/laravel-debugbar --dev
# Menyiapkan template 
1. bisa download di https://github.com/ColorlibHQ/AdminLTE/releases/tag/v2.4.13
2. kemudian gunakan helper asset untuk akses bahahan yg di butuhkan
# menyiapkan feature Autentifikasi
1. untuk authentifikasi kita gunakan printah php artisan make:auth 
2. atur env untuk mailtraps
3. Tambahkan MAIL_FROM_ADDRESS dan MAIL_FROM_NAME di env untuk memberikan alamat email dan name email yang memverifikasi
4. Tambhakn implements mustVerfy di model USERS
# Memberikan Role untuk user terdaptar
1. gunakan printah php artisan make:seeder RolesTableSeeder
2. Setelah itu gunakan printah php artisan db:seed
3. setelah itu buat untuk seeder user dan admin
4. masuk ke controller untuk register di atur lagi dan sebelum di create datanya di sudahakan di tampung dulu kedalam sebuah varibel
5. Gunakan printah assignRole
6. setelah itu tambahkan untuk hashRole nya di Model
# Membuat User admin
1. gunakan printah php artisan make:seeder AdminUserSeeder
2. gunakan printah php artisan db:seed --class=AdminUserSeeder
3. Sebelum menjalankan printah no 2 pastikan untuk di seed itu buat isi dulu table yang akan di buat dan juga jagan lupa untuk assignRole kasih nama admin.
4. setelah itu jalankan printah no 2 
5. setalah itu atur untuk Login controller nya artinya tambahkan methd baru,
ketika di jalankan yang di gunakan untuk redirect ke halaman admin page dan jangan lupa untuk routenya atur ke halaman adminnya biar ketika user login dengan role admin langsung di direct ke page admin

# Membedakan Route Admin_User 
1. kita buat file admin.php di route
2. kita pindahkan printah untuk akses admin ke file admin.php
3. Kita daptarkan route untuk admin di RouteServiceProvider.php
4. kita buat sperti route di web.php .
5. jangan lupa untuk menambahkan auth dan role admin biar tidak di akses .

# Menyiapkan Halaman Admin
1. kita buat buat halaman admin sesui dengan kebutuhan
2. untuk admin kita buatkan kontroller tersendiri untuk mempermudahnya dengan malkukan printah php artisan make:controller Admin\\HomeController

# Membuat Data Author
1. untuk membuat data Author secara otomatis kita dapat gunakan facker dengan melakukan printah no 2
2. php artisan make:factory AuthorFactory --model=Author
3. kita bisa membuat modelnya dengan melakukan printah php artisan make:model Author
4. liat data untuk Author di database apa saja yang dibutuhkan
5. kita matikan dulu di model Author untuk public $timestamps = false;
6. setelah itu kita jalakan printah php artisan tinker
7. kemudian jalankan printah lagi factory(App\Author::class.10)->create();

# Membuat data Buku
1. kita buat factory buku dan Model Buku dengan melakukan printah di langkah ke 2
2. php artisan make:model Book -f printah ini akan membuat model sekaligus factory
3. kita buat factory yang di Book dengan melihat apa saja yang di butuhkan di dataasenya.
4. kita gunakan printah php tinker
5. jalankan prinah factory(App\Book::class,20)->create();

# Menyingkat Generate Data
1. kita harus buat untuk seedernya dengan melakukan printah php artisan make:seeder AuthorsTableSeeder
2. di method run nya kita buat kita buat fungsi untuk faker data sebanyak 10 dengan menambah script  factory(App\Author::class,10)->create();
3. kita buat untuk seeder Book dengan melukan printah php artisan make seeder BooksTableSeeder
4. di method run nya kita buat kita buat fungsi untuk faker data sebanyak 10 dengan menambah script  factory(App\Book::class,20)->create();
5. setalh itu kita daptarkan seedernya di Database Seeder di method run kita panggil kelasnya dengan script $this->call(BooksTableSeeder::class);
6. ini baru kita ulang hapus semua datanya dengan melakukan printah php artisan migarte:fresh
7. setelah kita ceek semua datanya terhapus di database..
8. setelah itu kita akan menjalakan semua printah yang ada di seeder database dengan printah php artisan db:seed  otomatis akan mengenerate seluruhnya

# Menampilkan data penulis
1. pertama kunjungi lama github https://github.com/yajra/laravel-datatables
2. Setelah Itu install di terminal dengan perintah composer require yajra/laravel-datatables-oracle:"~9.0"
3. copy untuk link pengambilan tamplate tabel dan js nya lalu taruh di head nya
4. Kemudian Buat View untuk Author/penulisnya
5. Buat Controller untuk Author dengan melakukan printah php artisan make:controller Admin\\AuthorController --resource
6. setealh itu buatkan sebuah Route nya di rout view api.php

# Menampilkan dataPenulis Implmentasi Dengan Laravel Data Table
1. Membuat Controller khusus untuk Menampilkan data json dari database dengan printah di langkah no 2
2. php artisan make:controller DataController
3. setelah itu buat method dengan nama authors dan buat pritah untuk mengambil data dari database dalam bentuk json dengan printah di langkah no 4
4. return datatables()->of(Author::query())->toJson(); 
5. jangan lupa untuk di view index di panggil sebuah printah @stack('scripts') yang berfungsi untuk menyediakan tempat untuk ja4vascrript
6. setelah itu panggil printah @push('scripts) dan buat fungsi untuk menampilkan datatable yang ada di database dan jangan lupa @endpush


# Membuat Fungsi Tambah 
1. edit di menu authour tambahka a href tuntuk tambah.
2. buat view untuk create yang ada formnya
3. tambhkan di model public $guarded=[],
4. Tambahka di method strore create($request->only->name())

# Membuat Fungsi Edit
jangan lupa kunjungi (kunjungi https://yajrabox.com/docs/laravel-datatables/master/add-column untuk documentasi) untuk documentasi
1. Jangan lupa di view index untuk author kita atur colum penomeranya dengan menggunakan DT_rows_index dan jang lupa data controllernya tambahka addColumn
2. dan juga untuk orderable:false dan search able kita false
3. kita tambahkan untuk di controller data Column yang kita berinama action dengan function untuk mengembalikan nilai berpa tombol edit 
4. kita buat view untuk edit dengan form yang sama dengan tambah data penulis
5. kita buat route di api untuk method PUT
