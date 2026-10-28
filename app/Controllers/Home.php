<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Home extends BaseController
{
    /**
     * Menampilkan daftar data siswa dengan pagination maksimal 5 data per halaman
     */
    public function index(): string
    {
        $siswaModel = new SiswaModel();
        $perPage = 5;

        $currentPage = $this->request->getVar('page') ? (int) $this->request->getVar('page') : 1;
        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $siswa = $siswaModel->paginate($perPage, 'default');

        $data = [
            'title'       => 'Data Siswa - XI RPL',
            'siswa'       => $siswa,
            'pager'       => $siswaModel->pager,
            'currentPage' => $currentPage,
            'perPage'     => $perPage,
            'total'       => $siswaModel->pager ? $siswaModel->pager->getTotal('default') : $siswaModel->countAllResults(),
        ];

        return view('siswa_view', $data);
    }

    /**
     * Menyimpan data siswa baru
     */
    public function tambah()
    {
        $siswaModel = new SiswaModel();

        $siswaModel->save([
            'nis'   => $this->request->getPost('nis'),
            'nama'  => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
        ]);

        return redirect()->back() ?? redirect()->to(base_url('/'));
    }

    /**
     * Mengubah / memperbarui data siswa
     */
    public function edit($id)
    {
        $siswaModel = new SiswaModel();

        $siswaModel->update($id, [
            'nis'   => $this->request->getPost('nis'),
            'nama'  => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
        ]);

        return redirect()->back() ?? redirect()->to(base_url('/'));
    }

    /**
     * Alias untuk edit
     */
    public function ubah($id)
    {
        return $this->edit($id);
    }

    /**
     * Menghapus data siswa berdasarkan ID
     */
    public function hapus($id)
    {
        $siswaModel = new SiswaModel();
        $siswaModel->delete($id);

        return redirect()->back() ?? redirect()->to(base_url('/'));
    }
}
