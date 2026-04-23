<nav class="h-16 fixed top-0 left-64 right-0 flex items-center justify-between px-6 shadow"
     style="background:#9b8384; color:#f6f4f0;">

    <div class="font-semibold">
        Dashboard
    </div>

    <form method="POST" action="#">
        @csrf
        <button class="bg-white/20 px-4 py-1 rounded hover:bg-white/30">
            Logout
        </button>
    </form>

</nav>