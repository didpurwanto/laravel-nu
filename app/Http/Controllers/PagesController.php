<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.home')->withPosts($posts);
		
	}

	public function getHome(){
		return view('pages.home');
	}

	public function getNotFound(){
		return view('pages.not_found');
	}

	public function getJadwalSholat(){
		return view('pages.jadwal_sholat');
	}


	// BERITA
	public function getLazisZakat(){
		return view('news.lazis_zakat');
	}


}