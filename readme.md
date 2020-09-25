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




