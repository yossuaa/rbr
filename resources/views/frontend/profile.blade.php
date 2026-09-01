@include('layout.navbar')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $profile->headline }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >
</head>

<body
    class="relative bg-[#511314] text-white overflow-x-hidden
           opacity-0 translate-y-6
           transition-all duration-1000 ease-out"
    onload="document.body.classList.remove('opacity-0','translate-y-6')"
>

    <!-- BACKGROUND -->
    <div class="pointer-events-none fixed inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-br from-[#6b1b1c] via-[#511314] to-[#2a0a0a]"></div>

        <div class="absolute -top-40 -left-40
                    w-[300px] md:w-[500px]
                    h-[300px] md:h-[500px]
                    bg-[#8b2a2a]/30 rounded-full blur-[100px] md:blur-[120px]">
        </div>

        <div class="absolute bottom-0 right-0
                    w-[250px] md:w-[400px]
                    h-[250px] md:h-[400px]
                    bg-[#3a0d0d]/40 rounded-full blur-[100px] md:blur-[120px]">
        </div>
    </div>


    <!-- ================= PROFILE HERO ================= -->

    <section
        class="min-h-screen
               px-5 md:px-12
               py-24 md:py-10
               text-white
               bg-cover bg-center bg-no-repeat
               observe parallax"
        data-speed="0.15"
        style="background-image: url('/profile/{{ $profile->background }}');"
    >

        <!-- CONTENT -->
        <div
            class="mt-8 md:mt-5
                   flex flex-col md:flex-row
                   items-center md:items-start
                   gap-8 md:gap-6"
        >

            <!-- TEXT -->
            <div class="w-full md:flex-1 md:max-w-[680px]">

                <h1
                    class="text-4xl sm:text-5xl md:text-5xl lg:text-6xl
                           font-bold
                           whitespace-pre-line
                           leading-tight
                           text-center md:text-left
                           opacity-0 translate-y-6
                           transition-all duration-1000 ease-out observe"
                    style="font-family: 'Space Grotesk';"
                >
                    {{ $profile->headline }}
                </h1>

                <div
                    class="mt-5
                           text-sm sm:text-base
                           text-justify
                           leading-relaxed
                           opacity-0 translate-y-6
                           transition-all duration-1000 ease-out
                           delay-200 observe"
                >
                    {{ $profile->deskripsi }}
                </div>

            </div>


            <!-- PROFILE IMAGE -->
            <div
                class="w-full md:w-auto
                       flex justify-center md:block
                       opacity-0 translate-y-10 scale-95
                       transition-all duration-1000 ease-out
                       delay-300 observe parallax"
                data-speed="0.25"
            >

                <img
                    src="/profile/{{ $profile->gambar_profile }}"
                    class="w-full
                           max-w-[340px]
                           md:w-[400px]
                           md:max-w-none
                           h-[250px]
                           md:h-[300px]
                           mt-2 md:mt-16
                           ml-0 md:ml-16
                           object-cover
                           rounded-xl
                           shadow-2xl
                           transition duration-300
                           hover:scale-[1.03]
                           hover:shadow-[0_25px_60px_rgba(0,0,0,0.45)]"
                />

            </div>

        </div>

    </section>


    <!-- ================= TITLE VISI MISI ================= -->

    <div
        class="px-6 py-4
               bg-gray-50"
        data-aos="fade-up"
    >
        <p
            class="text-gray-900
                   max-w-4xl
                   mx-auto
                   text-center
                   text-sm
                   font-bold
                   md:text-[18px]"
        >
            Visi dan Misi
        </p>
    </div>


    <br>


    <!-- ================= VISI MISI ================= -->

    <section
        class="grid
               grid-cols-1
               md:grid-cols-3
               gap-8 md:gap-6
               items-start
               border border-[#3b0e10]
               bg-[#3b0e10]
               rounded-xl
               mx-4 md:mx-8
               px-5 md:px-0
               py-8 md:py-6"
    >

        <!-- ================= VISI ================= -->

        <div
            class="flex flex-col
                   opacity-0 -translate-x-8
                   transition-all duration-1000 ease-out
                   observe parallax"
            data-speed="0.1"
        >

            <h2
                class="text-xl md:text-2xl
                       font-bold
                       mb-3
                       ml-0 md:ml-20
                       text-center md:text-left"
                style="font-family: 'Space Grotesk';"
            >
                {{ $profile->headline_visi }}
            </h2>

            <p
                class="text-[12px] md:text-[12px]
                       leading-relaxed
                       text-justify
                       ml-0 md:ml-20"
            >
                {{ $profile->deskripsi_visi }}
            </p>

        </div>


        <!-- ================= FOTO VISI ================= -->

        <div
            class="flex
                   justify-center md:justify-start
                   opacity-0 translate-y-8 scale-95
                   transition-all duration-1000 ease-out
                   delay-150
                   observe parallax
                   ml-0 md:ml-[-10px]"
            data-speed="0.2"
        >

            <img
                src="/profile/{{ $profile->gambar_visi }}"
                class="w-full
                       max-w-[260px]
                       h-[220px]
                       md:h-[260px]
                       rounded-xl
                       object-cover
                       shadow-xl
                       transition duration-300
                       hover:scale-[1.03]
                       hover:shadow-[0_25px_60px_rgba(0,0,0,0.45)]"
            />

        </div>


        <!-- ================= MISI ================= -->

        <div
            class="flex flex-col
                   items-center md:items-start
                   opacity-0 translate-x-8
                   transition-all duration-1000 ease-out
                   delay-300
                   observe parallax"
            data-speed="0.15"
        >

            <!-- FOTO MISI -->

            <div
                class="self-center md:self-start
                       ml-0 md:-ml-36"
            >

                <img
                    src="/profile/{{ $profile->gambar_misi }}"
                    class="w-full
                           max-w-[350px]
                           md:w-[350px]
                           h-[150px]
                           object-cover
                           rounded-xl
                           mb-3
                           shadow-lg
                           transition duration-300
                           hover:scale-[1.03]
                           hover:shadow-[0_25px_60px_rgba(0,0,0,0.45)]"
                />

            </div>


            <!-- JUDUL MISI -->

            <h2
                class="text-xl md:text-2xl
                       font-bold
                       mb-3
                       ml-0 md:-ml-36
                       text-center md:text-left"
                style="font-family: 'Space Grotesk';"
            >
                {{ $profile->headline_misi }}
            </h2>


            <!-- DESKRIPSI MISI -->

            <p
                class="text-[12px]
                       leading-relaxed
                       text-justify
                       max-w-[500px]
                       pr-0 md:pr-12
                       ml-0 md:-ml-36"
            >
                {{ $profile->deskripsi_misi }}
            </p>

        </div>

    </section>


    <br><br><br>


    <!-- ================= SCRIPT ================= -->

    <script>

        /* ===== CINEMATIC SCROLL ANIMATION ===== */

        const observer = new IntersectionObserver((entries) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.remove(
                        'opacity-0',
                        'translate-y-6',
                        'translate-y-8',
                        'translate-y-10',
                        '-translate-x-8',
                        'translate-x-8',
                        'scale-95'
                    );

                    entry.target.classList.add(
                        'opacity-100',
                        'translate-y-0',
                        'translate-x-0',
                        'scale-100'
                    );

                } else {

                    entry.target.classList.add('opacity-0');

                }

            });

        }, {
            threshold: 0.2
        });


        document
            .querySelectorAll('.observe')
            .forEach(el => observer.observe(el));

    </script>

</body>
</html>