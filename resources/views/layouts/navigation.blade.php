<nav class="bg-blue-900 h-screen w-fit pl-4 pr-4 pt-2 flex flex-col justify-around min-h-screen">
    <a class="bg-white rounded-3xl p-4 self-center" href="{{ route('dashboard') }}">
        <h2 class="font-semibold">Dashboard</h2>
    </a>
    <a class="bg-white rounded-3xl p-4 self-center" href="{{ route('contact.index') }}">
        <h2 class="font-semibold">Contact</h2>
    </a>
    <a class="bg-white rounded-3xl p-4 self-center" href="/">
        <h2 class="font-semibold">Calender</h2>
    </a>
    <a class="bg-white rounded-3xl p-4 self-center" href="/">
        <h2 class="font-semibold">Media</h2>
    </a>
</nav>
<div class="absolute sm:flex sm:items-center sm:ms-6 top-0 right-0">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>

                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>
