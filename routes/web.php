 <?php
Route::get('/', function () {
    return view('welcome');
});
//Route Basic
Route::get('/about', function () {
	return '<h1>Halo</h1>'.
	'Selamat datang di webapp saya<br>'.
	'Laravel, emang keren.';
});
Route::get('profil', function()
{
	return view('biodata');
});
// Route Parameter
Route::get('pesan/{makan}/{minum}/{harga}',function($mkn, $mnm, $hrg){
	return 'Makanan Yang Saya Pesan Adalah '.$mkn.'<br>'.
	'Minuman Yang Saya Pesan Adalah '.$mnm.'<br>'.
	'Total Harga '.$hrg;
});
// Route::get('profil2', function()
// {
// 	return view('nama');
// });
// Route::get('profil3', function() 
// {
// 	return view('alamat');
// });
// Route::get('profil4', function()
// {
// 	return view('skl');
// });
// Route::get('profil5', function()
// {
// 	return view('umur');
// });
// Route::get('profil6', function()
// {
// 	return view('jrs');
// });

Route::get('/testmodel', function() { 
	$query = App\Post::all(); 
	return $query; 
});

//Mencari semua model
Route::get('/testmodel1', function() { 
	$query = App\Post::all(); 
	return $query; 
});

//Mencari model berdasarkan id
Route::get('/testmodel2', function() {
	$query = App\Post::find(1);
	return $query;
});

//Mencari model berdasarkan title
Route::get('/testmodel3', function() { 
	$query = App\Post::where('title','like','%membuat website%')->get();
	return $query; 
});

//Mengubah record(hapus semua isi function)
Route::get('/testmodel4', function() { 
	$post = App\Post::find(1); 
	$post->title = "Ciri Keluarga Sakinah"; 
	$post->save(); return $post; 
	return $post; 
});

//Menghapus record(hapus semua isi function)
Route::get('/testmodel5', function() { 
	$post = App\Post::find(1); 
	$post->delete(); 
	// check data di database 
	return $post; 
});

//Menambahkan record(hapus semua isi function)
Route::get('/testmodel6', function() { 
	$post = new App\Post; 
	$post->title = "7 Amalan Pembuka Jodoh"; 
	$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat"; 
	$post->save(); 
	return $post; 
	// check record baru di database
});

Route::get('/testgaji', function() {
	$query = App\Penggajian::all();
	return $query;
});

Route::get('/testgaji-1',function() {
	$query = App\Penggajian::where('agama','=','islam') ->get();
	return $query;
});

Route::get('/testgaji-2', function() {
	$query = App\Penggajian::select('id','nama','agama')
	->where('agama','=','islam') ->get();
	return $query;
});

Route::get('/testgaji/{id}', function($id) {
	$query = App\Penggajian::find($id);
	return $query;
});

Route::get('/tambah-testgaji',function() {
	$query = New App\Penggajian();
	$query->nama = 'Indah Mambo';
	$query->jabatan = 'Sekertaris';
	$query->jk = 'Perempuan';
	$query->alamat = 'Bojong Honey';
	$query->agama = 'islam';
	$query->total_gaji = '500000';
	$query->save();
	return $query;
});














