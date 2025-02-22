<?php
require_once('const.php');
?>
<!doctype html>
<html lang="id">

<head>
  <!-- Metas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="author" content="Vicentra Dev" />
  <meta name="description" content="Vicentra - Spesialis mesin digital printing UV terbaik. Temukan mesin cetak UV berkualitas untuk berbagai kebutuhan, dari flatbed hingga roll to roll. Kami menyediakan mesin baru dan bekas dengan harga terbaik serta layanan purna jual terpercaya. Dapatkan solusi cetak berkualitas tinggi untuk bisnis Anda. Hubungi kami sekarang!" />
  <meta name="keywords" content="jasa print uv, harga printer uv, printer uv dtf, harga mesin uv printing, mesin uv untuk apa, apa itu uv printing, dtf uv untuk apa, uv dtf stiker">
  <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

  <title>Vicentra - Jual Mesin Digital Printing UV Terbaik & Termurah</title>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Vicentra - Jual Mesin Digital Printing UV Terbaik & Termurah" />
  <meta property="og:description"
    content="Vicentra - Spesialis mesin digital printing UV terbaik. Temukan mesin cetak UV berkualitas untuk berbagai kebutuhan, dari flatbed hingga roll to roll. Kami menyediakan mesin baru dan bekas dengan harga terbaik serta layanan purna jual terpercaya. Dapatkan solusi cetak berkualitas tinggi untuk bisnis Anda. Hubungi kami sekarang!" />
  <meta property="og:image" content="https://mesinuv.com/assets/images/logo-vicentra-black.webp" />
  <meta property="og:url" content="https://mesinuv.com" />
  <meta property="og:site_name" content="Vicentra - Jual Mesin Digital Printing UV Terbaik & Termurah" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Vicentra - Jual Mesin Digital Printing UV Terbaik & Termurah" />
  <meta name="twitter:description"
    content="Vicentra - Spesialis mesin digital printing UV terbaik. Temukan mesin cetak UV berkualitas untuk berbagai kebutuhan, dari flatbed hingga roll to roll. Kami menyediakan mesin baru dan bekas dengan harga terbaik serta layanan purna jual terpercaya. Dapatkan solusi cetak berkualitas tinggi untuk bisnis Anda. Hubungi kami sekarang!" />
  <meta name="twitter:image" content="https://mesinuv.com/assets/images/logo-vicentra-black.webp" />
  <meta name="twitter:site" content="https://mesinuv.com" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TB3V6DMQ');
  </script>
  <!-- End Google Tag Manager -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-H9C3WN2N42"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-H9C3WN2N42');
  </script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TB3V6DMQ" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="app">
    <!-- HEADER -->
    <header class="border-b-2 py-4">
      <div class="lg:w-[80vw] mx-5 lg:mx-auto flex justify-between items-center relative">
        <img src="./assets/images/logo-vicentra-black.webp" alt="logo-vicentra-black" class="h-[2.375rem]">
        <div class="lg:hidden">
          <i :class="[isMenuShow ? 'fa-solid fa-xmark text-2xl' : 'fa-solid fa-bars text-2xl']" class=""
            @click="toggleMenu"></i>
        </div>
        <ul :class="[isMenuShow ? 'visible' : 'invisible']"
          class="lg:visible flex flex-col lg:flex-row lg:items-center gap-2 lg:gap-5 absolute lg:static top-[3.125rem] left-0 right-0 bg-white lg:bg-transparent shadow lg:shadow-none p-2 lg:p-0 rounded lg:rounded-none">
          <li><a href="https://vicentra.co.id" class="beranda hover:underline">Beranda</a></li>
          <li><a href="https://vicentra.co.id/product/mesin/digital-printing/uv"
              class="semua_produk hover:underline">Produk</a>
          </li>
          <li><a href="https://vicentra.co.id/terms-and-conditions"
              class="layanan_dan_perbaikan hover:underline">Layanan dan Perbaikan</a>
          </li>
          <li><a href="https://vicentra.co.id/about-us" class="tentang_kami hover:underline">Tentang Kami</a></li>
        </ul>
      </div>
    </header>
    <!-- HEADER -->

    <!-- HERO SECTION -->
    <section class="lg:w-[80vw] mx-5 lg:mx-auto grid lg:grid-cols-2 items-center mx-5 px-5 py-[3.125rem] bg-[#f7f7f7]">
      <div>
        <h1 class="text-4xl font-semibold">
          MESIN UV TERBAIK, PERIOD
        </h1>
        <p class="mt-5">
          Selamat datang di website kami! Temukan mesin digital printing uv berkualitas dengan hasil tahan lama dan
          harga terbaik di sini.
        </p>
        <a href="https://vicentra.co.id/product/mesin/digital-printing/uv" target="_blank" class=" semua_produk inline-block capitalize mt-5 px-10 py-3 hover:bg-[#1B0000] hover:text-white border border-[#1B0000]
          transition duration-300">lihat
          semua produk</a>
      </div>
      <div class="order-first lg:order-none">
        <img src="./assets/images/mesin/nocai-nc-uv0609peiii-ii.webp" alt="mesin-neu-jet">
      </div>
    </section>
    <!-- HERO SECTION -->

    <!-- PRODUCT SECTION -->
    <section class="lg:w-[80vw] mx-5 lg:mx-auto">
      <div class="mt-10">
        <p class="text-justify mb-4"><strong>UV printing</strong> adalah teknologi cetak yang memanfaatkan sinar ultraviolet untuk mengeringkan tinta secara instan, menghasilkan cetakan berkualitas tinggi pada berbagai media seperti kayu, plastik, kaca, dan logam. <strong>Mesin UV</strong> digunakan untuk mencetak langsung pada permukaan material tersebut, memungkinkan detail yang tajam dan warna yang cerah. <strong>Harga mesin UV printing</strong> bervariasi tergantung pada spesifikasi dan fitur yang ditawarkan. Bagi yang tidak ingin berinvestasi pada mesin, tersedia pula <strong>jasa print UV</strong> yang siap membantu memenuhi kebutuhan cetak Anda.</p>

        <p class="text-justify mb-4"><strong>Printer UV DTF</strong> adalah perangkat yang memungkinkan pencetakan desain pada film khusus yang kemudian dapat ditransfer ke berbagai permukaan, termasuk yang tidak rata atau melengkung. Teknologi ini sering digunakan untuk membuat <strong>UV DTF stiker</strong> dengan efek timbul dan kilap. Penggunaan <strong>DTF UV</strong> memudahkan proses kustomisasi pada berbagai produk, seperti tumbler, botol, dan media lainnya, tanpa memerlukan proses pemotongan tambahan. <strong>Harga printer UV DTF</strong> juga bervariasi, menyesuaikan dengan kebutuhan dan kapasitas produksi.</p>

        <p class="text-justify mb-4">Memahami perbedaan antara <strong>printer UV</strong> dan <strong>DTF UV</strong> penting untuk menentukan pilihan yang tepat sesuai kebutuhan bisnis Anda. <strong>Printer UV</strong> mencetak langsung pada media, sementara <strong>DTF UV</strong> mencetak desain pada film yang kemudian ditransfer ke media target. Kedua metode ini menawarkan fleksibilitas dalam mencetak pada berbagai jenis media dengan hasil yang memukau.</p>

        <h2 class="text-base font-semibold capitalize">Keywords: <span class="font-normal">jasa print UV, harga printer UV, printer UV dtf, harga mesin UV printing, mesin UV untuk apa, apa itu UV printing, dtf UV untuk apa, UV dtf stiker</span></h2>
      </div>
      <div>
        <?php foreach ($products as $product) : ?>
          <div>
            <div class="flex justify-center mt-10">
              <div class="w-[80vw] h-[1px] bg-[#1B0000]"></div>
            </div>
            <div class="grid lg:grid-cols-2 gap-5 items-center my-[5rem]">
              <div>
                <h2><?= $product['name'] ?></h2>
                <h1 class="text-3xl font-semibold my-5"><?= $product['tagline'] ?></h1>
                <div>
                  <?= $product['short_description'] ?>
                </div>
                <a href="<?= $product['link_product'] ?>" target="_blank"
                  class="detail_produk inline-block capitalize font-medium text-white bg-black rounded-md px-10 py-3 mt-5">lebih
                  lengkap</a>
              </div>
              <div class="order-first lg:order-none">
                <a href="<?= $product['link_product'] ?>" target="_blank">
                  <img src="<?= $product['photo'] ?>" alt="<?= $product['name'] ?>">
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- PRODUCT SECTION -->

    <!-- CTA SECTION -->
    <section class="mb-[2.5rem]">
      <h1 class="capitalize text-3xl font-semibold text-center">Hubungi Kami</h1>
      <div class="relative flex justify-center mt-5">
        <div class="w-[80vw] h-[2px] bg-[#e1e1e1]"></div>
        <div class="w-[10vw] h-[2px] bg-[#1B0000] absolute"></div>
      </div>
      <div class="lg:w-[40vw] mx-5 lg:mx-auto flex justify-center mt-10">
        <?php foreach ($salesPeople as $sales): ?>
          <a href="https://api.whatsapp.com/send?phone=<?= $sales['phone']; ?>&text=Hallo%20Vicentra,%20Saya%20Ingin%20Memesan%20Mesin%20UV."
            target="_blank"
            class="<?= ($sales['id'] === 1) ? 'bg-[#006db8]' : 'bg-green-600'; ?> sales_<?= $sales['slug']; ?>_cta_link w-full h-[5rem] flex items-center gap-[1.5rem] rounded-full relative py-2 pl-[7rem]">

            <div class="absolute left-0">
              <div class="w-[5.5rem] h-[5.5rem] rounded-full border-[0.188rem] border-white relative">
                <img src="<?= $sales['photo']; ?>" alt="<?= $sales['name']; ?>" class="rounded-full" />
                <div class="w-[1.5rem] h-[1.5rem] flex justify-center items-center bg-white rounded-full absolute right-[-0.75rem] top-[50%] transform translate-y-[-50%]">
                  <i class="fa-brands fa-whatsapp text-green-500"></i>
                </div>
              </div>
            </div>

            <div class="mr-4">
              <div class="flex gap-2">
                <h1 class="text-sm font-medium text-white/50 capitalize">
                  <?= $sales['name']; ?>
                </h1>
                <span class="flex justify-center items-center text-xs font-semibold text-white bg-white/20 px-2 rounded-md capitalize">
                  online
                </span>
              </div>
              <p class="w-full text-sm font-medium text-white mt-1">
                <?= $sales['additional_sentence']; ?>
              </p>
            </div>

          </a>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- CTA SECTION -->

    <!-- FOOTER -->
    <footer class="bg-black py-5 flex justify-center items-center">
      <p class="text-sm text-white">Vicentra © 2025 Created By Vicentra Dev.</p>
    </footer>
    <!-- FOOTER -->
  </div>

  <script defer type="module" src="./assets/js/app.js"></script>
</body>

</html>