import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
  setup() {
    const products = ref([
      {
        id: 1,
        name: 'Nocai NC-UV0609PEIII-II',
        tagline: 'MESIN UV FLATBED NC-UV0609 PEIII-II (i-1600)',
        photo: './assets/images/mesin/nocai-nc-uv0609peiii-ii.webp',
        short_description: 'NC-UV0609PEIII-II adalah printer UV flatbed profesional yang dirancang untuk industri printing dengan kebutuhan hasil cetak premium pada berbagai material. Cocok untuk perusahaan advertising, manufaktur, dan industri dekorasi yang membutuhkan hasil cetak berkualitas tinggi pada berbagai media.',
        link_product: 'https://vicentra.co.id/product/mesin/digital-printing/uv/nocai-nc-uv0609peiii-ii',
      },
      {
        id: 2,
        name: 'MJII UV DTF-30',
        tagline: 'UV DTF Printer',
        photo: './assets/images/mesin/mjii-uv-dtf-30.webp',
        short_description: 'MJII UV DTF-30 adalah mesin cetak yang menggunakan teknologi UV untuk mencetak pada berbagai jenis bahan seperti kaca, keramik, plastik, logam, dan lainnya. Mesin ini dilengkapi dengan tiga printhead EPSON i1600 dan menggunakan software RIPPrint. Dengan kecepatan cetak hingga 11 m²/jam dan lebar cetak 360 mm, mesin ini cocok untuk aplikasi dalam kemasan, peralatan rumah tangga, dan peralatan industri.',
        link_product: 'https://vicentra.co.id/product/mesin/digital-printing/uv/mjii-uv-dtf-30',
      },
      {
        id: 3,
        name: 'NEU Jet MPUVRH1804',
        tagline: 'MESIN PRINTER UV ROL TO ROL HP 1804',
        photo: './assets/images/mesin/neu-jet-mpuvrh1804.webp',
        short_description: 'NEU Jet MPUVRH1804 adalah mesin printer dengan spesifikasi tinggi yang dilengkapi dengan 4 printhead EPSON i3200 dan berbagai fitur canggih seperti sistem pengisian tinta tekanan negatif, sistem pengeringan dan pemanasan dengan pemanas IR depan, serta sistem pencahayaan LED pada tempat pencetakan. Mesin ini mendukung mode warna CMYK+W+V dan memiliki ukuran printer 3100×700×1450 mm dengan berat bersih 240 kg.',
        link_product: 'https://vicentra.co.id/product/mesin/digital-printing/uv/neu-jet-mpuvrh1804',
      }
    ]);
    const salesPeople = ref([
      {
        id: 1,
        name: 'Layanan 24 Jam',
        slug: 'layanan_24_jam',
        phone: '6281232548368',
        photo: 'https://vicentra.co.id/storage/sales-people/vicentra-24-jam.webp',
        additional_sentence: 'Ada pertanyaan atau ingin memesan produk ini?'
      },
      // {
      //   id: 2,
      //   name: 'Yaya',
      //   slug: 'yaya',
      //   phone: '6285175005535',
      //   photo: 'https://vicentra.co.id/storage/sales-people/sales-yaya.webp',
      //   additional_sentence: 'Support 24 jam'
      // },
      // {
      //   id: 3,
      //   name: 'Alda',
      //   slug: 'alda',
      //   phone: '6285183171200',
      //   photo: 'https://vicentra.co.id/storage/sales-people/sales-alda.webp',
      //   additional_sentence: 'Ada pertanyaan atau ingin memesan produk ini?'
      // },
      // {
      //   id: 4,
      //   name: 'Ella',
      //   slug: 'ella',
      //   phone: '6285733399974',
      //   photo: 'https://vicentra.co.id/storage/sales-people/sales-ella.webp',
      //   additional_sentence: 'Ada pertanyaan atau ingin memesan produk ini?'
      // },
    ]);
    const isMenuShow = ref(false);

    const toggleMenu = () => {
      isMenuShow.value = !isMenuShow.value;
    }

    return {
      products,
      salesPeople,
      isMenuShow,
      toggleMenu
    }
  }
}).mount('#app')