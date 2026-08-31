
    <!-- Header -->
    <header class="header py-5 mb-4 sticky top-0 z-50 bg-background" x-data="{ mobileMenuOpen: false, contactModalOpen: false , admissionModalOpen: false}">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="flex justify-between items-center">
                
                <!-- branding -->
                <x-theme::branding/>
            
                <!-- Desktop Menu -->
                <x-theme::navigation.menu-bar/>

            </div>

            <!-- Mobile Menu -->
            <x-theme::navigation.mobile/>

            <!-- Modals -->
            <x-system::modals.contact/>
            <x-system::modals.admission-enquiry/>

        </div>

    </header>