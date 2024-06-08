<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Pbvsi;
use App\models\Prestasi;
use App\Models\Tentang;
use App\Models\Organisasi;
use App\Models\Struktural;
use App\Models\Atlet;
use App\Models\Informasi;
use App\Models\Peraturan;
use App\Models\Club;
use App\Models\Detail;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $pbvsis = Pbvsi::all();
        $prestasis = Prestasi::all();
        $informasis = Informasi::all();

        return view('home.index', compact(
            'sliders',
            'pbvsis',
            'prestasis',
            'informasis'
        ));
    }

    public function tentang_kami()
    {
        $tentangs = Tentang::all();
        $organisasis = Organisasi::all();
        $informasis = Informasi::all();

        return view('home.tentang-kami', compact(
            'tentangs',
            'organisasis',
            'informasis'
        ));
    }

    public function atlet_kota_cirebon(Request $request)
    {
        if ($request->has('search')) {
            $atlets = Atlet::where('nama', 'LIKE', '%' . $request->search . '%')->orWhere('club', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $atlets = Atlet::paginate(10);
        }
        $informasis = Informasi::all();

        return view('home.atlet-kota-cirebon', compact(
            'atlets',
            'informasis'
        ));
    }

    public function hubungi_kami()
    {
        $informasis = Informasi::all();

        return view('home.hubungi-kami', compact(
            'informasis'
        ));
    }

    public function peraturan()
    {
        $peraturans = Peraturan::all();
        $informasis = Informasi::all();

        return view('home.peraturan', compact(
            'peraturans',
            'informasis'
        ));
    }

    public function club_voli()
    {
        $clubs = Club::all();
        $informasis = Informasi::all();

        return view('home.club-voli', compact(
            'clubs',
            'informasis'
        ));
    }


    public function detail_club()
    {
        return view('home.detail-club');
    }

    public function struktur_organisasi()
    {
        $informasis = Informasi::all();
        $strukturals = Struktural::all();

        return view('home.struktur-organisasi', compact(
            'informasis',
            'strukturals'
        ));
    }

    public function detail_prestasi()
    {
        $informasis = Informasi::all();

        return view('home.detail-prestasi', compact(
            'informasis'
        ));
    }




    // public function berita_bola_voli()
    // {
    //     return view('home.berita-bola-voli');
    // }

}
