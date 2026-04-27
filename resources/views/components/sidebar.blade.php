<aside class="fixed top-0 left-0 h-screen w-64 bg-primary text-secondary shadow-lg flex flex-col">

    <div class=" flex items-center gap-3 px-4 border-b border-white/10">
        <img src="{{ asset('images/logo.png') }}" 
         alt="Logo" 
        class="w-13 h-13 object-contain">
    </div>

    <nav class="flex-1 px-4 py-6 space-y-6 text-sm">

        <div>
            <p class="text-base opacity-70 mb-2">Menu</p>
            
            <a href="{{ route('dashboards.store') }}"
               class="flex items-center font-bold gap-3 px-4 py-2 rounded-lg
               {{ request()->routeIs('dashboards.*') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                <i class="fa-solid fa-house"></i>
                Dashboard
            </a>

            <a href="{{ route('properties.store') }}"
               class="flex items-center font-bold gap-3 px-4 py-2 rounded-lg
               {{ request()->routeIs('properties.*') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                <i class="fas fa-building "></i>
                Properties
            </a>

            <a href="{{ route('units.store') }}"
               class="flex items-center font-bold gap-3 px-4 py-2 rounded-lg
               {{ request()->routeIs('units.*') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                <i class="fa-solid fa-door-open"></i>
                Units
            </a>

            <a href="{{ route('tenants.store') }}"
               class="flex items-center font-bold gap-3 px-4 py-2 rounded-lg
               {{ request()->routeIs('tenants.*') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                <i class="fa-solid fa-users"></i>
                Tenants
            </a>

            <a href="{{ route('leases.store') }}"
               class="flex items-center font-bold gap-3 px-4 py-2 rounded-lg
               {{ request()->routeIs('leases.*') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                <i class="fa-solid fa-key"></i>
                Leases
            </a>

            <a href="{{ route('payments.store') }}"
               class="flex items-center font-bold gap-3 px-4 py-2 rounded-lg
               {{ request()->routeIs('payments.*') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                <i class="fa-solid fa-credit-card"></i>
                Payments
            </a>

            <a href="{{ route('maintenance-requests.store') }}"
               class="flex items-center font-bold  gap-3 px-4 py-2 rounded-lg
               {{ request()->routeIs('maintenance-requests.*') ? 'bg-white/20' : 'hover:bg-white/10' }}">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                Maintenance
            </a>
        </div>

       

        <div>
            <p class="text-base opacity-70 mb-2">Help and Support</p>

            <a href="/settings"
               class="flex items-center gap-3 px-4 py-2 font-bold rounded-lg hover:bg-white/10 {{ request()->routeIs('settings') ? 'bg-white/20' : '' }}">
                <i class="fa-solid fa-gear"></i>
                Settings
            </a>
        </div>

    </nav>

    <div class="p-4 border-t border-white/10">
        <form method="POST" action="#">
            @csrf
            <button class="w-full flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-red-500/20">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </button>
        </form>
    </div>

</aside>