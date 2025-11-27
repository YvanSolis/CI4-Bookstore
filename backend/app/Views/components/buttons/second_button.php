<?php
// Page: components/buttons/second_button
// Data contract:
// $disable: boolean | null
// $href: string | null
// $label: string | null
// $dark: boolean | null
?>

<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-[#666] text-[#bbb] cursor-not-allowed px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200 opacity-50">
        <?= esc($label ?? 'Secondary') ?>
    </a>
<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-[#a99d92] text-white hover:bg-[#c7bbb0] hover:text-[#3c2f2f] px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200">
        <?= esc($label ?? 'Secondary') ?>
    </a>
<?php else: ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-[#a99d92] text-white hover:bg-[#c7bbb0] hover:text-[#3c2f2f] px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200">
        <?= esc($label ?? 'Secondary') ?>
    </a>
<?php endif; ?>