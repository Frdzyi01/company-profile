<nav id="navbar" class="w-full h-auto absolute top-0 left-0 z-30">
    <section id="navbar-content" class="w-full h-auto flex justify-between items-center text-white py-5 px-5 lg:px-16">
        <div class="navbar-brand flex space-x-3">
            <img src="{{ asset('client-assets/img/company-information/logo.png') }}" alt="TMJ Logo" class="w-14 h-14">
            <div class="brand-name flex flex-col justify-center font-semibold text-lg">
                <p class="tracking-[0.2em]">MRS</p>
                <p class="border-t-2 border-t-primary-main">Mili Raftel Samudra</p>
            </div>
        </div>
        <div class="sidebar-button lg:hidden" id="humburger-menu">
            <i class="fa-solid fa-bars text-2xl"></i>
        </div>
        <div id="overlay-sidebar" class="overlay-sidebar w-full h-screen fixed top-0 right-0 bg-black opacity-70 hidden"></div>
        <div id="sidebar" class="sidebar-menu w-3/4 h-screen bg-primary-main fixed top-0 right-0 translate-x-full duration-300">
            <div id="close-button-sidebar" class="close-button-sidebar absolute top-5 right-5">
                <i class="fa-solid fa-xmark text-2xl text-white"></i>
            </div>
            <div class="sidebar-menu w-full h-full">
                <ul class="flex flex-col pt-20">
                    <li class="border-b border-white w-full h-full">
                        <a href="" class="w-full h-full py-3 flex items-center space-x-2 px-5">
                            <i class="fa-solid fa-house"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="border-b border-white w-full h-full">
                        <a href="" class="w-full h-full py-3 flex items-center space-x-2 px-5">
                            <i class="fa-solid fa-globe"></i>
                            <p>Tentang Kami</p>
                        </a>
                    </li>
                    <li class="border-b border-white w-full h-full">
                        <a href="" class="w-full h-full py-3 flex items-center space-x-2 px-5">
                            <i class="fa-solid fa-building"></i>
                            <p>Bidang Usaha</p>
                        </a>
                    </li>
                    <li class="border-b border-white w-full h-full">
                        <a href="" class="w-full h-full py-3 flex items-center space-x-2 px-5">
                            <i class="fa-solid fa-file-invoice"></i>
                            <p>Portofolio</p>
                        </a>
                    </li>
                    <li class="border-b border-white w-full h-full">
                        <a href="" class="w-full h-full py-3 flex items-center space-x-2 px-5">
                            <i class="fa-solid fa-phone"></i>
                            <p>Kontak Kami</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="navbar-menu h-auto items-center w-max space-x-8 text-lg hidden lg:flex">
            <li class="navbar-items py-1 relative before:absolute before:w-full before:h-full before:top-0 before:left-0 before:border-b-2 before:border-b-primary-main before:-z-10 z-10 h-full overflow-x-hidden hover:before:-translate-x-0 before:duration-300">
                <a href="" class="py-1">
                    Beranda
                </a>
            </li>
            <li class="navbar-items py-1 relative before:absolute before:w-full before:h-full before:top-0 before:left-0 before:border-b-2 before:border-b-primary-main before:-z-10 z-10 h-full before:-translate-x-full overflow-x-hidden hover:before:-translate-x-0 before:duration-300">
                <a href="" class="py-1">
                    Tentang Kami
                </a>
            </li>
            <li class="navbar-items py-1 relative before:absolute before:w-full before:h-full before:top-0 before:left-0 before:border-b-2 before:border-b-primary-main before:-z-10 z-10 h-full before:-translate-x-full overflow-x-hidden hover:before:-translate-x-0 before:duration-300">
                <a href="" class="py-1">
                    Bidang Usaha
                </a>
            </li>
            <li class="navbar-items py-1 relative before:absolute before:w-full before:h-full before:top-0 before:left-0 before:border-b-2 before:border-b-primary-main before:-z-10 z-10 h-full before:-translate-x-full overflow-x-hidden hover:before:-translate-x-0 before:duration-300">
                <a href="" class="py-1">
                    Portofolio
                </a>
            </li>
            <li class="navbar-items py-1 relative before:absolute before:w-full before:h-full before:top-0 before:left-0 before:border-b-2 before:border-b-primary-main before:-z-10 z-10 h-full before:-translate-x-full overflow-x-hidden hover:before:-translate-x-0 before:duration-300">
                <a href="" class="py-1">
                    Kontak Kami
                </a>
            </li>
        </ul>
    </section>
</nav>
