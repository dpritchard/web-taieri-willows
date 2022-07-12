<!DOCTYPE html>
<html lang="en">
    @include('_layouts.partials.head')

    <body class="flex flex-col min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex container justify-between max-w-4xl mx-auto py-2 px-4">
            <a href="{{ $page->baseUrl }}" title="{{ $page->siteName }} Home" class="inline-flex flex-1 items-center">
                <!-- <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" /> -->
                <h1 class="font-bold hover:text-emerald-700 my-0">{{ $page->siteName }}</h1>
            </a>
            <!-- @include('_layouts.partials.menu-toggle') -->
        </header>

        <main role="main" class="flex flex-col lg:flex-row container max-w-4xl mx-auto px-6 lg:px-2">
            <nav id="nav-menu" 
                 class="pb-3 mb-2 border-b-2 border-slate-200
                        lg:flex lg:flex-col lg:border-r-2 lg:border-b-0 lg:pr-4 lg:mr-4 lg:pb-0">
                @include('_layouts.partials.menu')
            </nav>
            <div class="">
                 @yield('body')
            </div>
        </main>

        <footer class="text-center text-sm mt-12 max-w-4xl mx-auto py-4" role="contentinfo">
            <ul class="md:flex-row justify-center list-none">
                <li>
                    © FOTW {{ date("Y") }}
                </li>
            </ul>
        </footer>

        <script src="{{ $page->fullUrl('/assets/build/js/main.js') }}"></script>

        @stack('scripts')
    </body>
</html>
