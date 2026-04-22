<header
    class="bg-orange text-white opacity-90 fixed top-0 left-0 w-full z-50 flex justify-between items-center px-3 sm:px-6 h-14">

    <div class="flex items-center cursor-pointer">
        <img src="{{ asset('assets/images/logo_branca.png') }}" alt="logo" class="w-16 sm:w-20 h-8 sm:h-10">
    </div>

    <div class="hidden sm:flex flex-1 justify-center px-4">
        <form action="" class="w-full max-w-md">
            <div class="flex items-center border-[1.5px] border-black rounded-full overflow-hidden bg-white h-10 w-full">

                <input type="text" placeholder="Procurar Receitas"
                    class="px-4 h-full text-black outline-none bg-white w-full">

                <button type="submit"
                    class="bg-orange h-full px-5 border-l-[1.5px] border-black flex items-center justify-center cursor-pointer">
                    <i class="fa-brands fa-sistrix text-white text-lg"></i>
                </button>

            </div>
        </form>
    </div>

    <div class="flex items-center gap-4 sm:gap-6">
        <a href="http://" class="cursor-pointer">
            <i class="fa-regular fa-circle-user text-2xl sm:text-3xl"></i>
        </a>

        <a href="http://" class="cursor-pointer">
            <i class="fa-solid fa-bars text-2xl sm:text-3xl"></i>
        </a>
    </div>

</header>