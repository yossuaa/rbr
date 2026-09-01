<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak & Lokasi</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://unpkg.com/aos@2.3.4/dist/aos.css"
        rel="stylesheet"
    >
</head>

<body
    class="min-h-screen
           bg-[#511314]
           font-[Space_Grotesk]
           text-white
           overflow-x-hidden"
>

    @include('layout.navbar')


    <!-- =========================================================
         BACKGROUND ORNAMENT
    ========================================================== -->

    @if($location->elemen)

        <img
            src="{{ asset('lokasi/'.$location->elemen) }}"
            class="pointer-events-none
                   fixed inset-0
                   w-full h-full
                   object-cover
                   opacity-[0.07]
                   blur-[1px]"
            data-aos="slide-up"
        >

    @endif


    <main class="relative z-10 w-full">


        <!-- =====================================================
             HERO
        ====================================================== -->

        <header
            class="pt-24 md:pt-24
                   px-5 sm:px-8 md:px-14"
            data-aos="fade-up"
        >

            <div class="max-w-5xl mx-auto">

                <h2
                    class="text-2xl
                           sm:text-3xl
                           md:text-[32px]
                           font-bold
                           leading-tight
                           text-center
                           md:text-left"
                    style="font-family: 'Space Grotesk';"
                >
                    {{ $location->headline }}
                </h2>

            </div>

        </header>



        <!-- =====================================================
             MAP + INFO
        ====================================================== -->

        <section
            class="px-5
                   sm:px-8
                   md:px-14
                   mt-8
                   md:mt-10"
        >

            <div
                class="max-w-5xl
                       mx-auto
                       grid
                       grid-cols-1
                       md:grid-cols-2
                       gap-8
                       md:gap-12
                       items-center"
            >


                <!-- ================= MAP ================= -->

                <div data-aos="fade-right">

                    <a
                        href="https://maps.app.goo.gl/AegCxDSs4p856Ywk8"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <div
                            class="w-full
                                   h-[220px]
                                   sm:h-[260px]
                                   md:h-[260px]
                                   rounded-xl
                                   overflow-hidden
                                   bg-white
                                   shadow-xl"
                        >

                            <img
                                src="{{ asset('lokasi/'.$location->maps) }}"
                                class="w-full h-full object-cover
                                       transition duration-300
                                       hover:scale-[1.02]"
                            >

                        </div>

                    </a>

                </div>



                <!-- ================= INFO ================= -->

                <div
                    class="space-y-5
                           text-gray-100"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >


                    <!-- ALAMAT -->

                    <div class="flex gap-3 items-start">

                        <span
                            class="text-lg
                                   flex-shrink-0"
                        >
                        </span>

                        <p
                            class="text-sm
                                   leading-relaxed"
                        >
                            {{ $location->alamat }}
                        </p>

                    </div>



                    <!-- JAM BUKA -->

                    <div class="flex gap-3 items-start">

                        <span
                            class="text-lg
                                   flex-shrink-0"
                        >
                        </span>

                        <p class="text-sm">
                            {{ $location->open }}
                        </p>

                    </div>



                    <!-- INSTAGRAM -->

                    @if($location->instagram)

                        <div class="flex gap-3 items-start">

                            <span
                                class="text-lg
                                       flex-shrink-0"
                            >
                            </span>

                            <a
                                href="https://www.instagram.com/rumahbudayaratna"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm
                                       hover:underline
                                       break-all"
                            >
                                {{ $location->instagram }}
                            </a>

                        </div>

                    @endif



                    <!-- ================= ACTION ================= -->

                    <div
                        class="pt-4
                               md:pt-6
                               grid
                               grid-cols-3
                               gap-2
                               sm:gap-3"
                    >

                        <!-- WHATSAPP -->

                        <a
                            href="https://wa.me/6281346514975"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="bg-white/10
                                   hover:bg-white/20
                                   rounded-lg
                                   p-3
                                   text-[11px]
                                   sm:text-xs
                                   text-center
                                   transition
                                   duration-300"
                            data-aos="zoom-in"
                            data-aos-delay="300"
                        >
                            WhatsApp
                        </a>



                        <!-- MAPS -->

                        <a
                            href="https://maps.app.goo.gl/AegCxDSs4p856Ywk8"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="bg-white/10
                                   hover:bg-white/20
                                   rounded-lg
                                   p-3
                                   text-[11px]
                                   sm:text-xs
                                   text-center
                                   transition
                                   duration-300"
                            data-aos="zoom-in"
                            data-aos-delay="400"
                        >
                            Maps
                        </a>



                        <!-- EMAIL -->

                        <a
                            href="mailto:rumahbudayaratna@gmail.com"
                            class="bg-white/10
                                   hover:bg-white/20
                                   rounded-lg
                                   p-3
                                   text-[11px]
                                   sm:text-xs
                                   text-center
                                   transition
                                   duration-300
                                   break-all"
                            data-aos="zoom-in"
                            data-aos-delay="500"
                        >
                            Email
                        </a>

                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             WHY VISIT
        ====================================================== -->

        <section
            class="px-5
                   sm:px-8
                   md:px-14
                   pb-16
                   md:pb-20
                   mt-12
                   md:mt-16"
            data-aos="fade-up"
        >

            <div
                class="max-w-5xl
                       mx-auto
                       grid
                       grid-cols-1
                       md:grid-cols-3
                       gap-4
                       md:gap-6"
            >


                <!-- EVENT BUDAYA -->

                <div
                    class="bg-white/10
                           rounded-xl
                           p-5
                           backdrop-blur"
                    data-aos="zoom-in"
                >

                    <div class="text-2xl">
                        🎭
                    </div>

                    <h4
                        class="mt-2
                               font-semibold"
                    >
                        Event Budaya
                    </h4>

                    <p
                        class="text-sm
                               text-gray-200/80
                               mt-1
                               leading-relaxed"
                    >
                        Pertunjukan seni & diskusi budaya rutin.
                    </p>

                </div>



                <!-- RUANG KREATIF -->

                <div
                    class="bg-white/10
                           rounded-xl
                           p-5
                           backdrop-blur"
                    data-aos="zoom-in"
                    data-aos-delay="150"
                >

                    <div class="text-2xl">
                        🎨
                    </div>

                    <h4
                        class="mt-2
                               font-semibold"
                    >
                        Ruang Kreatif
                    </h4>

                    <p
                        class="text-sm
                               text-gray-200/80
                               mt-1
                               leading-relaxed"
                    >
                        Wadah seniman & komunitas berekspresi.
                    </p>

                </div>



                <!-- KOMUNITAS -->

                <div
                    class="bg-white/10
                           rounded-xl
                           p-5
                           backdrop-blur"
                    data-aos="zoom-in"
                    data-aos-delay="300"
                >

                    <div class="text-2xl">
                        🤝
                    </div>

                    <h4
                        class="mt-2
                               font-semibold"
                    >
                        Komunitas Terbuka
                    </h4>

                    <p
                        class="text-sm
                               text-gray-200/80
                               mt-1
                               leading-relaxed"
                    >
                        Terbuka untuk kolaborasi & literasi budaya.
                    </p>

                </div>

            </div>

        </section>



        <!-- =====================================================
             BOTTOM
        ====================================================== -->

        <section
            class="bg-[#411012]
                   rounded-t-2xl
                   py-10
                   md:py-12"
            data-aos="fade-up"
        >

            <div
                class="px-5
                       sm:px-8
                       md:px-14"
            >

                <div
                    class="max-w-5xl
                           mx-auto
                           flex
                           flex-col
                           md:flex-row
                           gap-8
                           md:gap-10
                           items-start"
                >


                    <!-- TEXT -->

                    <div class="flex-1 w-full">

                        <div
                            class="w-12
                                   h-[2px]
                                   bg-white/30
                                   mb-4"
                        ></div>


                        <h2
                            class="text-2xl
                                   sm:text-2xl
                                   md:text-3xl
                                   font-bold
                                   leading-tight"
                        >
                            {{ $location->subheadline }}
                        </h2>


                        @if($location->deskripsi)

                            <p
                                class="mt-3
                                       text-sm
                                       text-gray-200
                                       max-w-xl
                                       leading-relaxed"
                            >
                                {{ $location->deskripsi }}
                            </p>

                        @endif

                    </div>



                    <!-- FOTO DESKTOP -->

                    @if($location->foto)

                        <div
                            class="hidden
                                   md:block
                                   w-40
                                   h-28
                                   flex-shrink-0"
                            data-aos="fade-left"
                        >

                            <img
                                src="{{ asset('lokasi/'.$location->foto) }}"
                                class="w-full
                                       h-full
                                       object-cover
                                       rounded-lg"
                            >

                        </div>

                    @endif

                </div>

            </div>

        </section>

    </main>



    <!-- =========================================================
         FOOTER
    ========================================================== -->

    <footer
        class="bg-[#3b0e10]
               border-t
               border-white/10"
    >

        <div
            class="text-center
                   px-5
                   sm:px-8
                   md:px-14
                   py-8
                   md:py-10
                   max-w-5xl
                   mx-auto
                   text-sm
                   text-gray-300"
        >
            © {{ date('Y') }} Rumah Budaya Ratna
        </div>

    </footer>



    <!-- =========================================================
         AOS
    ========================================================== -->

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

</body>
</html>