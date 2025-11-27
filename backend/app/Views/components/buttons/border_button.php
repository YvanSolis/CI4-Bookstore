<?php
// Page: components/buttons/border_button
// Data contract:
// $disable: boolean | null
// $href: string | null
// $label: string | null
// $dark: boolean | null
?>

<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-[#666] text-[#bbb] cursor-not-allowed px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200 opacity-50 border-2 border-[#c7bbb0]">
        <?= esc($label ?? 'Border') ?>
    </a>
<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block border-2 border-[#c7bbb0] text-[#c7bbb0] hover:bg-[#c7bbb0] hover:text-[#3c2f2f] px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200">
        <?= esc($label ?? 'Border') ?>
    </a>
<?php else: ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block border-2 border-[#c7bbb0] text-[#c7bbb0] hover:bg-[#c7bbb0] hover:text-[#3c2f2f] px-5 py-2 rounded-md font-semibold text-sm transition-transform duration-200">
        <?= esc($label ?? 'Border') ?>
    </a>
<?php endif; ?>