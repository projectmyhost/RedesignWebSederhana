<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'Data Siswa - XI RPL') ?></title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f8fafc;
      color: #0f172a;
    }
  </style>
</head>
<body class="min-h-screen bg-[#f8fafc] text-[#0f172a] antialiased selection:bg-orange-500 selection:text-white">

  <!-- Header / Navbar -->
  <header class="w-full bg-white border-b border-gray-100/80">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 h-20 flex items-center justify-between">
      <!-- Left: Logo & Subtitle -->
      <div class="flex items-center space-x-5">
        <div class="flex items-center space-x-2.5">
          <!-- Logo Icon (Stylized S / Stack) -->
          <svg class="w-6 h-6 text-[#111827]" viewBox="0 0 24 24" fill="currentColor">
            <path d="M13.5 2L6 9h5v4l7.5-7h-5V2z" fill="none"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 3.125a1 1 0 00-1.5 0L4.5 10.375a1 1 0 00.75 1.625H9v2H5.25a1 1 0 00-.75 1.625l6.75 7.25a1 1 0 001.5 0l6.75-7.25A1 1 0 0018.75 14H15v-2h3.75a1 1 0 00.75-1.625l-6.75-7.25zm-2.25 9.25V7.414L7.586 10.375H10.5v2.001zm3 0v-2h2.914l-2.914-2.96v4.96z"/>
          </svg>
          <span class="text-[19px] font-bold tracking-tight text-[#0f172a]">Data Siswa</span>
        </div>
        <div class="h-4 w-[1px] bg-gray-300"></div>
        <span class="text-[12px] font-medium tracking-wide text-gray-500 uppercase">XI RPL</span>
      </div>

      <!-- Right: School Info -->
      <div class="flex items-center space-x-2 text-gray-600">
        <!-- School / Graduation Cap Icon -->
        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-5.25 6.557c0 1.518.528 2.923 1.417 4.025"/>
        </svg>
        <span class="text-[13px] font-medium text-gray-600">SMK Budi Luhur</span>
      </div>
    </div>
  </header>

  <!-- Main Content Area -->
  <main class="max-w-7xl mx-auto px-6 lg:px-12 pt-12 pb-24">
    
    <!-- Top Content: Title Section & Action Button -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
      <div>
        <p class="text-[11px] font-bold tracking-widest text-gray-400 uppercase mb-2">DAFTAR SISWA</p>
        <h1 class="text-3xl font-extrabold text-[#0f172a] tracking-tight mb-2">Data Siswa XI RPL</h1>
        <p class="text-[14px] text-gray-500 font-normal">Kelola data siswa dengan mudah dan cepat.</p>
        <!-- Accent Line -->
        <div class="w-12 h-1 bg-[#ff5722] rounded-full mt-3"></div>
      </div>

      <!-- Add Student Button -->
      <div>
        <button type="button" onclick="openModal('modalTambah')" class="inline-flex items-center px-4 py-2.5 bg-[#111827] hover:bg-black text-white text-[13px] font-medium rounded-lg shadow-sm transition-all duration-150 active:scale-[0.98]">
          <svg class="w-3.5 h-3.5 mr-2 stroke-[2.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
          Tambah Data Siswa
        </button>
      </div>
    </div>

    <!-- Data Table Container -->
    <div class="bg-white border border-gray-100 rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.02)] overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="border-b border-gray-100">
              <th scope="col" class="py-5 px-6 text-[12px] font-semibold text-gray-600 w-24">No</th>
              <th scope="col" class="py-5 px-6 text-[12px] font-semibold text-gray-600 w-36">NIS</th>
              <th scope="col" class="py-5 px-6 text-[12px] font-semibold text-gray-600">Nama</th>
              <th scope="col" class="py-5 px-6 text-[12px] font-semibold text-gray-600 w-44">Kelas</th>
              <th scope="col" class="py-5 px-6 text-[12px] font-semibold text-gray-600 w-48">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 text-[13px]">
            <?php if (!empty($siswa)): ?>
              <?php 
                $page = isset($currentPage) && $currentPage > 0 ? (int)$currentPage : 1;
                $no = 1 + (($perPage ?? 5) * ($page - 1));
                foreach ($siswa as $row): 
              ?>
                <tr class="hover:bg-slate-50/60 transition-colors">
                  <td class="py-5 px-6 font-semibold text-[#0f172a]"><?= sprintf('%02d', $no++) ?></td>
                  <td class="py-5 px-6 font-medium text-gray-800"><?= esc($row['nis']) ?></td>
                  <td class="py-5 px-6 font-medium text-[#0f172a]"><?= esc($row['nama']) ?></td>
                  <td class="py-5 px-6">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-[11px] font-medium bg-[#f1f5f9] text-gray-600">
                      <?= esc($row['kelas']) ?>
                    </span>
                  </td>
                  <td class="py-5 px-6">
                    <div class="flex items-center space-x-6">
                      <button type="button" onclick="openModal('modalEdit<?= $row['id'] ?>')" class="inline-flex items-center space-x-1.5 text-gray-700 hover:text-black font-medium transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        <span>Edit</span>
                      </button>
                      <a href="<?= base_url('home/hapus/' . $row['id']); ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')" class="inline-flex items-center space-x-1.5 text-[#ef4444] hover:text-red-700 font-medium transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                        <span>Hapus</span>
                      </a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" class="py-12 text-center text-gray-500 font-medium">Belum ada data siswa.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Table Footer / Pagination Bar -->
      <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 bg-white">
        <?php 
          $totalData = $total ?? (!empty($siswa) ? count($siswa) : 0);
          $limit = $perPage ?? 5;
          $cur = isset($currentPage) && $currentPage > 0 ? (int)$currentPage : 1;
          $from = $totalData > 0 ? 1 + ($limit * ($cur - 1)) : 0;
          $to = min($totalData, $limit * $cur);
        ?>
        <p class="text-[12px] font-medium text-gray-500">
          Menampilkan <span class="font-semibold text-[#0f172a]"><?= $from ?></span> - <span class="font-semibold text-[#0f172a]"><?= $to ?></span> dari <span class="font-semibold text-[#0f172a]"><?= $totalData ?></span> data siswa
        </p>

        <div>
          <?php if (!empty($pager)) : ?>
            <?= $pager->links('default', 'budi_luhur') ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal Tambah Data Siswa -->
  <div id="modalTambah" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm p-4 transition-opacity duration-200">
    <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden transform transition-all">
      <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between">
        <div>
          <h3 class="text-base font-bold text-[#0f172a]">Tambah Data Siswa</h3>
          <p class="text-[13px] text-gray-500 mt-0.5">Masukkan data siswa baru secara lengkap.</p>
        </div>
        <button type="button" onclick="closeModal('modalTambah')" class="p-1.5 text-gray-400 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
      <form action="<?= base_url('home/tambah'); ?>" method="POST">
        <div class="p-6 space-y-4">
          <div>
            <label for="nis" class="block text-[12px] font-semibold text-gray-600 mb-1.5 uppercase tracking-wider">NIS</label>
            <input type="text" id="nis" name="nis" required placeholder="Contoh: 1004" class="w-full px-3.5 py-2.5 text-[13px] bg-slate-50/70 border border-gray-200 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-transparent transition-all">
          </div>
          <div>
            <label for="nama" class="block text-[12px] font-semibold text-gray-600 mb-1.5 uppercase tracking-wider">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required placeholder="Contoh: Dimas Banu Chaka" class="w-full px-3.5 py-2.5 text-[13px] bg-slate-50/70 border border-gray-200 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-transparent transition-all">
          </div>
          <div>
            <label for="kelas" class="block text-[12px] font-semibold text-gray-600 mb-1.5 uppercase tracking-wider">Kelas</label>
            <input type="text" id="kelas" name="kelas" required placeholder="Contoh: XI RPL" class="w-full px-3.5 py-2.5 text-[13px] bg-slate-50/70 border border-gray-200 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-transparent transition-all">
          </div>
        </div>
        <div class="px-6 py-4 bg-gray-50/70 border-t border-gray-100 flex items-center justify-end space-x-3">
          <button type="button" onclick="closeModal('modalTambah')" class="px-4 py-2.5 text-[13px] font-medium text-gray-700 bg-white border border-gray-200 hover:bg-gray-50 rounded-lg transition-colors">
            Batal
          </button>
          <button type="submit" class="inline-flex items-center px-4 py-2.5 bg-[#111827] hover:bg-black text-white text-[13px] font-medium rounded-lg shadow-sm transition-all duration-150 active:scale-[0.98]">
            Simpan Data
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Edit Data Siswa -->
  <?php if (!empty($siswa)): ?>
    <?php foreach ($siswa as $row): ?>
      <div id="modalEdit<?= $row['id'] ?>" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm p-4 transition-opacity duration-200">
        <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden transform transition-all">
          <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between">
            <div>
              <h3 class="text-base font-bold text-[#0f172a]">Edit Data Siswa</h3>
              <p class="text-[13px] text-gray-500 mt-0.5">Perbarui data siswa yang dipilih.</p>
            </div>
            <button type="button" onclick="closeModal('modalEdit<?= $row['id'] ?>')" class="p-1.5 text-gray-400 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
          <form action="<?= base_url('home/edit/' . $row['id']); ?>" method="POST">
            <div class="p-6 space-y-4">
              <div>
                <label for="nis_<?= $row['id'] ?>" class="block text-[12px] font-semibold text-gray-600 mb-1.5 uppercase tracking-wider">NIS</label>
                <input type="text" id="nis_<?= $row['id'] ?>" name="nis" value="<?= esc($row['nis']) ?>" required class="w-full px-3.5 py-2.5 text-[13px] bg-slate-50/70 border border-gray-200 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-transparent transition-all">
              </div>
              <div>
                <label for="nama_<?= $row['id'] ?>" class="block text-[12px] font-semibold text-gray-600 mb-1.5 uppercase tracking-wider">Nama Lengkap</label>
                <input type="text" id="nama_<?= $row['id'] ?>" name="nama" value="<?= esc($row['nama']) ?>" required class="w-full px-3.5 py-2.5 text-[13px] bg-slate-50/70 border border-gray-200 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-transparent transition-all">
              </div>
              <div>
                <label for="kelas_<?= $row['id'] ?>" class="block text-[12px] font-semibold text-gray-600 mb-1.5 uppercase tracking-wider">Kelas</label>
                <input type="text" id="kelas_<?= $row['id'] ?>" name="kelas" value="<?= esc($row['kelas']) ?>" required class="w-full px-3.5 py-2.5 text-[13px] bg-slate-50/70 border border-gray-200 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-transparent transition-all">
              </div>
            </div>
            <div class="px-6 py-4 bg-gray-50/70 border-t border-gray-100 flex items-center justify-end space-x-3">
              <button type="button" onclick="closeModal('modalEdit<?= $row['id'] ?>')" class="px-4 py-2.5 text-[13px] font-medium text-gray-700 bg-white border border-gray-200 hover:bg-gray-50 rounded-lg transition-colors">
                Batal
              </button>
              <button type="submit" class="inline-flex items-center px-4 py-2.5 bg-[#111827] hover:bg-black text-white text-[13px] font-medium rounded-lg shadow-sm transition-all duration-150 active:scale-[0.98]">
                Simpan Perubahan
              </button>
            </div>
          </form>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- Modal Interaction Script -->
  <script>
    function openModal(id) {
      const modal = document.getElementById(id);
      if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
      }
    }

    function closeModal(id) {
      const modal = document.getElementById(id);
      if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        const anyOpen = document.querySelectorAll('.fixed.z-50.flex');
        if (anyOpen.length === 0) {
          document.body.classList.remove('overflow-hidden');
        }
      }
    }

    // Tutup modal saat klik area luar backdrop
    window.addEventListener('click', function(e) {
      if (e.target.classList.contains('fixed') && e.target.classList.contains('z-50')) {
        closeModal(e.target.id);
      }
    });

    // Tutup modal saat tekan tombol ESC
    window.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        const openModals = document.querySelectorAll('.fixed.z-50.flex');
        openModals.forEach(m => closeModal(m.id));
      }
    });
  </script>
</body>
</html>
