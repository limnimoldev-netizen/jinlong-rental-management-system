<x-navbar />

<div style="display:flex;">
    <x-sidebar />

    <div style="padding:20px; width:100%;">
        @yield('content')
    </div>
</div>