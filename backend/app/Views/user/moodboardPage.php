<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore – Mood Board</title>
    <link rel="shortcut icon" type="image/png" href="/assets/bookstore_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@400;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: "Roboto Slab", serif;
        }

        .header-title,
        h1,
        h2,
        h3,
        h4,
        .heading {
            font-family: "Righteous", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        button,
        a.btn-main {
            transition: all 0.3s ease;
        }

        button:hover,
        a.btn-main:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(139, 126, 116, 0.3);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-[#F5F0EC] to-[#E8E1DB] text-[#3c2f2f] flex flex-col min-h-screen">

    <!-- HEADER -->
    <?= view('components/header.php') ?>

    <!-- Page content container -->
    <div class="flex-grow px-4 md:px-20 py-10 max-w-[1400px] mx-auto w-full">
        <!-- Hero Section: Full-width intro with overlay -->
        <section class="relative bg-[#8B7E74] text-white rounded-2xl p-12 md:p-16 mb-16 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-[#8B7E74]/20 to-[#C7BBB0]/20"></div>
            <div class="relative z-10 text-center max-w-4xl mx-auto">
                <h1 class="font-['Righteous'] text-4xl md:text-6xl mb-6 leading-tight">Achlys’ Bookstore Moodboard</h1>
                <p class="text-xl md:text-2xl font-light">Visual identity guide for Achlys Bookstore – Where stories come alive in warm, timeless tones.</p>
            </div>
        </section>

        <!-- Dual-Column Layout: Colors and Typography Side-by-Side -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <!-- Color System -->
            <section class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-md order-2 lg:order-1">
                <h2 class="font-['Righteous'] text-[#3c2f2f] text-2xl md:text-3xl mb-6 text-center">Color System</h2>
                <p class="text-[#6c5c4c] text-lg mb-8 text-center">Three main color themes with three vibrance levels each, inspired by aged paper, warm earth tones, and timeless ink.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center">
                    <!-- Neutral Brown -->
                    <div class="flex flex-col items-center gap-4 text-center">
                        <div class="flex flex-row items-center justify-center gap-2 flex-wrap">
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#8B7E74] shadow-md"></div>
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#A99D92] shadow-md"></div>
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#C7BBB0] shadow-md"></div>
                        </div>
                        <p class="text-[#5a4b41] text-sm md:text-base mt-2">#8B7E74 — #A99D92 — #C7BBB0</p>
                        <p class="font-semibold text-[#3c2f2f] text-lg">Neutral Brown <span class="text-[#6b5c51] text-sm font-normal block">(Main Accent)</span></p>
                    </div>

                    <!-- Soft Beige -->
                    <div class="flex flex-col items-center gap-4 text-center">
                        <div class="flex flex-row items-center justify-center gap-2 flex-wrap">
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#F5F0EC] shadow-md border border-[#DAD3CC]"></div>
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#E8E1DB] shadow-md border border-[#DAD3CC]"></div>
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#DAD3CC] shadow-md border border-[#DAD3CC]"></div>
                        </div>
                        <p class="text-[#5a4b41] text-sm md:text-base mt-2">#F5F0EC — #E8E1DB — #DAD3CC</p>
                        <p class="font-semibold text-[#3c2f2f] text-lg">Soft Beige <span class="text-[#6b5c51] text-sm font-normal block">(Background)</span></p>
                    </div>

                    <!-- Charcoal Gray -->
                    <div class="flex flex-col items-center gap-4 text-center">
                        <div class="flex flex-row items-center justify-center gap-2 flex-wrap">
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#333333] shadow-md"></div>
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#555555] shadow-md"></div>
                            <div class="w-32 h-12 md:w-40 md:h-16 rounded-lg bg-[#777777] shadow-md"></div>
                        </div>
                        <p class="text-[#5a4b41] text-sm md:text-base mt-2">#333333 — #555555 — #777777</p>
                        <p class="font-semibold text-[#3c2f2f] text-lg">Charcoal Gray <span class="text-[#6b5c51] text-sm font-normal block">(Text)</span></p>
                    </div>
                </div>
            </section>

            <!-- Typography -->
            <section class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-md order-1 lg:order-2">
                <h2 class="font-['Righteous'] text-[#3c2f2f] text-2xl md:text-3xl mb-6 text-center">Typography</h2>
                <div class="space-y-8">
                    <div class="bg-gradient-to-br from-white to-[#F5F0EC] p-6 rounded-xl border border-[#DAD3CC] text-center">
                        <h3 class="font-['Righteous'] text-[#8b7e74] text-2xl md:text-3xl mb-3">Heading Font</h3>
                        <p class="font-['Righteous'] text-[#3c2f2f] text-lg">Righteous – Bold, evocative, and perfect for titles that draw you into the story.</p>
                    </div>
                    <div class="bg-gradient-to-br from-white to-[#F5F0EC] p-6 rounded-xl border border-[#DAD3CC]">
                        <h3 class="font-['Righteous'] text-[#8b7e74] text-xl md:text-2xl mb-3">Body Font</h3>
                        <p class="text-[#3c2f2f] text-base leading-relaxed">Roboto Slab – Serif elegance for immersive reading. Example text that demonstrates readable copy for longer paragraphs in Achlys Bookstore materials, evoking the feel of turning pages in a well-loved book.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Buttons: Horizontal Showcase -->
        <section class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 mb-16 shadow-md">
            <h2 class="font-['Righteous'] text-[#3c2f2f] text-2xl md:text-3xl mb-8 text-center">Interactive Elements: Buttons</h2>
            <div class="space-y-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <h3 class="font-semibold text-lg mb-6 text-[#3c2f2f]">Light Mode</h3>
                    <div class="flex flex-wrap justify-center items-center gap-6">
                        <?= view('components/buttons/primary_button', ['label' => 'Primary', 'href' => '#']) ?>
                        <?= view('components/buttons/second_button', ['label' => 'Secondary', 'href' => '#']) ?>
                        <?= view('components/buttons/border_button', ['label' => 'Border', 'href' => '#']) ?>
                        <?= view('components/buttons/primary_button', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
                    </div>
                </div>

                <div class="text-center bg-[#333333] p-8 rounded-xl">
                    <h3 class="font-semibold text-lg mb-6 text-white">Dark Mode</h3>
                    <div class="flex flex-wrap justify-center items-center gap-6">
                        <?= view('components/buttons/primary_button', ['label' => 'Primary', 'href' => '#', 'dark' => true, 'disable' => false]) ?>
                        <?= view('components/buttons/second_button', ['label' => 'Secondary', 'href' => '#', 'dark' => true]) ?>
                        <?= view('components/buttons/border_button', ['label' => 'Border', 'href' => '#', 'dark' => true]) ?>
                        <?= view('components/buttons/primary_button', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sample Cards: Featured Row with Full Emphasis -->
        <section class="mb-16">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 md:p-12 text-center shadow-md">
                <h2 class="mb-8 font-['Righteous'] text-[#8B7E74] text-3xl md:text-4xl">Card Samples</h2>
                <p class="text-[#6c5c4c] text-lg mb-12 max-w-3xl mx-auto">Modular components for showcasing books, stats, and testimonials with a cozy, inviting design.</p>
                <div class="grid gap-8 md:gap-12 grid-cols-1 md:grid-cols-3">
                    <?= view('components/cards/sample_cards', [
                        "content" => '
                        <h3 class="text-4xl font-bold text-[#8B7E74] mb-2">1,254</h3>
                        <p class="text-[#6c5c4c] mb-4">Books Sold This Month</p>
                        <p class="text-sm text-[#555555]">A milestone in our literary journey.</p>
                    ',
                        "link" => "#"
                    ]) ?>

                    <?= view('components/cards/sample_cards', [
                        "content" => '
                        <h3 class="text-2xl font-semibold text-[#3c2f2f] mb-2">Premium Collection</h3>
                        <p class="text-[#6c5c4c] mb-4">Limited edition hand-picked books for collectors.</p>
                        <p class="text-sm text-[#555555]">Discover rare gems today.</p>
                    ',
                        "link" => "#"
                    ]) ?>

                    <?= view('components/cards/sample_cards', [
                        "content" => '
                        <blockquote class="italic text-[#6c5c4c] mb-2 font-medium">“A cozy place for every book lover.”</blockquote>
                        <p class="text-[#555555] mb-4">— Loyal Customer</p>
                        <p class="text-sm text-[#777777]">Join our community of readers.</p>
                    ',
                        "link" => "#"
                    ]) ?>
                </div>
            </div>
        </section>

        <!-- Logos: Centered Footer-Like Section -->
        <section class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 md:p-12 text-center shadow-md">
            <h2 class="font-['Righteous'] text-[#3c2f2f] text-2xl md:text-3xl mb-8">Brand Logos</h2>
            <p class="text-[#6c5c4c] text-lg mb-12 max-w-2xl mx-auto">Versatile logo variations for digital and print use, symbolizing the circle of stories and the square of tradition.</p>
            <div class="flex justify-center items-center gap-12 flex-wrap">
                <div class="bg-white border border-[#DAD3CC] rounded-2xl p-8 text-center w-48 md:w-56 shadow-lg">
                    <img src="/assets/circle_logo.png" alt="Achlys Circle Logo"
                        class="w-20 h-20 md:w-24 md:h-24 mb-4 object-contain mx-auto">
                    <p class="text-[#3c2f2f] text-base font-medium">Main — Circle</p>
                    <p class="text-[#6c5c4c] text-sm">For favicons and social icons</p>
                </div>
                <div class="bg-white border border-[#DAD3CC] rounded-2xl p-8 text-center w-48 md:w-56 shadow-lg">
                    <img src="/assets/square_logo.png" alt="Achlys Square Logo"
                        class="w-20 h-20 md:w-24 md:h-24 mb-4 object-contain mx-auto">
                    <p class="text-[#3c2f2f] text-base font-medium">Main — Square</p>
                    <p class="text-[#6c5c4c] text-sm">For headers and print materials</p>
                </div>
            </div>
        </section>
    </div>

    <!-- FOOTER -->
    <?= view('components/footer.php') ?>

</body>

</html>