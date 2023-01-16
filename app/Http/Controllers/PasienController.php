<?php

namespace App\Http\Controllers;

use App\Models\Cekup;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $data = pasien::Where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = pasien::paginate(5);
        }
        return view('datapasien', compact('data'));
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        Pasien::create($request->all());
        return redirect()->route('pasien');
    }

    public function tampilkandata($id)
    {

        $data = Pasien::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Pasien::find($id);
        $data->update($request->all());
        return redirect()->route('pasien');
    }

    public function CekUp(Request $request)
    {
        return view('cekup');
    }

    public function tambahcekup(Request $request)
    {
        return view('tambahcekup');
    }

    public function insertdatacekup(Request $request)
    {
        Cekup::create($request->all());
        return redirect()->route('tampilkancekup');
    }

    public function tampilkancekup($id)
    {

        $data = Cekup::find($id);
        //dd($data);
        return view('tampilkancekup', compact('data'));
    }
}
