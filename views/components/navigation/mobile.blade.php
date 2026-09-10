<nav
    x-show="mobileMenuOpen"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform -translate-y-2"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform -translate-y-2"
    @click.away="mobileMenuOpen = false"
    class="md:hidden mt-4 pb-4 border-t pt-4"
>
    <ul class="flex flex-col space-y-4">
        <li><a href="/" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">Home</a></li>
        <li><a href="/about" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">About</a></li>
        <li><a href="/branches" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">Branches</a></li>
        <li><a href="/gallery" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">Gallery</a></li>
        <li><a href="/contact" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">Contact</a></li>
    </ul>
</nav>