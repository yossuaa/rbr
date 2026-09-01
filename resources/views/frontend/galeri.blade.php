@include('layout.navbar')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Space Grotesk -->
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- AOS CSS -->
    <link
        href="https://unpkg.com/aos@2.3.4/dist/aos.css"
        rel="stylesheet"
    >
</head>


<body class="bg-gray-100 overflow-x-hidden">


    <!-- =====================================================
         HERO SECTION
    ====================================================== -->

    <section
        class="relative w-full
               h-[220px]
               sm:h-[250px]
               md:h-[250px]
               overflow-hidden"
        data-aos="fade-up"
    >

        <img
            src="{{ asset('galeri/'.$galeri->background) }}"
            class="w-full h-full object-cover"
        >

        <div
            class="absolute inset-0
                   bg-black/40
                   flex
                   items-center
                   justify-center
                   px-5"
        >

            <h1
                class="text-white
                       text-2xl
                       sm:text-3xl
                       md:text-3xl
                       font-bold
                       text-center
                       whitespace-pre-line
                       leading-tight"
                style="font-family: 'Space Grotesk', sans-serif;"
            >
                {{ $galeri->headline }}
            </h1>

        </div>

    </section>



    <!-- =====================================================
         QUOTES
    ====================================================== -->

    <div
        class="px-5
               sm:px-6
               py-3
               sm:py-2
               bg-gray-50"
        data-aos="fade-up"
    >

        <p
            class="text-gray-800
                   max-w-3xl
                   mx-auto
                   text-center
                   text-xs
                   sm:text-sm
                   leading-relaxed
                   whitespace-pre-line"
        >
            {{ $galeri->quotes }}
        </p>

    </div>



    <!-- =====================================================
         FOTO GRID
    ====================================================== -->

    <section
        class="px-5
               sm:px-6
               py-6
               sm:py-8
               bg-[linear-gradient(90deg,#511314,#ffffff)]"
        data-aos="fade-up"
    >

        <div
            class="grid
                   grid-cols-2
                   sm:grid-cols-3
                   md:grid-cols-4
                   lg:grid-cols-7
                   gap-3
                   sm:gap-4"
        >

            @foreach ($fotos as $foto)

                <div
                    class="rounded-lg
                           overflow-hidden
                           shadow"
                    data-aos="zoom-in"
                    data-aos-delay="{{ $loop->index * 100 }}"
                >

                    <img
                        src="{{ asset('galeri/'.$foto->gambar) }}"
                        class="w-full
                               h-[100px]
                               sm:h-[110px]
                               md:h-[100px]
                               object-cover
                               transition
                               duration-300
                               hover:scale-[1.03]"
                    >

                </div>

            @endforeach

        </div>

    </section>



    <!-- =====================================================
         GALERI USER
    ====================================================== -->

    <section
        class="py-10
               sm:py-12
               px-5
               sm:px-6
               md:px-12
               text-white
               bg-[#511314]
               w-full
               relative
               overflow-hidden
               min-h-[700px]
               md:min-h-screen"
    >


        <!-- ================= BACKGROUND ELEMENT ================= -->

        <img
            src="{{ url('galeri/'.$galeriUser->elemen) }}"
            alt="Elemen background"
            class="absolute
                   inset-0
                   w-full
                   h-full
                   object-cover
                   opacity-20
                   z-0
                   pointer-events-none
                   select-none"
            data-aos="slide-up"
            style="opacity:0.2 !important;"
        >


        <br>


        <!-- =====================================================
             CONTENT
        ====================================================== -->

        <div
            class="max-w-screen-xl
                   mx-auto
                   flex
                   flex-col
                   md:flex-row
                   items-start
                   justify-between
                   relative
                   z-10"
        >


            <!-- ================= TEKS ================= -->

            <div
                class="w-full
                       md:w-1/2"
                data-aos="fade-right"
            >

                <h1
                    class="text-2xl
                           sm:text-3xl
                           md:text-4xl
                           font-bold
                           whitespace-pre-line
                           leading-tight"
                    style="font-family: 'Space Grotesk';"
                >
                    {{ $galeriUser->headline }}
                </h1>


                <p
                    class="text-sm
                           sm:text-[14px]
                           mt-4
                           mb-4
                           text-justify
                           leading-relaxed
                           max-w-2xl"
                >
                    {{ $galeriUser->deskripsi }}
                </p>

            </div>



            <!-- ================= GAMBAR ================= -->

            <div
                class="w-full
                       md:w-1/2
                       flex
                       justify-center
                       items-center
                       mt-8
                       md:mt-0"
                data-aos="fade-up"
                data-aos-delay="300"
            >

                <img
                    src="{{ asset('galeri/'.$galeriUser->gambar) }}"
                    class="w-full
                           max-w-[420px]
                           sm:max-w-[500px]
                           md:w-[1100px]
                           md:max-w-none
                           drop-shadow-2xl
                           relative
                           top-0
                           md:top-20
                           mx-auto
                           md:-ml-73"
                >

            </div>

        </div>

    </section>



    <!-- =====================================================
         AOS JS
    ====================================================== -->

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>


</body>
</html>