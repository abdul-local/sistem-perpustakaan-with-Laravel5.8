<?php
// Home
Breadcrumbs::for('admin/dashboard', function ($trail) {
    $trail->push('Beranda', route('admin/dashboard'));
});
// Author admin
Breadcrumbs::for('admin/author', function ($trail) {
    $trail->push('Beranda', route('admin/dashboard'));
    $trail->push('penulis', route('admin/author'));
});
// Author add
Breadcrumbs::for('admin/author/create', function ($trail) {
    $trail->push('Beranda', route('admin/dashboard'));
    $trail->push('Tambah Penulis', route('admin/author/create'));
});
// Author Edit
Breadcrumbs::for('admin/author/edit', function ($trail,$author) {
    $trail->push('Beranda', route('admin/dashboard'));
    $trail->push('Edit Penulis', route('admin/author/edit',$author));
});
// Book admin
Breadcrumbs::for('admin/book', function ($trail) {
    $trail->push('Beranda', route('admin/dashboard'));
    $trail->push('Buku', route('admin/book'));
});
// Books add
Breadcrumbs::for('admin/book/create', function ($trail) {
    $trail->push('Beranda', route('admin/dashboard'));
    $trail->push('Tambah Penulis', route('admin/book/create'));
});
// Book Edit
Breadcrumbs::for('admin/book/edit', function ($trail,$book) {
    $trail->push('Beranda', route('admin/dashboard'));
    $trail->push('Edit buku', route('admin/book/edit',$book));
});