<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Rizki Ramadhan",
        "email" => "muhrizram19@gmail.com",
        "image" => "muhrizram.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Si Abdan dari Gua Hantu",
            "slug" => "si-abdan-dari-gua-hantu",
            "author" => "Muhammad Rizki Ramadhan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis soluta doloremque ipsum asperiores natus architecto ullam voluptates tenetur illo aspernatur accusantium suscipit nulla eligendi, culpa sunt veritatis quae nesciunt laudantium obcaecati ratione non, excepturi atque in nisi. Blanditiis fuga officiis, cumque ad distinctio velit. Commodi assumenda voluptate fuga cum reiciendis temporibus libero a rerum nisi similique! Quae iure modi quia vero earum voluptatibus officia dolorum, consequuntur odit dignissimos porro natus officiis soluta voluptates eveniet, placeat vel distinctio cupiditate a deserunt quas explicabo? Exercitationem in nam rem cum consectetur hic non quo, aliquam debitis aut incidunt aperiam. At dolore dolor officiis ducimus illo voluptatem sed, soluta quasi cumque expedita ipsa nesciunt veniam maiores qui quis deleniti eaque saepe! Odio, consectetur eius. Saepe velit nulla accusantium sequi quae atque, provident facere harum consequuntur sed possimus cum nemo, quidem laudantium? Modi dolorum et incidunt. Odit beatae soluta voluptatem nesciunt eius laudantium? Dolorem hic cum, provident asperiores illum nemo modi a recusandae in natus enim et architecto esse maxime animi. Facere nesciunt sit dolorum, error eius assumenda reiciendis, in sint tenetur commodi, voluptatem nisi laborum repellendus expedita enim maxime corporis ullam ad vitae soluta quia? Praesentium voluptatibus, modi perspiciatis rem minima error veritatis maiores?"
        ],
        [
            "title" => "Chandra Manusia Ikan",
            "slug" => "chandra-manusia-ikan",
            "author" => "Kautsar Syaputra",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quae provident, voluptatum labore nulla delectus, debitis officiis natus qui voluptatibus ab id laborum harum iure. Nisi dolorum nam iste maxime ducimus adipisci dolorem rerum aut quos labore laboriosam eveniet aspernatur nulla, quidem, minima possimus sint fugit similique iure! Dicta nobis, maiores delectus dolore molestias mollitia placeat iusto quia exercitationem adipisci ipsam distinctio ipsum doloribus enim velit nisi itaque numquam perspiciatis libero asperiores beatae! Totam ea illo repellendus beatae quo optio rerum maxime? Velit vero corporis error, reiciendis assumenda quod numquam quidem quaerat molestias veritatis dolorem illum, voluptatem odio cumque possimus fuga minima ducimus doloremque. Ipsa distinctio repellendus quis temporibus quod aperiam ex nihil sint doloremque, aliquam iusto quidem ratione impedit beatae reiciendis sit obcaecati itaque soluta at tenetur velit cumque necessitatibus? Deserunt deleniti ipsa culpa, dolore qui quibusdam vel, nesciunt facere tempore et, temporibus aliquid blanditiis debitis sequi. Aperiam maiores consequuntur optio magni inventore ad dolorem velit id voluptates. Quisquam vero sapiente fugit, veniam excepturi possimus nemo corporis laudantium eos libero inventore temporibus quas nihil a exercitationem ab at, laboriosam sit quia labore perferendis consectetur illum neque accusamus? Laboriosam exercitationem officiis perspiciatis ad vitae eligendi atque modi necessitatibus debitis laborum est alias, rerum, unde quam aspernatur perferendis saepe dolorum animi, doloremque ducimus hic obcaecati. Sequi dicta similique molestiae perferendis sint natus sed accusamus commodi harum! Nesciunt, nemo ratione alias laborum ea quod illo voluptas delectus tempora. Magni quisquam ex numquam sint doloribus non ipsa veritatis at, cumque vel eos nisi, quibusdam modi maxime accusamus quas nemo ad ab dolorem aut. Odio maxime veritatis reprehenderit error illo dolore eos vel nemo eius modi quisquam totam consectetur cum quis cupiditate, expedita commodi? Cupiditate nulla nisi illum a vero ab impedit, rem nesciunt, necessitatibus voluptatibus, ipsa ea laborum dolorem facere odit sunt et?"    
        ]
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Si Abdan dari Gua Hantu",
            "slug" => "si-abdan-dari-gua-hantu",
            "author" => "Muhammad Rizki Ramadhan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis soluta doloremque ipsum asperiores natus architecto ullam voluptates tenetur illo aspernatur accusantium suscipit nulla eligendi, culpa sunt veritatis quae nesciunt laudantium obcaecati ratione non, excepturi atque in nisi. Blanditiis fuga officiis, cumque ad distinctio velit. Commodi assumenda voluptate fuga cum reiciendis temporibus libero a rerum nisi similique! Quae iure modi quia vero earum voluptatibus officia dolorum, consequuntur odit dignissimos porro natus officiis soluta voluptates eveniet, placeat vel distinctio cupiditate a deserunt quas explicabo? Exercitationem in nam rem cum consectetur hic non quo, aliquam debitis aut incidunt aperiam. At dolore dolor officiis ducimus illo voluptatem sed, soluta quasi cumque expedita ipsa nesciunt veniam maiores qui quis deleniti eaque saepe! Odio, consectetur eius. Saepe velit nulla accusantium sequi quae atque, provident facere harum consequuntur sed possimus cum nemo, quidem laudantium? Modi dolorum et incidunt. Odit beatae soluta voluptatem nesciunt eius laudantium? Dolorem hic cum, provident asperiores illum nemo modi a recusandae in natus enim et architecto esse maxime animi. Facere nesciunt sit dolorum, error eius assumenda reiciendis, in sint tenetur commodi, voluptatem nisi laborum repellendus expedita enim maxime corporis ullam ad vitae soluta quia? Praesentium voluptatibus, modi perspiciatis rem minima error veritatis maiores?"
        ],
        [
            "title" => "Chandra Manusia Ikan",
            "slug" => "chandra-manusia-ikan",
            "author" => "Kautsar Syaputra",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quae provident, voluptatum labore nulla delectus, debitis officiis natus qui voluptatibus ab id laborum harum iure. Nisi dolorum nam iste maxime ducimus adipisci dolorem rerum aut quos labore laboriosam eveniet aspernatur nulla, quidem, minima possimus sint fugit similique iure! Dicta nobis, maiores delectus dolore molestias mollitia placeat iusto quia exercitationem adipisci ipsam distinctio ipsum doloribus enim velit nisi itaque numquam perspiciatis libero asperiores beatae! Totam ea illo repellendus beatae quo optio rerum maxime? Velit vero corporis error, reiciendis assumenda quod numquam quidem quaerat molestias veritatis dolorem illum, voluptatem odio cumque possimus fuga minima ducimus doloremque. Ipsa distinctio repellendus quis temporibus quod aperiam ex nihil sint doloremque, aliquam iusto quidem ratione impedit beatae reiciendis sit obcaecati itaque soluta at tenetur velit cumque necessitatibus? Deserunt deleniti ipsa culpa, dolore qui quibusdam vel, nesciunt facere tempore et, temporibus aliquid blanditiis debitis sequi. Aperiam maiores consequuntur optio magni inventore ad dolorem velit id voluptates. Quisquam vero sapiente fugit, veniam excepturi possimus nemo corporis laudantium eos libero inventore temporibus quas nihil a exercitationem ab at, laboriosam sit quia labore perferendis consectetur illum neque accusamus? Laboriosam exercitationem officiis perspiciatis ad vitae eligendi atque modi necessitatibus debitis laborum est alias, rerum, unde quam aspernatur perferendis saepe dolorum animi, doloremque ducimus hic obcaecati. Sequi dicta similique molestiae perferendis sint natus sed accusamus commodi harum! Nesciunt, nemo ratione alias laborum ea quod illo voluptas delectus tempora. Magni quisquam ex numquam sint doloribus non ipsa veritatis at, cumque vel eos nisi, quibusdam modi maxime accusamus quas nemo ad ab dolorem aut. Odio maxime veritatis reprehenderit error illo dolore eos vel nemo eius modi quisquam totam consectetur cum quis cupiditate, expedita commodi? Cupiditate nulla nisi illum a vero ab impedit, rem nesciunt, necessitatibus voluptatibus, ipsa ea laborum dolorem facere odit sunt et?"    
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] == $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
