<?php
// Component: components/cards/info_card.php
// Data contract:
// $content: string (HTML content inside the card)
// $link: string|null (optional button link)
?>

<div class="flex flex-col bg-white shadow-lg hover:shadow-2xl p-8 border border-gray-200/50 rounded-2xl transition-all duration-300 card-hover">
    <div class="flex-grow text-center">
        <?php echo $content ?? ''; ?>
    </div>

    <?php if (!empty($link)): ?>
        <a href="<?php echo esc($link); ?>"
            class="mt-4 inline-block bg-[#8B7E74] hover:bg-[#A99D92] text-white px-4 py-2 rounded-full font-semibold text-sm transition">
            Read more
        </a>
    <?php endif; ?>
</div>