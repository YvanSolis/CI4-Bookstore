<?php
// Page: components/buttons/primary_button
// Data contract:
// $disable: boolean | null
// $href: string | null
// $label: string | null
// $dark: boolean | null
?>

<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-[#666] text-[#bbb] cursor-not-allowed px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200 opacity-50">
        <?= esc($label ?? 'Primary') ?>
    </a>
<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-[#8b7e74] text-white hover:bg-[#a99d92] px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200">
        <?= esc($label ?? 'Primary') ?>
    </a>
<?php else: ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-[#8b7e74] text-white hover:bg-[#a99d92] px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200">
        <?= esc($label ?? 'Primary') ?>
    </a>
<?php endif; ?>