<nav style="background-color: #555555;" class="py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
        <div>
            <img src="{{ asset('images/logo/logotype.png') }}" alt="LogoType PlayLog" class="h-8">
        </div>
        <ul class="flex space-x-6 text-white">
            <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-[#0cbd66]' : 'hover:text-[#0cbd66]' }}">Home</a></li>
            <li><a href="{{ route('pengelolaan') }}" class="{{ request()->routeIs('pengelolaan') ? 'text-[#0cbd66]' : 'hover:text-[#0cbd66]' }}">Games</a></li>
            <li><a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'text-[#0cbd66]' : 'hover:text-[#0cbd66]' }}">Profile</a></li>
        </ul>
    </div>
</nav>
