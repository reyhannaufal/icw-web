<nav x-data="{ open: false }" class="z-50 bg-white border-b border-gray-100">
    @include('dashboard.navbar.window', compact('messages_count', 'ungraded_paper_count', 'event'))
    @include('dashboard.navbar.phone', compact('messages_count', 'ungraded_paper_count', 'event'))
</nav>
