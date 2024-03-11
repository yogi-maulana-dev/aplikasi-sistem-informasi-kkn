<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Lokasi;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $alllokasi = Lokasi::all();
        $provinces = Province::where('id', 18)->get();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('SuperAdmin.lokasi', compact('alllokasi', 'provinces', 'regencies', 'districts', 'villages'), ['judul' => 'Halaman Lokasi KKN']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getRegencies(Request $request)
    {
        $provinsiId = $request->input('provinsi_id');
        $regencies = Regency::where('province_id', $provinsiId)->get();
        return response()->json($regencies);
    }

    public function getDistricts(Request $request)
    {
        $kotaId = $request->input('kota_id');
        $districts = District::where('regency_id', $kotaId)->get();
        return response()->json($districts);
    }

    public function getVillages(Request $request)
    {
        $kecamatanId = $request->input('kecamatan_id');
        $villages = Village::where('district_id', $kecamatanId)->select('id', 'name')->get();
        return response()->json($villages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(
            $request->all(),
            [
                'provinsi' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
                'nip' => 'required|numeric|unique:lokasi_kkn,nip', // Tambahkan aturan unique untuk memastikan NIP unik di dalam tabel dosen
                'nama' => 'required',
                'alamat' => 'required',
                'nohp' => 'required|numeric',
                'jenis_kelamin' => 'required|in:laki_laki,perempuan',
                'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu,Kepercayaan Lainnya',
            ],
            [
                'provinsi.required' => 'Provinsi wajib diisi',
                'kota.required' => 'Kota/Kabupaten wajib diisi',
                'kecamatan.required' => 'Kecamatan wajib diisi',
                'desa.required' => 'Desa wajib diisi',
                'nip.required' => 'Nomor Induk Pegawai wajib diisi',
                'nip.numeric' => 'Nomor Induk Pegawai harus berupa angka',
                'nip.unique' => 'Nomor Induk Pegawai sudah ada dalam database',
                'nama.required' => 'Nama Lengkap wajib diisi',
                'alamat.required' => 'Alamat KKN wajib diisi',
                'nohp.required' => 'Nomor Handphone wajib diisi',
                'nohp.numeric' => 'Nomor Handphone harus berupa angka',
                'jenis_kelamin.required' => 'Jenis Kelamin wajib dipilih',
                'jenis_kelamin.in' => 'Pilih salah satu dari Jenis Kelamin yang tersedia',
                'agama.required' => 'Agama wajib dipilih',
                'agama.in' => 'Pilih salah satu dari Agama yang tersedia',
            ],
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $lokasi = new Lokasi();
        $lokasi->provinsi = $request->provinsi;
        $lokasi->kota = $request->kota;
        $lokasi->kecamatan = $request->kecamatan;
        $lokasi->desa = $request->desa;
        $lokasi->alamat = $request->alamat;
        $lokasi->nip = $request->nip;
        $lokasi->nama = $request->nama;
        $lokasi->nohp = $request->nohp;
        $lokasi->jenis_kelamin = $request->jenis_kelamin;
        $lokasi->agama = $request->agama;
        // Tambahkan field lain yang perlu disimpan sesuai kebutuhan

        $lokasi->save();

        // Jika penyimpanan berhasil, kembalikan ke halaman sebelumnya dengan pesan sukses
        if ($lokasi) {
            return redirect()->back()->with('success', 'Data dosen berhasil disimpan.');
        }

        // Jika penyimpanan gagal, kembalikan ke halaman sebelumnya dengan pesan error
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //
        // Mengambil data lokasi berdasarkan ID
        $lokasi = Lokasi::findOrFail($id);

        $provinces = Province::where('id', 18)->get();
        $regencies = Regency::where('province_id', 18)->get();
        $districts = District::all();
        $villages = Village::where('district_id', $lokasi->kecamatan)->get();

        return view('SuperAdmin.editlokasi', compact('lokasi', 'provinces', 'regencies', 'districts', 'villages'), ['judul' => 'Halaman Lokasi KKN']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // Validasi data yang diterima dari form
        $validator = Validator::make(
            $request->all(),
            [
                'provinsi'.$id => 'required',
                'kota'.$id => 'required',
                'kecamatan'.$id => 'required',
                'desa'.$id => 'required',
                'nipx' => 'required|numeric|unique:lokasi_kkn,nip,'.$id,
                'namax' => 'required',
                'alamatx' => 'required',
                'nohpx' => 'required|numeric',
                'jenis_kelaminx' => 'required|in:laki_laki,perempuan',
                'agamax' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu,Kepercayaan Lainnya',
            ],
            [
                // Pesan validasi disini
                'provinsi.required' => 'Provinsi wajib diisi',
                'kota.required' => 'Kota/Kabupaten wajib diisi',
                'kecamatan.required' => 'Kecamatan wajib diisi',
                'desa.required' => 'Desa wajib diisi',
                'nip.required' => 'Nomor Induk Pegawai wajib diisi',
                'nip.numeric' => 'Nomor Induk Pegawai harus berupa angka',
                'nip.unique' => 'Nomor Induk Pegawai sudah ada dalam database',
                'nama.required' => 'Nama Lengkap wajib diisi',
                'alamat.required' => 'Alamat KKN wajib diisi',
                'nohp.required' => 'Nomor Handphone wajib diisi',
                'nohp.numeric' => 'Nomor Handphone harus berupa angka',
                'jenis_kelamin.required' => 'Jenis Kelamin wajib dipilih',
                'jenis_kelamin.in' => 'Pilih salah satu dari Jenis Kelamin yang tersedia',
                'agama.required' => 'Agama wajib dipilih',
                'agama.in' => 'Pilih salah satu dari Agama yang tersedia',
            ],
        );

        // Redirect kembali jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

      // Mengambil data yang akan diupdate
      $lokasi = Lokasi::findOrFail($id);

      // Memasukkan data yang diterima dari form ke dalam model
      $lokasi->provinsi = $request->input('provinsi'.$id);
      $lokasi->kota = $request->input('kota'.$id);
      $lokasi->kecamatan = $request->input('kecamatan'.$id);
      $lokasi->desa = $request->input('desa'.$id);
      $lokasi->nip = $request->input('nipx');
      $lokasi->nama = $request->input('namax');
      $lokasi->alamat = $request->input('alamatx');
      $lokasi->nohp = $request->input('nohpx');
      $lokasi->jenis_kelamin = $request->input('jenis_kelaminx');
      $lokasi->agama = $request->input('agamax');

      // Menyimpan perubahan
      $lokasi->save();

      // Redirect ke halaman sebelumnya dengan pesan sukses
      return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data lokasi berdasarkan ID
        $lokasi = Lokasi::findOrFail($id);
    
        // Hapus data lokasi
        $lokasi->delete();
    
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data lokasi berhasil dihapus.');
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupatens = Regency::where('province_id', $id_provinsi)->get();
        $options = '';
        foreach ($kabupatens as $kabupaten) {
            $options .= "<option value='" . $kabupaten->id . "'>" . $kabupaten->name . '</option>';
        }
        return response()->json(['options' => $options]);
    }

    public function getkecamatan(Request $request)
    {
        $id_kota = $request->id_kota;
        $kecamatans = District::where('regency_id', $id_kota)->get();
        $options = '';
        foreach ($kecamatans as $kecamatan) {
            $options .= "<option value='" . $kecamatan->id . "'>" . $kecamatan->name . '</option>';
        }
        return response()->json(['options' => $options]);
    }

    public function getdesa(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
        $desas = Village::where('district_id', $id_kecamatan)->get();
        $options = '';
        foreach ($desas as $desa) {
            $options .= "<option value='" . $desa->id . "'>" . $desa->name . '</option>';
        }
        return response()->json(['options' => $options]);
    }
}
