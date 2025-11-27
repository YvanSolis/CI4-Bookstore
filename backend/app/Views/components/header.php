<?php
// Component: components/header.php
// $brandTitle: string
// $brandTagline: string|null
// $logo: string|null

$session = \Config\Services::session();
?>
<header class="top-0 z-50 sticky bg-[#8B7E74] shadow-lg text-gray-100">
    <div class="flex justify-between items-center mx-auto px-4 py-6 max-w-7xl">
        <!-- Brand -->
        <div class="flex items-center space-x-3">
            <img src="<?= esc($logo ?? '/assets/circle_logo.png') ?>" alt="<?= esc($brandTitle ?? 'Achlys Bookstore') ?>" class="w-10 md:w-12 h-10 md:h-12">
            <div>
                <h1 class="font-bold text-3xl md:text-4xl tracking-wider" style="font-family: 'Righteous', sans-serif;"><?= esc($brandTitle ?? 'Achlys Bookstore') ?></h1>
                <?php if (!empty($brandTagline)): ?>
                    <p class="text-gray-200 text-sm"><?= esc($brandTagline) ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Navigation + User Actions (Desktop) -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="/" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Home</a>
            <a href="/moodboardPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Moodboard</a>
            <a href="/roadmapPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Roadmap</a>

            <?php if (!$session->has('user')): ?>
                <a href="/loginPage" class="inline-block bg-[#A99D92] hover:opacity-80 shadow-lg px-6 py-3 rounded-full text-[#FCFFF1]">Login</a>
            <?php else: ?>
                <form action="/logout" method="post">
                    <button type="submit" class="inline-block bg-[#A99D92] hover:opacity-80 shadow-lg px-6 py-3 rounded-full text-[#FCFFF1]">Logout</button>
                </form>
            <?php endif; ?>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuButton" class="md:hidden text-gray-100 text-3xl">☰</button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-[#8B7E74]">
        <a href="/" class="block hover:bg-[#9EC590]/20 px-6 py-3 text-[#FCFFF1]">Home</a>
        <a href="/moodboardPage" class="block hover:bg-[#9EC590]/20 px-6 py-3 text-[#FCFFF1]">Moodboard</a>
        <a href="/roadmapPage" class="block hover:bg-[#9EC590]/20 px-6 py-3 text-[#FCFFF1]">Roadmap</a>

        <?php if (!$session->has('user')): ?>
            <a href="/login" class="inline-block bg-[#A99D92] hover:opacity-80 shadow-lg px-6 py-3 rounded-full text-[#FCFFF1]">Login</a>
        <?php else: ?>
            <form action="/logout" method="post" class="px-6 py-3 text-right">
                <button type="submit" class="inline-block bg-[#A99D92] hover:opacity-80 shadow-lg px-6 py-3 rounded-full text-[#FCFFF1]">Logout</button>
            </form>
        <?php endif; ?>
    </div>

    <script>
        const btn = document.getElementById('mobileMenuButton');
        const menu = document.getElementById('mobileMenu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</header>