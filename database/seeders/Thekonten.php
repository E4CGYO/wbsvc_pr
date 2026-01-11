<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class Thekonten extends Seeder
{
    public function run(): void
    {

        //makanan modern

        Post::create([
            'title' => 'Burger Beef',
            'content' => 'Burger beef premium dengan daging sapi pilihan yang dimasak sempurna, disajikan dengan saus spesial buatan rumah, lettuce segar, tomat merah, keju mozzarella, dan roti brioche yang lembut. Kombinasi sempurna antara tekstur renyah dan kelembutan yang akan memanjakan lidah Anda.',
            'image' => 'modern/burger beef.jpg',
            'linkfile' => 'https://drive.google.com/file/d/1hnF8lR0IYmNiAXkVSfri08BoK-SIJw44/view?usp=drive_link',
            ]);

        // Post::create([
        //     'title' => 'Fried Chicken ala Korea',
        //     'content' => 'Ayam goreng renyah dengan bumbu khas Korea yang menggabungkan cita rasa pedas dan manis. Dilapisi kulit yang garing sempurna sambil daging tetap juicy. Disajikan dengan saus gochujang spesial, coleslaw segar, dan acar asinan yang memberikan sensasi rasa yang kompleks dan tak terlupakan.',
        //     'image' => 'modern/Fried Chicken ala Korea.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Hot Dog',
        //     'content' => 'Hot dog premium dengan sosis berkualitas tinggi yang dimasak hingga matang sempurna. Disajikan dalam roti hot dog yang empuk dengan saus spesial, mustard, mayo, dan pilihan topping seperti bawang goreng, relish, dan aneka sayuran segar untuk pengalaman kuliner yang memuaskan.',
        //     'image' => 'modern/Hot Dog.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Kebab',
        //     'content' => 'Kebab autentik dengan daging yang empuk dan telah dimarinasi dengan bumbu-bumbu pilihan yang wangi dan lezat. Dilengkapi dengan sayuran segar seperti tomat, bawang merah, dan selada, kemudian dibungkus dalam roti pita hangat. Disajikan dengan saus tahini dan sambal yang sempurna untuk melengkapi cita rasa timur tengah yang autentik.',
        //     'image' => 'modern/kebab.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Pizza Pepperoni',
        //     'content' => 'Pizza dengan crust renyah dan topping pepperoni yang lezat. Dilengkapi dengan saus tomat, keju mozzarella, dan bahan-bahan premium lainnya. Disajikan dalam potongan-potongan yang menggugah selera.',
        //     'image' => 'modern/Pizza Pepperoni.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Ramen',
        //     'content' => 'Ramen dengan kuah kaldu yang kaya dan lezat, disajikan dengan mie yang empuk, telur rebus, dan topping seperti pork belly, jamur shiitake, dan daun bawang. Disajikan dalam mangkuk hangat yang menggugah selera.',
        //     'image' => 'modern/ramen.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Sandwich Cornet Telur',
        //     'content' => 'Sandwich cornet telur yang lezat dengan isian telur orak-arik yang creamy, ditambah dengan sayuran segar seperti selada, tomat, dan mentimun. Disajikan dalam roti cornet yang lembut dan gurih, cocok untuk sarapan atau camilan ringan kapan saja.',
        //     'image' => 'modern/Sandwich cornet telur.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Spaghetti Bolognese',
        //     'content' => 'Spaghetti dengan saus bolognese yang kaya dan lezat, disajikan dengan mie yang empuk, daging cincang yang lembut, dan topping seperti keju parmesan. Disajikan dalam mangkuk hangat yang menggugah selera.',
        //     'image' => 'modern/Spaghetti Bolognese.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Sushi Roll',
        //     'content' => 'Sushi roll dengan bahan-bahan segar seperti ikan salmon, mentimun, dan alga nori, dilapisi dengan nasi sushi yang lembut dan disajikan dengan saus wasabi dan soy sauce.',
        //     'image' => 'modern/sushi roll.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Tacos',
        //     'content' => 'Tacos dengan daging sapi panggang yang lembut, disajikan dengan tortilla yang lembut, sayuran segar seperti selada, tomat, dan bawang merah, serta saus sambal yang pedas dan lezat.',
        //     'image' => 'modern/tacos.jpg',
        // ]);

        // //makanan pembuka

        // Post::create([
        //     'title' => 'Canape Vegetables cheese pepperoni',
        //     'content' => 'Canape dengan sayuran segar dan topping keju serta pepperoni, disajikan dalam bentuk yang menggugah selera.',
        //     'image' => 'Pembuka/Canape Vegetables cheese pepperoni.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Kroket kentang',
        //     'content' => 'Kroket kentang gurih dengan isian daging cincang dan rempah pilihan, disajikan dengan saus sambal yang pedas dan lezat.',
        //     'image' => 'Pembuka/kroket kentang.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Lumpia sayur',
        //     'content' => 'Lumpia sayur dengan isian sayuran segar dan topping keju serta pepperoni, disajikan dalam bentuk yang menggugah selera.',
        //     'image' => 'Pembuka/lumpia sayur.jpg',
        // ]);

        // Post::create([
        //     'title' => 'risoles mayo',
        //     'content' => 'Risoles mayo dengan isian ayam suwir dan saus mayo yang creamy, dibalut dengan kulit risoles yang renyah dan gurih.',
        //     'image' => 'Pembuka/risoles mayo.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Salad buah',
        //     'content' => 'Salad buah dengan campuran buah-buahan segar dan topping keju serta pepperoni, disajikan dalam bentuk yang menggugah selera.',
        //     'image' => 'Pembuka/salad buah.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Salad sayur',
        //     'content' => 'Salad sayur dengan campuran sayuran segar dan topping keju serta pepperoni, disajikan dalam bentuk yang menggugah selera.',
        //     'image' => 'Pembuka/salad sayur.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Springg roll',
        //     'content' => 'Springg roll dengan isian sayuran segar dan topping keju serta pepperoni, disajikan dalam bentuk yang menggugah selera.',
        //     'image' => 'Pembuka/springg roll.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Sup Ayam',
        //     'content' => 'Sup ayam dengan kuah yang lezat dan hangat, disajikan dengan potongan daging ayam yang lembut dan sayuran segar seperti wortel, kentang, dan seledri.',
        //     'image' => 'Pembuka/sup ayam.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Sup Jagung',
        //     'content' => 'Sup jagung dengan kuah yang lezat dan hangat, disajikan dengan potongan jagung manis dan sayuran segar seperti wortel, kentang, dan seledri.',
        //     'image' => 'Pembuka/sup jagung.jpg',
        // ]);

        // Post::create([
        //     'title' => 'tahu isi',
        //     'content' => 'Tahu isi dengan isian sayuran segar dan topping keju serta pepperoni, disajikan dalam bentuk yang menggugah selera.',
        //     'image' => 'Pembuka/tahu isi.jpg',
        // ]);

        // //penutup

        // Post::create([
        //     'title' => 'Pudding Coklat',
        //     'content' => 'Pudding coklat lezat dengan tekstur lembut dan rasa manis yang pas, disajikan dengan saus coklat hangat dan taburan kacang almond di atasnya.',
        //     'image' => 'Penutup/Pudding Coklat.jpg',
        // ]);

        // Post::create([
        //     'title' => 'banana split',
        //     'content' => 'Banana split segar dengan potongan pisang matang, es krim vanila, coklat, dan stroberi, disajikan dengan saus coklat dan taburan kacang di atasnya.',
        //     'image' => 'Penutup/banana split.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Brownies',
        //     'content' => 'Brownies lezat dengan tekstur lembut dan rasa manis yang pas, disajikan dengan saus coklat hangat dan taburan kacang di atasnya.',
        //     'image' => 'Penutup/brownies.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Cheesecake',
        //     'content' => 'Cheesecake lezat dengan tekstur lembut dan rasa manis yang pas, disajikan dengan saus coklat hangat dan taburan kacang di atasnya.',
        //     'image' => 'Penutup/cheesecake.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Es krim vanilla',
        //     'content' => 'Es krim vanilla lezat dengan tekstur lembut dan rasa manis yang pas, disajikan dengan saus coklat hangat dan taburan kacang di atasnya.',
        //     'image' => 'Penutup/es krim vanilla.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Pancake',
        //     'content' => 'Pancake lembut dan fluffy, disajikan dengan sirup maple, mentega cair, dan taburan buah segar seperti stroberi dan blueberry di atasnya.',
        //     'image' => 'Penutup/pancake.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Pudding Buah',
        //     'content' => 'Pudding buah lezat dengan tekstur lembut dan rasa manis yang pas, disajikan dengan saus coklat hangat dan taburan kacang di atasnya.',
        //     'image' => 'Penutup/pudding buah.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Susu Goreng',
        //     'content' => 'Susu goreng krispi di luar namun lembut di dalam, disajikan dengan taburan gula halus dan saus karamel yang manis untuk pengalaman pencuci mulut yang unik dan lezat.',
        //     'image' => 'Penutup/susu goreng.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Donat',
        //     'content' => 'Donat lembut dan lezat dengan tekstur yang empuk dan rasa manis yang pas, disajikan dengan taburan gula halus dan saus karamel yang manis untuk pengalaman pencuci mulut yang unik dan lezat.',
        //     'image' => 'Penutup/donat.jpg',
        // ]);

        //  Post::create([
        //     'title' => 'es buah',
        //     'content' => 'Es buah segar dengan potongan buah-buahan segar seperti stroberi, blueberry, dan melon, disajikan dengan saus karamel yang manis untuk pengalaman pencuci mulut yang unik dan lezat.',
        //     'image' => 'Penutup/es buah.jpg',
        // ]);

        // //traditional nusantara

        // // Menambahkan data konten tradisional nusantara
        // Post::create([
        //     'title' => 'Ayam Betutut',
        //     'content' => 'Ayam betutu adalah hidangan tradisional Bali yang terkenal dengan cita rasa pedas dan rempah-rempahnya yang kaya. Hidangan ini biasanya disiapkan dengan membungkus ayam utuh yang telah dibumbui dengan campuran rempah khas Bali, seperti bawang merah, bawang putih, cabai, jahe, kunyit, dan serai, dalam daun pisang sebelum dipanggang atau dikukus. Proses memasak ini memungkinkan bumbu meresap ke dalam daging ayam, menghasilkan rasa yang lezat dan aromatik. Ayam betutu sering disajikan dalam acara-acara adat dan perayaan di Bali, menjadi simbol kekayaan kuliner daerah tersebut.',
        //     'image' => 'Tradisional Nusantara/ayam betutut.jpg',
        // ]);

        //   Post::create([
        //     'title' => 'Bubur tinutuan',
        //     'content' => 'Bubur tinutuan adalah bubur tradisional khas Indonesia yang terkenal dengan rasa gurih dan aroma rempah-rempahnya. Hidangan ini biasanya disajikan dengan campuran bahan-bahan seperti daging sapi, ayam, atau ikan, serta bumbu rempah khas seperti lengkuas, serai, dan daun jeruk. Bubur ini memiliki tekstur yang lembut dan kental, serta disajikan hangat dengan pelengkap seperti telur rebus, sambal, dan acar. Bubur tinutuan sering menjadi pilihan utama dalam makanan tradisional Indonesia.',
        //     'image' => 'Tradisional Nusantara/bubur tinutuan.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Coto Makassar',
        //     'content' => 'Coto Makassar adalah hidangan tradisional khas Makassar, Sulawesi Selatan, yang terkenal dengan cita rasa gurih dan kaya rempah. Hidangan ini terdiri dari potongan daging sapi yang dimasak dalam kuah kaldu kental yang terbuat dari campuran rempah-rempah seperti ketumbar, jintan, bawang merah, bawang putih, dan serai. Coto Makassar biasanya disajikan dengan ketupat atau buras (nasi yang dibungkus daun pisang) serta pelengkap seperti tauge, bawang goreng, dan sambal. Hidangan ini sangat populer di kalangan masyarakat lokal dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Tradisional Nusantara/coto makassar.jpg',
        // ]);

        // Post::create([
        //     'title' => 'gudeg',
        //     'content' => 'Gudeg adalah hidangan tradisional khas Yogyakarta yang terkenal dengan rasa manis dan gurih. Hidangan ini terbuat dari nangka muda yang dimasak dalam kuah kental yang terbuat dari campuran bumbu rempah seperti kelapa, gula jawa, dan bahan-bahan lainnya. Gudeg biasanya disajikan dengan nasi putih, telur rebus, dan sambal. Hidangan ini sangat populer di kalangan masyarakat lokal dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Tradisional Nusantara/gudeg.jpg',
        // ]);

        // Post::create([
        //     'title' => 'nasi liwet',
        //     'content' => 'Nasi liwet adalah hidangan tradisional khas Yogyakarta yang terkenal dengan rasa manis dan gurih. Hidangan ini terbuat dari nasi yang dimasak dalam kuah kental yang terbuat dari campuran bumbu rempah seperti kelapa, gula jawa, dan bahan-bahan lainnya. Nasi liwet biasanya disajikan dengan telur rebus, sambal, dan pelengkap lainnya. Hidangan ini sangat populer di kalangan masyarakat lokal dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Tradisional Nusantara/nasi liwet.jpg',
        // ]);

        //  Post::create([
        //     'title' => 'papeda',
        //     'content' => 'Papeda adalah hidangan tradisional khas Indonesia yang terkenal dengan cita rasa manis dan gurih. Hidangan ini terbuat dari campuran bahan-bahan seperti nangka muda, kelapa, dan gula jawa yang dimasak dalam kuah kental. Papeda biasanya disajikan dengan pelengkap seperti sambal, kerupuk, dan telur rebus. Hidangan ini sangat populer di kalangan masyarakat lokal dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Tradisional Nusantara/papeda.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Pempek',
        //     'content' => 'Pempek adalah hidangan tradisional khas Palembang, Sumatera Selatan, yang terkenal dengan cita rasa gurih dan tekstur kenyalnya. Hidangan ini terbuat dari campuran ikan tenggiri yang dihaluskan dengan tepung sagu, kemudian dibentuk menjadi berbagai macam bentuk seperti lenjer, kapal selam, dan adaan sebelum digoreng atau direbus. Pempek biasanya disajikan dengan kuah cuko yang terbuat dari campuran gula merah, cuka, bawang putih, dan cabai, memberikan rasa asam, manis, dan pedas yang khas. Hidangan ini sangat populer di kalangan masyarakat lokal dan sering dinikmati sebagai camilan atau makanan utama.',
        //     'image' => 'Tradisional Nusantara/pempek.jpg',
        // ]);

        // Post::create([
        //     'title' => 'rawon',
        //     'content' => 'Rawon adalah hidangan tradisional khas Jawa Timur yang terkenal dengan cita rasa gurih dan tekstur daging yang empuk. Hidangan ini terbuat dari potongan daging sapi yang dimasak dalam kuah hitam kental yang terbuat dari bumbu rempah seperti kluwek, cabai, serai, lengkuas, dan daun jeruk. Rawon biasanya disajikan dengan nasi putih, telur rebus, dan sambal. Hidangan ini sangat populer di kalangan masyarakat lokal dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Tradisional Nusantara/rawon.jpg',
        // ]);

        // Post::create([
        //     'title' => 'Rendang',
        //     'content' => 'Rendang adalah hidangan tradisional khas Minangkabau, Sumatera Barat, yang terkenal dengan cita rasa kaya rempah dan tekstur daging yang empuk. Hidangan ini terbuat dari potongan daging sapi yang dimasak dalam santan kental bersama campuran bumbu rempah seperti cabai, serai, lengkuas, daun jeruk, dan kelapa parut. Proses memasak rendang memakan waktu yang cukup lama, sehingga bumbu meresap sempurna ke dalam daging, menghasilkan rasa yang lezat dan aromatik. Rendang sering disajikan dalam acara-acara adat dan perayaan di Indonesia, menjadi simbol kekayaan kuliner nusantara.',
        //     'image' => 'Tradisional Nusantara/rendang.jpg',
        // ]);
        // Post::create([
        //     'title' => 'Soto betawi',
        //     'content' => 'Soto betawi adalah hidangan tradisional khas Jakarta yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari potongan daging sapi yang dimasak dalam kuah kaldu kuning yang kaya rempah, seperti kunyit, serai, daun jeruk, dan bawang putih. Soto betawi biasanya disajikan dengan nasi putih atau lontong, serta pelengkap seperti telur rebus, kentang goreng, bawang goreng, dan sambal. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Tradisional Nusantara/soto betawi.jpg',
        // ]);
        // // selesai data tradisional nusantara

        // // Menambahkan data konten utama
        // Post::create([
        //     'title' => 'ayam bakar kecap',
        //     'content' => 'Ayam bakar adalah hidangan yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari potongan daging ayam yang dibumbui dengan campuran bumbu khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Ayam bakar biasanya disajikan dengan nasi putih atau lontong, serta pelengkap seperti telur rebus, kentang goreng, bawang goreng, dan sambal. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/ayam bakar kecap.jpg',
        // ]);
        // Post::create([
        //     'title' => 'ayam goreng',
        //     'content' => 'Ayam goreng adalah hidangan yang terkenal dengan cita rasa gurih dan tekstur kulit yang renyah. Hidangan ini terdiri dari potongan daging ayam yang digoreng hingga matang sempurna, biasanya dibumbui dengan campuran bumbu khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Ayam goreng biasanya disajikan dengan nasi putih atau lontong, serta pelengkap seperti telur rebus, kentang goreng, bawang goreng, dan sambal. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/ayam goreng.jpg',
        // ]);
        // Post::create([
        //     'title' => 'beef steak',
        //     'content' => 'Beef steak adalah hidangan yang terkenal dengan tekstur daging yang empuk dan cita rasa gurih. Hidangan ini terdiri dari potongan daging sapi yang dipanggang atau digoreng hingga matang sempurna, biasanya dibumbui dengan campuran bumbu khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Beef steak biasanya disajikan dengan nasi putih atau lontong, serta pelengkap seperti telur rebus, kentang goreng, bawang goreng, dan sambal. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/beef steak.jpg',
        // ]);

        // Post::create([
        //     'title' => 'capcay',
        //     'content' => 'Capcay adalah hidangan yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari campuran sayuran seperti sawi, kubis, dan jamur yang ditumis bersama bumbu khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Capcay biasanya disajikan dengan nasi putih atau lontong, serta pelengkap seperti telur rebus, kentang goreng, bawang goreng, dan sambal. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/capcay.jpg',
        // ]);
        //   Post::create([
        //     'title' => 'chicken teriyaki',
        //     'content' => 'Chicken teriyaki adalah hidangan yang terkenal dengan cita rasa manis dan gurih. Hidangan ini terdiri dari potongan daging ayam yang direndam dalam saus teriyaki khas Jepang, kemudian dipanggang atau digoreng hingga matang sempurna. Chicken teriyaki biasanya disajikan dengan nasi putih atau lontong, serta pelengkap seperti telur rebus, kentang goreng, bawang goreng, dan sambal. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/Chicken Teriyaki Yakitori.jpg',
        // ]);
        // Post::create([
        //     'title' => 'ikan bakar bumbu kuning',
        //     'content' => 'Ikan bakar bumbu kuning adalah hidangan yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari ikan yang dibakar dengan bumbu kuning khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Ikan bakar bumbu kuning biasanya disajikan dengan nasi putih atau lontong, serta pelengkap seperti telur rebus, kentang goreng, bawang goreng, dan sambal. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/ikan bakar bumbu kuning.jpg',
        // ]);
        // Post::create([
        //     'title' => 'mie goreng',
        //     'content' => 'Mie goreng adalah hidangan yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari mie yang digoreng bersama bumbu khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Mie goreng biasanya disajikan dengan pelengkap seperti telur mata sapi, ayam goreng, kerupuk, dan acar. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/mie goreng.jpg',
        // ]);
        // Post::create([
        //     'title' => 'nasi goreng',
        //     'content' => 'Nasi goreng adalah hidangan yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari nasi yang digoreng bersama bumbu khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Nasi goreng biasanya disajikan dengan pelengkap seperti telur mata sapi, ayam goreng, kerupuk, dan acar. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/nasi goreng.jpg',
        // ]);
        // Post::create([
        //     'title' => 'rendang daging',
        //     'content' => 'Rendang daging adalah hidangan yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari daging yang dimasak dengan santan dan bumbu khas Indonesia seperti daun pandan, serai, dan daun salam. Rendang daging biasanya disajikan dengan pelengkap seperti ayam goreng, telur balado, tempe orek, sambal, dan kerupuk. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/rendang daging.jpg',
        // ]);
        // Post::create([
        //     'title' => 'soto ayam',
        //     'content' => 'Soto ayam adalah hidangan yang terkenal dengan cita rasa gurih dan aroma rempah-rempahnya. Hidangan ini terdiri dari potongan daging ayam yang ditusuk pada tusuk sate, kemudian dipanggang dengan bumbu khas Indonesia seperti kecap manis, bawang putih, bawang merah, dan cabai. Soto ayam biasanya disajikan dengan pelengkap seperti lontong, ketupat, sambal kacang, dan acar. Hidangan ini sangat populer di seluruh Indonesia dan sering dinikmati sebagai makanan utama dalam berbagai acara.',
        //     'image' => 'Utama/soto ayam.jpg',
        // ]);
    //   selesai data utama


    }
}
