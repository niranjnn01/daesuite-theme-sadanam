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
        <li><a href="/" @click="mobileMenuOpen = false" class="block text-lg hover:text-yellow-600 transition-colors py-2">Home</a></li>
        <li><a href="/about" @click="mobileMenuOpen = false" class="block text-lg hover:text-yellow-600 transition-colors py-2">About</a></li>
        <li>
            <button
                @click="mobileMenuOpen = false; contactModalOpen = true"
                class="text-lg hover:text-yellow-600 transition-colors hover:cursor-pointer py-2 text-left w-full">
                Contact
            </button>
        </li>
        <li>
            <button
                @click="mobileMenuOpen = false; admissionModalOpen = true"
                class="text-lg hover:text-yellow-600 transition-colors hover:cursor-pointer py-2 text-left w-full">
                Admisssion
            </button>
        </li>
        <li><a href="/events" @click="mobileMenuOpen = false" class="block text-lg hover:text-primary transition-colors py-2">Events</a></li>
        <li><a href="/gallery" @click="mobileMenuOpen = false" class="block text-lg hover:text-yellow-600 transition-colors py-2">Gallery</a></li>
    </ul>
</nav>