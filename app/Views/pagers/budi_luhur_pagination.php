<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="Navigasi Halaman" class="flex items-center space-x-1.5">
    <!-- Tombol Sebelumnya -->
    <?php if ($pager->hasPreviousPage()) : ?>
        <a href="<?= $pager->getPreviousPage() ?>" class="inline-flex items-center px-3 py-1.5 text-[12px] font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-slate-50 hover:text-black transition-colors" aria-label="Sebelumnya">
            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            Sebelumnya
        </a>
    <?php else : ?>
        <span class="inline-flex items-center px-3 py-1.5 text-[12px] font-medium text-gray-300 bg-gray-50/70 border border-gray-100 rounded-lg cursor-not-allowed select-none" aria-disabled="true">
            <svg class="w-3.5 h-3.5 mr-1 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            Sebelumnya
        </span>
    <?php endif ?>

    <!-- Tombol Angka Halaman (1, 2, ...) -->
    <?php foreach ($pager->links() as $link) : ?>
        <?php if ($link['active']) : ?>
            <span class="inline-flex items-center justify-center min-w-[32px] h-8 px-2.5 text-[12px] font-bold text-white bg-[#111827] rounded-lg shadow-sm" aria-current="page">
                <?= $link['title'] ?>
            </span>
        <?php else : ?>
            <a href="<?= $link['uri'] ?>" class="inline-flex items-center justify-center min-w-[32px] h-8 px-2.5 text-[12px] font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-slate-50 hover:text-black transition-colors">
                <?= $link['title'] ?>
            </a>
        <?php endif ?>
    <?php endforeach ?>

    <!-- Tombol Selanjutnya -->
    <?php if ($pager->hasNextPage()) : ?>
        <a href="<?= $pager->getNextPage() ?>" class="inline-flex items-center px-3 py-1.5 text-[12px] font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-slate-50 hover:text-black transition-colors" aria-label="Selanjutnya">
            Selanjutnya
            <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    <?php else : ?>
        <span class="inline-flex items-center px-3 py-1.5 text-[12px] font-medium text-gray-300 bg-gray-50/70 border border-gray-100 rounded-lg cursor-not-allowed select-none" aria-disabled="true">
            Selanjutnya
            <svg class="w-3.5 h-3.5 ml-1 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </span>
    <?php endif ?>
</nav>
