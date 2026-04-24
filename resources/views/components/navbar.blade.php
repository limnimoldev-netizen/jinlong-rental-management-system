<nav class="fixed top-0 left-64 right-0 h-16 bg-primary text-secondary shadow-md flex items-center justify-between px-6 border-b border-white/10 z-50">

    <div class="flex items-center gap-3 w-full max-w-md">

        <div class="relative w-full">
            <input type="text" placeholder="Search..."
                class="w-full bg-white text-sm px-4 py-2 pl-10 rounded-lg outline-none focus:bg-white/20">

            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 text-black -translate-y-1/2 text-sm "></i>
        </div>

    </div>

    <div class="flex items-center gap-4">

        <button class="relative hover:bg-white/10 p-2 rounded-lg">
            <i class="fa-solid fa-bell text-lg"></i>
        </button>

        <div class="flex items-center gap-3 px-3 py-1 rounded-lg hover:bg-white/10 cursor-pointer">

            <div class="leading-tight">
                <p class="text-sm font-semibold">
                    {{ Auth::user()->name ?? 'nimol' }}
                </p>
                <p class="text-xs opacity-70">
                    {{ Auth::user()->email ?? 'apaav@gmail.com' }}
                </p>
            </div>

            <!-- <i class="fa-solid fa-chevron-down text-xs opacity-70"></i> -->

        </div>

    </div>

</nav>