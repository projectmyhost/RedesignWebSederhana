# Design System Specification (design.md)

Pedoman desain antarmuka konsisten berbasis halaman Data Siswa SMK Budi Luhur.

## 1. Color Palette & Tokens
- **Background Utama**: `#f8fafc` (slate-50)
- **Container / Card Background**: `#ffffff` (pure white)
- **Primary Text**: `#0f172a` (slate-900)
- **Muted / Subtitle Text**: `#64748b` (slate-500)
- **Border**: `#f1f5f9` (border-gray-100) / `#e2e8f0` (border-slate-200)
- **Accent Line**: `#ff5722` (orange)
- **Primary Button**: `#111827` (hover: `#000000`)
- **Badge Fill / Hover Row**: `#f1f5f9` (text: `#475569`, hover: `rgba(248, 250, 252, 0.6)`)
- **Danger / Hapus**: `#ef4444` (hover: `#b91c1c`)

## 2. Typography
- **Font Family**: `'Plus Jakarta Sans', sans-serif`
- **Category / Eyebrow**: `text-[11px] font-bold tracking-widest uppercase text-gray-400`
- **Page Title (H1)**: `text-3xl font-extrabold text-[#0f172a] tracking-tight`
- **Description / Subtitle**: `text-[14px] font-normal text-gray-500`
- **Table Header**: `text-[12px] font-semibold text-gray-600`
- **Table Data**: `text-[13px] font-medium text-[#0f172a]`
- **Badge**: `text-[11px] font-medium`

## 3. Komponen Standar

### Navbar
- Wrapper: `w-full bg-white border-b border-gray-100/80`
- Content Box: `max-w-7xl mx-auto px-6 lg:px-12 h-20 flex items-center justify-between`
- Brand: Logo SVG hitam + teks bold `text-[19px]`, divider vertikal `h-4 w-[1px] bg-gray-300`, badge kelas/halaman uppercase `text-[12px] text-gray-500`
- Info Kanan: Ikon toga + nama sekolah `text-[13px] font-medium text-gray-600`

### Header Halaman
- Struktur atas: flexbox antara judul (kiri) dan tombol aksi utama (kanan)
- Garis aksen wajib di bawah deskripsi: `<div class="w-12 h-1 bg-[#ff5722] rounded-full mt-3"></div>`
- Tombol aksi utama: `bg-[#111827] hover:bg-black text-white text-[13px] font-medium rounded-lg px-4 py-2.5 active:scale-[0.98]`

### Card & Tabel
- Card Wrapper: `bg-white border border-gray-100 rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.02)] overflow-hidden`
- Padding Cell Tabel: `py-5 px-6`
- Baris tabel: `divide-y divide-gray-100 hover:bg-slate-50/60 transition-colors`
- Action Group: jarak `space-x-6`, tombol Edit abu-abu gelap, tombol Hapus teks merah `#ef4444`

### Pagination & Footer Tabel
- Footer Wrapper: `px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 bg-white`
- Info Status Data: `text-[12px] font-medium text-gray-500` dengan nilai angka `font-semibold text-[#0f172a]`
- Navigasi: `flex items-center space-x-1.5`
- Tombol Halaman Aktif: `inline-flex items-center justify-center min-w-[32px] h-8 px-2.5 text-[12px] font-bold text-white bg-[#111827] rounded-lg shadow-sm`
- Tombol Halaman Tidak Aktif: `inline-flex items-center justify-center min-w-[32px] h-8 px-2.5 text-[12px] font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-slate-50 hover:text-black transition-colors`
- Tombol Sebelumnya / Selanjutnya (Aktif): `inline-flex items-center px-3 py-1.5 text-[12px] font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-slate-50 hover:text-black transition-colors`
- Tombol Sebelumnya / Selanjutnya (Disabled): `inline-flex items-center px-3 py-1.5 text-[12px] font-medium text-gray-300 bg-gray-50/70 border border-gray-100 rounded-lg cursor-not-allowed select-none`