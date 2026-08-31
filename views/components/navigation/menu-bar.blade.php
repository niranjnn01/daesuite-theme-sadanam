<!-- Desktop Navigation -->
<nav class="hidden md:block">
    <ul class="flex space-x-8  text-lg">
        <li><a href="/" class=" hover:text-primary transition-colors">Home</a></li>
        <li><a href="/about" class=" hover:text-primary transition-colors">About</a></li>
        <li><a href="/branches" class=" hover:text-primary transition-colors">Branches</a></li>
        <li><a href="/gallery" class=" hover:text-primary transition-colors">Gallery</a></li>
        <li><a href="/contact" class=" hover:text-primary transition-colors">Contact</a></li>
    </ul>
</nav>

<!-- Mobile Hamburger Button -->
<button
    @click="mobileMenuOpen = !mobileMenuOpen"
    class="md:hidden p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary"
    aria-label="Toggle menu"
>
    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
</button>