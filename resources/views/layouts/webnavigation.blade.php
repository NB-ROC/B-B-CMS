<header class="w-full text-sm mb-6 not-has-[nav]:hidden p-6" style="background-color: {{ \Illuminate\Support\Facades\Auth::user()->bnb->scheme->primaryColor->color_code }}">
    @if (Route::has('login'))
        <nav class="flex items-center justify-between">
            <div class="flex flex-row gap-4">
                <a class="text-black bg-gray-100 rounded-3xl p-4 mr-12" href="{{ url('/') }}"><h2>Logo</h2></a>
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/">Boeken</x-nav-link>
                <x-nav-link href="/">Activiteiten</x-nav-link>
                <x-nav-link href="/">Foto's</x-nav-link>
                <x-nav-link href="{{ route('contact.create') }}">Contact</x-nav-link>
            </div>
            <div>
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal bg-gray-400"
                        style="color: {{ \Illuminate\Support\Facades\Auth::user()->bnb->scheme->textColor->color_code }}"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        style="color: {{ \Illuminate\Support\Facades\Auth::user()->bnb->scheme->textColor->color_code }}"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:bg-gray-300 hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </nav>
    @endif
</header>
