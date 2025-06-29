<!-- resources/views/layouts/partials/navbar.blade.php -->
<nav class="navbar">
    <div class="navbar-brand">
        <img src="{{ asset('assets/logo-chatcit.png') }}" alt="Logo">
        <span>CHATCIT.AI</span>
    </div>
    <div class="nav-links">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
        <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        <span class="divider">|</span>
        <a href="{{ url('/support') }}" class="{{ request()->is('support') ? 'active' : '' }}">Support</a>
    </div>
</nav>