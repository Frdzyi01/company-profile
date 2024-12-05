<x-client.app-layout title="Home">
    <header id="header" class="w-full h-screen relative top-0 left-0">
        <section class="splide splide-header w-full h-full absolute top-0 left-0" aria-labelledby="carousel-heading">
            <div id="jumbotron-hero" class="splide__track w-full h-full">
                <ul class="splide__list w-full h-full absolute top-0 left-0">
                    <li class="splide__slide w-full h-full flex">
                        <img src="{{ asset('client-assets/img/landing/hero-1.jpg') }}" alt="Hero Image" width="1920" height="1080" class="w-full h-auto aspect-video object-cover 2xl:object-contain">
                    </li>
                    <li class="splide__slide w-full h-full flex">
                        <img src="{{ asset('client-assets/img/landing/hero-2.jpg') }}" alt="Hero Image" width="1920" height="1080" class="w-full h-auto aspect-video object-cover 2xl:object-contain">
                    </li>
                </ul>
            </div>
        </section>
        <div class="overlay w-full h-full absolute top-0 left-0 bg-black opacity-70"></div>
        <section id="hero" class="w-full h-full relative top-0 left-0 flex items-center justify-center text-center px-5 lg:px-24 2xl:px-28 wow fadeIn">
            <div class="content flex flex-col space-y-10 items-center">
                <div class="flex flex-col space-y-5">
                    <h1 class="text-white font-bold text-2xl sm:text-2xl lg:text-4xl xl:text-5xl 2xl:text-6xl w-full tracking-widest">
                        <span class="text-primary-main">G</span>eneral <span class="text-primary-main">M</span>arine
                        <span class="text-primary-main">C</span>ontractor
                    </h1>
                    <p class="w-full text-white leading-loose text-base lg:text-lg font-montserrat-alternates">
                        Trusted and Experienced
                    </p>
                </div>
                <div class="button flex space-x-5">
                    <button class="bg-primary-main px-5 py-2 text-sm sm:text-base lg:text-lg font-semibold text-white rounded-lg hover:bg-transparent border border-primary-main hover:text-primary-main duration-300">
                        Dukung Kami
                    </button>
                    <button class="bg-secondary-main text-white px-5 py-2 text-sm sm:text-base lg:text-lg font-semibold rounded-lg hover:bg-transparent border border-secondary-main duration-300">
                        Baca Selengkapnya
                    </button>
                </div>
            </div>
        </section>
    </header>


    <section id="about-us" class="w-full h-auto lg:h-screen px-5 lg:px-20 2xl:px-28 flex items-center py-20 overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-6 w-full h-auto gap-x-5">
            <div class="left-content lg:col-span-2 w-3/5 lg:w-full h-auto aspect-square grid grid-cols-3 justify-self-center rotate-45 relative overflow-hidden">
                <img src="{{ asset('client-assets/img/landing/hero-1.jpg') }}" alt="testing" class="w-full absolute top-0 left-0 h-auto aspect-square object-cover object-center -rotate-45">
            </div>
            <div class="center-content lg:col-span-1 flex flex-row lg:flex-col space-x-4 lg:space-x-0 items-center justify-around py-10 lg:py-0">
                <div class="card card-visi w-2/5 lg:w-3/4 h-auto aspect-square bg-neutral-50 shadow rounded-lg cursor-pointer">
                    <div class="card-content flex flex-col w-full h-full justify-center items-center space-y-3 hover:text-primary-main duration-300">
                        <i class="fa-solid fa-eye text-4xl"></i>
                        <p class="text-lg font-semibold">Visi Kami</p>
                    </div>
                </div>
                <div class="card card-misi w-2/5 lg:w-3/4 h-auto aspect-square bg-neutral-50 shadow rounded-lg cursor-pointer">
                    <div class="card-content flex flex-col w-full h-full justify-center items-center space-y-3 hover:text-primary-main duration-300">
                        <i class="fa-solid fa-list-check text-4xl"></i>
                        <p class="text-lg font-semibold">Misi Kami</p>
                    </div>
                </div>
            </div>
            <div class="right-content lg:col-span-3">
                <div class="content w-full h-full flex flex-col space-y-5">
                    <h2 class="text-3xl font-bold text-primary-main">Tentang Kami</h2>
                    <p class="text-justify font-montserrat-alternates leading-loose">
                        <span class="text-primary-main font-semibold"> PT. MILI RAFTEL SAMUDERA </span> adalah
                        perusahaan penyedia jasa pemeliharaan dan perbaikan kapal maupun non kapal.
                        Berdiri pada tahun 2023, kami telah melayani banyak pengguna jasa dari berbagai perusahaan. Kami selalu berupaya memberikan pelayanan terbaik dalam melaksanakan pekerjaan sesuai kontrak yang disepakati
                        Dengan pengalaman yang telah kami miliki, kami bangga untuk memberikan layanan terbaik untuk menggapai tujuan perusahaan anda
                    </p>
                    <div class="button flex w-full justify-end">
                        <a href="" class="w-min">
                            <button class="px-5 py-2 bg-primary-main text-white rounded-lg font-semibold text-lg hover:bg-transparent border border-primary-main hover:text-primary-main duration-300">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="business-fields" class="w-full h-auto lg:h-screen bg-primary-main px-5 lg:px-20 2xl:px-28 text-white rounded-[4rem] py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="left-content order-2 lg:order-1 py-10 lg:pt-0">
                <h2 class="text-3xl font-bold pb-2">Bidang Usaha</h2>
                <div class="private-fields pt-3">
                    <h4 class="text-lg font-semibold">
                        Khusus
                    </h4>
                    <ul class="leading-relaxed">
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Penghamparan Beton ( Concrete Pavement )</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Lean Concrete</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Rigid Pavement</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Penyewaan Alat Berat ( Wirgent Sp 500 )</p>
                        </li>
                    </ul>
                </div>
                <div class="public-fields pt-3">
                    <h4 class="text-lg font-semibold">
                        Umum
                    </h4>
                    <ul>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Pekerjaan Infrstruktur</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Pekerjaan Struktur Bangunan</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>General Trade & Supplier</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Contruction Materials Procurement</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Drilling & Mechanical Electrical</p>
                        </li>
                        <li class="pt-2 flex space-x-2 items-center">
                            <i class="fa-solid fa-check"></i>
                            <p>Pematangan Lahan & Cut And Fill</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content w-3/4 h-auto aspect-square overflow-hidden bg-white flex justify-self-center self-center rounded-xl p-3 order-1 lg:order-2">
                <img src="{{ asset('client-assets/img/landing/hero-2.jpg') }}" alt="testing" class="w-full h-full object-cover rounded-xl">
            </div>
        </div>
    </section>



    <section id="why-us" class="w-full h-auto bg-white px-5 lg:px-20 2xl:px-28 py-20">
        <div class="title w-full flex flex-col items-start lg:items-center space-y-3">
            <h2 class="text-2xl text-primary-main font-bold">Mengapa Memilih Kami ?</h2>
            <p class="w-full lg:w-3/4 text-justify lg:text-center font-montserrat-alternates leading-relaxed">
                Kami mengerti kualitas adalah terpenting maka dari itu kami siap untuk memenuhi harapan dari pihak
                owner, konsultan dan interior designers untuk selalu menjaga kualitas dengan baik
            </p>
        </div>
        <div class="content w-full h-auto grid grid-cols-1 lg:grid-cols-4 pt-16 gap-y-10 lg:gap-10">
            <div class="w-4/5 lg:w-full h-auto aspect-[1/1] rounded-lg relative shadow-[0_0_15px_-1px] shadow-primary-200 flex justify-center justify-self-center py-5 px-3">
                <div class="count absolute top-0 left-0 w-14 h-14 bg-primary-main -translate-y-1/2 -translate-x-1/2 rounded-full flex justify-center items-center text-white">
                    <p class="text-xl font-bold">1</p>
                </div>
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-person-digging text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Trusted and Experience
                        </h5>
                    </div>
                    <div class="text-center text-sm pt-3">
                        <p class="leading-relaxed">
                            Terpercaya dan berpengalaman dalam jasa pemeliharaan dan perbaikan mesin kapal maupun non kapal
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-4/5 lg:w-full h-auto aspect-[1/1] rounded-lg relative shadow-[0_0_15px_-1px] shadow-primary-200 flex justify-center justify-self-center py-5 px-3">
                <div class="count absolute top-0 left-0 w-14 h-14 bg-primary-main -translate-y-1/2 -translate-x-1/2 rounded-full flex justify-center items-center text-white">
                    <p class="text-xl font-bold">2</p>
                </div>
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-star text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Best Price Guaranteed
                        </h5>
                    </div>
                    <div class="text-center text-sm pt-3">
                        <p class="leading-relaxed">
                            Selalu berupaya untuk memberikan harga terbaik bagi costumer agar dapat menjalin kerja sama dalam jangka panjang.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-4/5 lg:w-full h-auto aspect-[1/1] rounded-lg relative shadow-[0_0_15px_-1px] shadow-primary-200 flex justify-center justify-self-center py-5 px-3">
                <div class="count absolute top-0 left-0 w-14 h-14 bg-primary-main -translate-y-1/2 -translate-x-1/2 rounded-full flex justify-center items-center text-white">
                    <p class="text-xl font-bold">3</p>
                </div>
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-money-bills text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Costumer Oriented
                        </h5>
                    </div>
                    <div class="text-center text-sm pt-3">
                        <p class="leading-relaxed">
                            Dengan tenaga kerja yang handal dan berpengalaman dalam bidangnya, kami selalu mengutamakan kepuasan customer, agar proyek selesai sesuai ekspektasi
                        </p>
                    </div>
                </div>
            </div>

            {{-- //hapus --}}
            <div class="w-4/5 lg:w-full h-auto aspect-[1/1] rounded-lg relative shadow-[0_0_15px_-1px] shadow-primary-200 flex justify-center justify-self-center py-5 px-3">
                <div class="count absolute top-0 left-0 w-14 h-14 bg-primary-main -translate-y-1/2 -translate-x-1/2 rounded-full flex justify-center items-center text-white">
                    <p class="text-xl font-bold">4</p>
                </div>
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                    <div class="text-center text-sm pt-3">
                        <p class="leading-relaxed">
                            Kami senantiasa berkomitmen menjadi mitra kerja terpercaya bagi perusahaan anda
                        </p>
                    </div>
                </div>
            </div>
            {{-- end hapus --}}

        </div>
    </section>



    <section id="portfolio" class="w-full h-auto px-5 lg:px-20 2xl:px-28 py-20 bg-primary-main">
        <div class="title w-full flex flex-col items-center space-y-3">
            <h2 class="text-2xl text-white font-bold">Hasil Kerja Kami</h2>
        </div>
        <div class="content grid grid-cols-1 lg:grid-cols-4 gap-y-10 py-10">
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card card-portfolio w-3/4 h-auto aspect-square bg-white flex justify-self-center rounded-lg cursor-pointer hover:scale-110 duration-300">
                <div class="card-body w-full flex flex-col items-center justify-center">
                    <div class="icon">
                        <i class="fa-solid fa-building-lock text-7xl text-primary-main"></i>
                    </div>
                    <div class="title pt-5 text-center">
                        <h5 class="font-semibold text-primary-main">
                            Terpercaya
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="contact-us" class="w-full h-auto lg:h-screen grid grid-cols-1 lg:grid-cols-2">
        <div class="image w-full h-full bg-primary-100 hidden lg:block">
            <img src="{{ asset('client-assets/img/landing/hero-1.jpg') }}" alt="Image Contact Us" class="w-full h-full object-cover">
        </div>
        <div class="content w-full h-full lg:p-10 py-20 lg:py-0 px-5 lg:px-20 2xl:px-28">
            <div class="title w-full flex flex-col items-start">
                <h2 class="text-3xl text-primary-main font-bold">Hubungi Kami</h2>
            </div>
            <div class="form grid grid-cols-2 gap-x-3 gap-y-3 pt-10">
                <div class="input-group col-span-2 lg:col-span-1">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="w-full h-auto border-2 border-primary-main rounded-lg px-2 py-3">
                </div>
                <div class="input-group col-span-2 lg:col-span-1">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="w-full h-auto border-2 border-primary-main rounded-lg px-2 py-3">
                </div>
                <div class="input-group col-span-2">
                    <label for="subject">Perihal</label>
                    <input type="text" id="subject" name="subject" class="w-full h-auto border-2 border-primary-main rounded-lg px-2 py-3">
                </div>
                <div class="input-group col-span-2">
                    <label for="message">Pesan</label>
                    <textarea name="message" id="message" class="h-[13rem] max-h-[13rem] min-h-[4rem] w-full border-2 border-primary-main rounded-lg px-2 py-3"></textarea>
                </div>
                <div class="button col-span-2 pt-2 flex justify-end">
                    <button class="w-1/2 h-auto px-2 py-3 bg-primary-main text-lg font-bold text-white rounded-lg">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </section>



    <footer class="w-full h-auto bg-secondary-main flex flex-col space-y-4 lg:space-y-0 lg:flex-row justify-between items-center py-10 px-10 text-white">
        <div class="copyright text-center">© 2022 Teguh Maju Jaya. All Rights Reserved</div>
        <div class="menu">
            <ul class="w-auto flex space-x-5">
                <li>
                    <a href="" class="w-auto h-auto aspect-square"><i class="fa-brands fa-square-facebook text-3xl"></i></a>
                </li>
                <li>
                    <a href="" class="w-auto h-auto aspect-square"><i class="fa-brands fa-square-instagram text-3xl"></i></a>
                </li>
                <li>
                    <a href="" class="w-auto h-auto aspect-square"><i class="fa-brands fa-square-twitter text-3xl"></i></a>
                </li>
                <li>
                    <a href="" class="w-auto h-auto aspect-square"><i class="fa-brands fa-square-youtube text-3xl"></i></a>
                </li>
            </ul>
        </div>
    </footer>



    <div id="overlay-modal-portfolio" class="w-full h-screen fixed top-0 left-0 bg-black opacity-70 z-40 hidden"></div>
    <div id="overlay-modal-visi" class="w-full h-screen fixed top-0 left-0 bg-black opacity-70 z-40 hidden"></div>
    <div id="overlay-modal-misi" class="w-full h-screen fixed top-0 left-0 bg-black opacity-70 z-40 hidden"></div>

    <div id="modal-portfolio" class="modal w-full h-screen z-40 fixed top-0 left-0 flex flex-col space-y-5 justify-center items-center hidden">
        <div id="close-button-modal-portfolio" class="close-button absolute top-10 right-10 bg-white w-auto h-auto aspect-square px-3 py-1 rounded-full cursor-pointer">
            <i class="fa-solid fa-xmark text-primary-main text-3xl"></i>
        </div>
        <div class="title">
            <h3 class="text-center text-2xl font-bold text-white">Delinator dan Rambu</h3>
        </div>
        <div class="modal-body w-3/5 h-auto aspect-video bg-white rounded-lg overflow-hidden">
            <section class="splide splide-portfolio w-full h-full" aria-label="Splide Basic HTML Example">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <i class="fa-solid fa-angle-left text-2xl text-black"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <i class="fa-solid fa-angle-right text-2xl text-black"></i>
                    </button>
                </div>
                <div class="splide__track w-full h-full">
                    <ul class="splide__list w-full h-full">
                        <li class="splide__slide w-full h-full">
                            <img src="{{ asset('client-assets/img/landing/portfolio-1.jpg') }}" alt="portfolio-1">
                        </li>
                        <li class="splide__slide w-full h-full">
                            <img src="{{ asset('client-assets/img/landing/hero-1.jpg') }}" alt="portfolio-2">
                        </li>
                        <li class="splide__slide w-full h-full">
                            <img src="{{ asset('client-assets/img/landing/hero-2.jpg') }}" alt="portfolio-3">
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <div id="modal-visi" class="modal w-full h-screen z-40 fixed top-0 left-0 flex flex-col space-y-5 justify-center items-center hidden">
        <div id="close-button-modal-visi" class="close-button absolute top-10 right-10 bg-white w-auto h-auto aspect-square px-3 py-1 rounded-full cursor-pointer">
            <i class="fa-solid fa-xmark text-primary-main text-3xl"></i>
        </div>
        <div class="modal-body w-3/5 h-auto bg-white rounded-lg overflow-hidden grid grid-cols-2 lg:grid-cols-3 p-5">
            <div class="image w-full h-full bg-primary-main flex justify-center items-center rounded-lg col-span-2 lg:col-span-1">
                <i class="fa-solid fa-eye text-6xl text-white"></i>
            </div>
            <div class="content col-span-2 px-3">
                <h3 class="text-2xl font-bold text-primary-main">Visi Kami</h3>
                <p class="text-justify leading-loose font-montserrat-alternates pt-3">
                    Menjadi perusahaan penyedia jasa pemeliharaan dan maintenance pilihan dan terpercaya yang berintegritas, selalu berinovasi dan berkomitmen untuk memberikan pelayanan yang terbaik.
                </p>
            </div>
        </div>
    </div>

    <div id="modal-misi" class="modal w-full h-screen z-40 fixed top-0 left-0 flex flex-col space-y-5 justify-center items-center hidden">
        <div id="close-button-modal-misi" class="close-button absolute top-10 right-10 bg-white w-auto h-auto aspect-square px-3 py-1 rounded-full cursor-pointer">
            <i class="fa-solid fa-xmark text-primary-main text-3xl"></i>
        </div>
        <div class="modal-body w-3/5 h-auto bg-white rounded-lg overflow-hidden grid grid-cols-3 p-5">
            <div class="image w-full h-full bg-primary-main flex justify-center items-center rounded-lg">
                <i class="fa-solid fa-eye text-6xl text-white"></i>
            </div>
            <div class="content col-span-2 px-3">
                <h3 class="text-2xl font-bold text-primary-main">Misi Kami</h3>
                <ul class="flex flex-col font-montserrat-alternates space-y-3 pt-5">
                    <li class="leading-loose flex space-x-2">
                        <i class="fa-regular fa-circle-dot pt-2"></i>
                        <p>
                            Memberikan pelayanan terbaik kepada costumer, serta mempertahankan tingkat profesionalisme dan kejujuran dalam hubungan kami dengan costumer dan karyawan
                        </p>
                    </li>
                    <li class="leading-loose flex space-x-2">
                        <i class="fa-regular fa-circle-dot pt-2"></i>
                        <p>
                            Memberikan layanan yang berkualitas kepada costumer kami dengan harga terbaik yang bersaing.
                        </p>
                    </li>
                    <li class="leading-loose flex space-x-2">
                        <i class="fa-regular fa-circle-dot pt-2"></i>
                        <p>
                            Mengembangkan karyawan berkinerja tinggi yang menghasilkan pekerjaan sesuai dengan ekspektasi.
                        </p>
                    </li>
                    <li class="leading-loose flex space-x-2">
                        <i class="fa-regular fa-circle-dot pt-2"></i>
                        <p>
                            Manyediakan lingkungan kerja yang jujur dan bermanfaat bagi karyawan kami, dimana setiap karyawan secara individu dan kolektif, dapat mengabdikan diri untuk menghasilkan pekerjaan dan pelayanan terbaik, serta integritas professional kepada customer kami
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @push('js')
    <script src="{{ asset('client-assets/js/landing/splide.js') }}"></script>
    <script src="{{ asset('client-assets/js/landing/modal.js') }}"></script>
    <script src="{{ asset('client-assets/js/landing/sidebar.js') }}"></script>
    @endpush
</x-client.app-layout>
