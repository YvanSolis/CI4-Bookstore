<?php
// Required: $accounts is now coming from the controller
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Accounts | Achlys' Bookstore Admin</title>
    <link rel="shortcut icon" type="image/png" href="/assets/bookstore_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto Slab', serif;
            background-color: #f9f8f6;
        }

        .header-title {
            font-family: "Righteous", sans-serif;
            font-weight: 400;
        }

        .dashboard-header {
            background-color: #E15A37;
            color: #fff;
        }

        .sidebar {
            background-color: #E15A37;
            color: #fff;
        }

        .sidebar-link {
            transition: all 0.2s ease;
        }

        .sidebar-link:hover {
            background-color: #ED865A;
            color: #fff;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(225, 90, 55, 0.3);
        }

        .accent-yellow {
            background-color: #FCE77C;
        }
    </style>
</head>

<body class="flex min-h-screen">

    <main class="flex-1 bg-white/90 backdrop-blur-sm">

        <!-- Header -->
        <header class="flex justify-between items-center shadow-md px-6 py-4 dashboard-header">
            <h1 class="text-3xl tracking-wide header-title">Book Requests</h1>
            <div class="flex items-center space-x-4">
                <span class="font-semibold">Welcome, <?= esc($adminFirstName ?? 'Admin') ?></span>
            </div>
        </header>

        <div class="bg-white shadow-xl mx-auto mt-6 p-8 border border-[#FCE77C] rounded-2xl max-w-7xl card-hover">

            <div class="flex justify-between items-center mb-8">
                <h2 class="font-bold text-[#E15A37] text-4xl header-title">👥 Manage Accounts</h2>

                <!-- Open Modal -->
                <a onclick="openAddModal()"
                    class="hover:bg-[#ED865A] px-6 py-3 rounded-full font-semibold text-lg transition accent-yellow cursor-pointer">
                    ➕ Add New User
                </a>
            </div>

            <!-- Accounts Table -->
            <div class="overflow-x-auto">
                <table class="bg-white border border-[#FCE77C] rounded-xl min-w-full overflow-hidden">
                    <thead class="bg-[#E15A37] text-white">
                        <tr>
                            <th class="px-6 py-3">User ID</th>
                            <th class="px-6 py-3">Full Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3 text-center">Role</th>
                            <th class="px-6 py-3 text-center">Status</th>
                            <th class="px-6 py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-[#FCE77C]">

                        <?php foreach ($accounts as $user): ?>
                            <tr class="hover:bg-[#FFF8E7] transition">

                                <!-- USER ID -->
                                <td class="px-6 py-4 text-gray-800">
                                    USR-<?= esc($user->id) ?>
                                </td>

                                <!-- FULL NAME -->
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    <?= esc(trim($user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name)) ?>
                                </td>

                                <!-- EMAIL -->
                                <td class="px-6 py-4 text-gray-700">
                                    <?= esc($user->email) ?>
                                </td>

                                <!-- ROLE -->
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 rounded-full text-sm font-semibold
                    <?= $user->type === 'admin' ? 'bg-[#E15A37] text-white' : 'bg-[#FCE77C] text-gray-800' ?>">
                                        <?= ucfirst(esc($user->type)) ?>
                                    </span>
                                </td>

                                <!-- STATUS -->
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 rounded-full text-sm font-semibold
                    <?= $user->account_status == 1 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
                                        <?= $user->account_status == 1 ? 'Active' : 'Suspended' ?>
                                    </span>
                                </td>

                                <!-- ACTIONS -->
                                <td class="px-6 py-4 text-center">
                                    <a href="/admin/accounts/edit/<?= esc($user->id) ?>"
                                        class="mx-2 font-semibold text-[#E15A37] hover:text-[#ED865A]">✏️ Edit</a>

                                    <a href="/admin/accounts/delete/<?= esc($user->id) ?>"
                                        class="mx-2 font-semibold text-red-500 hover:text-red-600"
                                        onclick="return confirm('Are you sure you want to delete this account?')">
                                        🗑️ Delete
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>

        </div>

    </main>

    <!-- Sidebar -->
    <aside class="flex flex-col w-64 sidebar">
        <div class="p-6 border-[#FCE77C] border-b text-center">
            <img src="/assets/fenecircle_logo.png" class="w-16 mx-auto mb-3">
            <h2 class="text-white text-2xl header-title">Admin Panel</h2>
        </div>

        <nav class="flex-1 space-y-2 p-4">
            <a href="/admin/adminDashboard" class="sidebar-link block px-4 py-3 rounded-lg">📊 Dashboard</a>
            <a href="/admin/stockPage" class="sidebar-link block px-4 py-3 rounded-lg">📚 Stocks Page</a>
            <a href="/admin/accountsPage" class="sidebar-link block bg-[#ED865A]/30 px-4 py-3 rounded-lg">👤 Accounts Page</a>
            <a href="/admin/requestPage" class="sidebar-link block px-4 py-3 rounded-lg">📝 Requests Page</a>
        </nav>
    </aside>

    <!-- ADD ACCOUNT MODAL -->
    <dialog id="addAccountModal" class="p-0 rounded-2xl w-[95%] max-w-lg backdrop:bg-black/60">

        <form method="post" action="/admin/accounts/create"
            class="bg-white p-6 rounded-2xl border border-[#FCE77C] shadow-xl space-y-4">
            <?= csrf_field() ?>

            <h3 class="mb-4 font-bold text-[#E15A37] text-3xl header-title">Add New Account</h3>

            <div class="grid grid-cols-1 gap-3">
                <input type="text" name="first_name" class="border border-[#FCE77C] px-3 py-2 rounded-lg" placeholder="First Name" required>
                <input type="text" name="middle_name" class="border border-[#FCE77C] px-3 py-2 rounded-lg" placeholder="Middle Name">
                <input type="text" name="last_name" class="border border-[#FCE77C] px-3 py-2 rounded-lg" placeholder="Last Name" required>
                <input type="email" name="email" class="border border-[#FCE77C] px-3 py-2 rounded-lg" placeholder="Email" required>
                <input type="password" name="password" class="border border-[#FCE77C] px-3 py-2 rounded-lg" placeholder="Password" required>
                <input type="password" name="password_confirm" class="border border-[#FCE77C] px-3 py-2 rounded-lg" placeholder="Confirm Password" required>

                <select name="type" class="border border-[#FCE77C] px-3 py-2 rounded-lg" required>
                    <option value="client">Client</option>
                    <option value="admin">Admin</option>
                </select>

                <input type="hidden" name="account_status" value="1">
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeAddModal()" class="px-4 py-2 rounded-lg bg-gray-300 text-gray-700 font-semibold hover:bg-gray-400">
                    Cancel
                </button>
                <button type="submit" class="px-6 py-2 rounded-lg bg-[#E15A37] text-white font-semibold hover:bg-[#ED865A]">
                    Create
                </button>
            </div>
        </form>

    </dialog>

    <script>
        function openAddModal() {
            document.getElementById('addAccountModal').showModal();
        }

        function closeAddModal() {
            document.getElementById('addAccountModal').close();
        }
    </script>


</body>

</html>