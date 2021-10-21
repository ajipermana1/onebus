<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Rute;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('second.jdwl.index', [
            'title' => 'ADMIN|JADWAL',
            'buses' => Bus::all(),
            'rutes' => Rute::all(),
            'hometowns' => DB::table('hometowns')->get(),
            'destinations' => DB::table('destinations')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second.jdwl.create', [
            'title' => 'JADWAL | CREATE',
            'rutes' => Rute::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_hometown = $request->dari;
        $id_destination = $request->ke;

        $results = DB::select('select id from hometown_destination where id_kota_asal = ' . $id_hometown . ' AND id_kota_tujuan = ' . $id_destination . '');


        $validateData = $request->validate([
            'nama' => ['required', 'min:6'],
            'tgl_brkt' => ['required'],
            'tgl_plg' => ['required'],
            'jam_brkt' => ['required'],
            'jam_plg' => ['required'],
            'harga' => ['required'],


        ]);
        $validateData['id_hometown_destination'] = $results[0]->id;

        Bus::create($validateData);
        return redirect('/jdwl')->with('success', 'New bus has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('second.jdwl.show', [
            'title' => 'JADWAL | DETAIL',
            'bus' => Bus::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('second.jdwl.edit', [
            'title' => 'JADWAL | EDIT',
            'bus' => Bus::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_hometown = $request->dari;
        $id_destination = $request->ke;

        $results = DB::select('select id from hometown_destination where id_kota_asal = ' . $id_hometown . ' AND id_kota_tujuan = ' . $id_destination . '');


        $validateData = $request->validate([
            'nama' => ['required', 'min:6'],
            'tgl_brkt' => ['required'],
            'tgl_plg' => ['required'],
            'jam_brkt' => ['required'],
            'jam_plg' => ['required'],
            'harga' => ['required'],


        ]);
        $validateData['id_hometown_destination'] = $results[0]->id;

        DB::table('bus')
            ->where('id', $id)
            ->update($validateData);
        return redirect('/jdwl')->with("success", "Bus's schecedule has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::find($id);
        $bus->delete();
        return redirect('/jdwl')->with("success", "Bus's schecedule has been deleted!");
    }
}