<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar semua siswa.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Mengambil data siswa */
        $siswa = Siswa::OrderBy('nama', 'asc')->get();
        /*Mengambil semua data kelas */
        $kelas = Kelas::all();
        return view('pages.admin.siswa.index', compact('siswa', 'kelas'));
    }

    /**
     * Menampilkan form tambah siswa.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Menyimpan siswa baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*Validasi input dari request */
        $this->validate($request, [
            'nama' => 'required',
            'nis' => 'required|unique:siswas',
            'telp' => 'required',
            'alamat' => 'required',
            // 'kelas_id' => 'required|unique:siswas',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'nis.unique' => 'NIS sudah terdaftar',
            'kelas_id.unique' => 'Siswa sudah terdaftar di kelas ini',
        ]);

        /*Jika ada foto yang diupload */
        if (isset($request->foto)) {
            //Mengambil file foto
            $file = $request->file('foto');
            //Menentukan nama file foto
            $namaFoto = time() . '.' . $file->getClientOriginalExtension();
            //Menyimpan foto ke dalam folder yang ditentukan
            $foto = $file->storeAs('images/siswa', $namaFoto, 'public');
        }

        /*Membuat objek siswa baru */
        $siswa = new Siswa;

        /*Mengisi data siswa */
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->telp = $request->telp;
        $siswa->alamat = $request->alamat;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->foto = $foto;
        $siswa->save();


        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Menampilkan detail siswa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*Mendeskripsi ID siswa */
        $id = Crypt::decrypt($id);
        /*Mencari siswa berdasarkan ID */
        $siswa = Siswa::findOrFail($id);

        return view('pages.admin.siswa.profile', compact('siswa'));
    }

    /**
     * Menampilkan form edit siswa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*Mendeskripsi ID siswa */
        $id = Crypt::decrypt($id);
        /*Mengambil semua data kelas */
        $kelas = Kelas::all();
        /*Mencari siswa berdasarkan ID */
        $siswa = Siswa::findOrFail($id);

        return view('pages.admin.siswa.edit', compact('siswa', 'kelas'));
    }

    /**
     * Memperbarui data siswa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        /*Jika yang diiput tidak sesuai dengan NIS maka dilakukan validasi */
        if ($request->nis != $siswa->nis) {
            /*Validasi NIS untuk memastikan tidak ada NIS yang sama */
            $this->validate($request, [
                'nis' => 'unique:siswas'
            ], [
                'nis.unique' => 'NIS sudah terdaftar',
            ]);
        }

        /*Mengupdate data siswa */
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->telp = $request->telp;
        $siswa->alamat = $request->alamat;
        $siswa->kelas_id = $request->kelas_id;

        /*Memeriksa apakah ada file foto yang diupload */
        if ($request->hasFile('foto')) {
            $lokasi = 'img/siswa/' . $siswa->foto;
            if (File::exists($lokasi)) {
                File::delete($lokasi);
            }
            /*Mengambil file foto yang diupload */
            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $tujuanFoto = public_path('/img/siswa');
            $foto->move($tujuanFoto, $namaFoto);
            $siswa->foto = $namaFoto;
        }

        /*Menyimpan perubahan data siswa */
        $siswa->update();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diubah');
    }

    /**
     * Menghapus data siswa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*Mengambil data siswa yang akan dihapus */
        $siswa = Siswa::find($id);
        /*Menentukan lokasi foro siswa */
        $lokasi = 'img/siswa/' . $siswa->foto;
        /*Menghapus foto siswa */
        if (File::exists($lokasi)) {
            File::delete($lokasi);
        }

        /*Menghapus data siswa */
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }

    public function nilais()
{
    return $this->hasMany(Nilai::class);
}

}
