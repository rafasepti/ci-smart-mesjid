<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Smart Mesjid</title>
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body class="p-8">
<!-- Tombol Buka Modal -->
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
    Buka Modal
</button>

<!-- Modal Flowbite -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full">
        <div class="flex items-center justify-between p-4 border-b rounded-t">
            <h3 class="text-xl font-semibold">Modal Title</h3>
            <button type="button" class="text-gray-500 hover:bg-gray-200 rounded-full p-1.5" data-modal-hide="defaultModal">
                &times;
            </button>
        </div>
        <div class="p-6">
            <p class="text-base">Isi dari modal ini.</p>
        </div>
        <div class="flex justify-end p-4 border-t">
            <button data-modal-hide="defaultModal" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Tutup</button>
        </div>
    </div>
</div>

<!-- Flowbite JS -->
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</body>
</html>
