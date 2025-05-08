<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Smart Mesjid</title>
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>

<body class="min-h-screen m-0 bg-gradient-to-b from-primary-blue via-white to-primary-yellow flex items-center justify-center">

    <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg overflow-hidden flex flex-col lg:flex-row">

        <!-- Gambar (sembunyi di layar kecil) -->
        <div class="hidden lg:block lg:w-1/2">
            <div class="w-full h-full bg-cover bg-center"
                style="background-image: url('<?= base_url('img/masjid.png') ?>');">
            </div>
        </div>

        <!-- Form -->
        <div class="w-full lg:w-1/2 p-6 sm:p-10">
            <div class="text-center">
                <img src="<?= base_url('img/logo-bank-sumut.png') ?>" class="w-32 mx-auto mb-4" />
                <h1 class="text-2xl font-extrabold">Masuk ke Akun</h1>
            </div>

            <div class="mt-8 space-y-5">
                <input
                    class="w-full px-5 py-3 rounded-lg bg-gray-100 border border-gray-300 placeholder-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="email" placeholder="Email" />

                <input
                    class="w-full px-5 py-3 rounded-lg bg-gray-100 border border-gray-300 placeholder-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="password" placeholder="Kata Sandi" />

                <div class="flex flex-wrap -mx-4 mb-6 items-center justify-end">
                    <div class="w-full lg:w-auto px-4"><a class="inline-block text-sm font-semibold hover:underline" href="#">Lupa Kata Sandi?</a></div>
                </div>

                <div class="my-6 border-b-2 border-gray-300 text-center">
                    <div
                        class="leading-none px-2 inline-block text-sm tracking-wide font-normal bg-white transform translate-y-1/2">
                        Masuk Dengan Akun
                    </div>
                </div>

                <div
                    id="third-party-auth"
                    class="flex items-center justify-center mt-5 flex-wrap">
                    <button
                        href="#"
                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                        <img
                            class="max-w-[25px]"
                            src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/"
                            alt="Google" />
                    </button>
                    <button
                        href="#"
                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                        <img
                            class="max-w-[25px]"
                            src="https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/"
                            alt="Facebook" />
                    </button>
                    <button
                        href="#"
                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                        <img
                            class="max-w-[25px] dark:gray-100"
                            src="https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/"
                            alt="twitter" />
                    </button>
                </div>

                <button
                    class="w-full flex items-center justify-center bg-primary-blue text-white py-3 rounded-lg hover:bg-primary-blue-200 transition duration-300">
                    Masuk ke Akun
                </button>

                <p class="text-xs text-center text-gray-600 mt-6">
                    I agree to abide by templatana's
                    <a href="#" class="border-b border-gray-500">Terms of Service</a> and
                    <a href="#" class="border-b border-gray-500">Privacy Policy</a>.
                </p>
            </div>
        </div>
    </div>

</body>

</html>