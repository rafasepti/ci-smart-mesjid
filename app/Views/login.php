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

        <div class="hidden lg:block lg:w-7/12">
            <div class="w-full h-full bg-cover bg-center"
                style="background-image: url('<?= base_url('img/masjid.png') ?>');">
            </div>
        </div>

        <!-- Form -->
        <div class="w-full lg:w-5/12 p-6 sm:p-10">
            <div class="text-center">
                <img src="<?= base_url('img/logo-bank-sumut.png') ?>" class="w-48 mx-auto mb-4" />
                <h1 class="text-2xl font-bold">Masuk ke Akun</h1>
            </div>

            <div class="mt-8 space-y-5">
                <input
                    class="w-full px-5 py-3 rounded-lg border border-gray-300 placeholder-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="email" placeholder="Email" />

                <div class="relative w-full">
                    <input
                        id="password"
                        type="password"
                        placeholder="Kata Sandi"
                        class="w-full px-5 py-3 pr-10 rounded-lg border border-gray-300 placeholder-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <button
                        type="button"
                        onclick="togglePassword()"
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>

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
                        class="hover:scale-105 ease-in-out duration-300 shadow-lg px-10 py-4 rounded-lg m-1 ring-1 ring-gray-100">
                        <img
                            class="max-w-[25px]"
                            src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/"
                            alt="Google" />
                    </button>
                    <button
                        href="#"
                        class="hover:scale-105 ease-in-out duration-300 shadow-lg px-10 py-4 rounded-lg m-1 ring-1 ring-gray-100">
                        <img
                            class="max-w-[25px]"
                            src="https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/"
                            alt="Facebook" />
                    </button>
                    <button
                        href="#"
                        class="hover:scale-105 ease-in-out duration-300 shadow-lg px-10 py-4 rounded-lg m-1 ring-1 ring-gray-100">
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
            </div>
        </div>
    </div>

</body>

<script>
  function togglePassword() {
    const input = document.getElementById("password");
    const icon = document.getElementById("eyeIcon");
    if (input.type === "password") {
      input.type = "text";
      icon.innerHTML = `
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.26-3.592m1.794-1.682A9.959 9.959 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.963 9.963 0 01-4.293 5.227M3 3l18 18" />
      `;
    } else {
      input.type = "password";
      icon.innerHTML = `
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
      `;
    }
  }
</script>
</html>