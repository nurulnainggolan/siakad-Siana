<?php

namespace App\Http\Controllers;

use App\Models\NilaiSiswa;
use Illuminate\Http\Request;

class NilaiSiswaController extends Controller
{
    /**
     * Menampilkan daftar semua nilai.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Fungsi menampilkan daftar nilai siswa
    }

    /**
     * Menampilkan form untuk membuat nilai baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Fungsi untuk menampilkan form membuat nilai baru
    }

    /**
     * Menyimpan nilai yang baru ke dalam database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Validasi data yang dikirimkan melalui form */
        $this->validate($request, [
            'siswaId' => 'required',
            'harian' => 'required',
            'uts' => 'required',
            'uas' => 'required'
        ]);

        /*Mengambil nilai dari form*/
        $nilaiId = $request->nilai_id;

        // cek apakaha siswa sudah ada nilai
        $cek = NilaiSiswa::where('siswa_id', $request->siswaId)->where('nilai_id', $nilaiId)->first();
        if ($cek) {
            /*Jika sudah ada, update nilai yang ada */
            $cek->update([
                'harian' => $request->harian,
                'uts' => $request->uts,
                'uas' => $request->uas
            ]);
            return redirect()->route('nilai.show', encrypt($nilaiId))->with('success', 'Data berhasil disimpan');
        } else {
            /*Jika tidak ada, maka buat nilai baru */
            NilaiSiswa::create([
                'nilai_id' => $nilaiId,
                'siswa_id' => $request->siswaId,
                'harian' => $request->harian,
                'uts' => $request->uts,
                'uas' => $request->uas
            ]);
            return redirect()->route('nilai.show', encrypt($nilaiId))->with('success', 'Data berhasil disimpan');
        }
    }

    /**
     * Menampilkan nilai yang ditentukan.
     *
     * @param  \App\Models\NilaiSiswa  $nilaiSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(NilaiSiswa $nilaiSiswa)
    {
        //Fungsi untuk menampilkan detail nilai siswa yang akan ditambahkan
    }

    /**
     * Menampilkan form untuk mengedit nilai siswa.
     *
     * @param  \App\Models\NilaiSiswa  $nilaiSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(NilaiSiswa $nilaiSiswa)
    {
        //Fungsi untuk menampilkan form edit nilai siswa
    }

    /**
     * Memperbarui nilai siswa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NilaiSiswa  $nilaiSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NilaiSiswa $nilaiSiswa)
    {
        //Fungsi untuk memperbarui nilai siswa
    }

    /**
     * Menghapus nilai siswa.
     *
     * @param  \App\Models\NilaiSiswa  $nilaiSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(NilaiSiswa $nilaiSiswa)
    {
        //Fungsi untuk menghapus nilai siswa
    }
}
