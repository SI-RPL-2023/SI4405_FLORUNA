@extends('Template.Template')

@section('konten')


<section id="Header" class="min-vh-100">
    <div class="container-fluid bg-transparant py-5 min-vh-100">
        <div class="mt-5 pt-5">
            <div class="text-center mt-5 py-5">
                <h1 class="display-1 fw-bold text-white mt-5 pt-5 mb-4">FLORUNA</h1>
                <h3 class="fs-4 text-white fw-light">For A Better Place</h3>
            </div>
        </div>
    </div>
</section>

<section id="Protect" class="min-vh-100 bg-white">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="display-6">Protect Our Planet</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-5 mt-5">
            <div class="col">
                <div class="card h-100 border-0">
                    <img src="{{ asset('src/img/underwater.jpg') }}" class="card-img shadow-lg bg-body"
                        alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0">
                    <img src="{{ asset('src/img/forest.jpg') }}" class="card-img shadow-lg bg-body" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0">
                    <img src="{{ asset('src/img/animal.jpg') }}" class="card-img shadow-lg bg-body" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Donate" class="min-vh-100 bg-white">
    <div class="container-fluid bg-transparant py-5 min-vh-100">
        <div class="text-center my-5">
            <h1 class="display-6 text-white">Donate</h1>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-5">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col">
                        <div class="card border-0 h-100 text-center">
                            <img src="{{ asset('donasi/Orang Utan.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Donation Title</h5>
                                <div class="progress">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><a href="#"
                                        class="btn px-5 btn-primary">Donate</a></small>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<section id="News" class="min-vh-100 bg-white">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="display-6">News</h1>
        </div>
        <div class="row g-5 mt-5">
            <div class="col">
                <div class="card h-100 border-0">
                    <img src="{{ asset('news/kebakaran.jpg') }}" class="card-img shadow-lg bg-body"
                        alt="...">
                </div>
            </div>
            <div class="col">
                <h1 class="fs-4 mb-4">Kebakaran Di Hutan X</h1>
                <p class="text-justify">
                    {{ Str::limit(
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur
                                                                    incidunt tempore dignissimos sequi voluptas, laboriosam fuga officiis vitae! Accusantium ratione
                                                                    eos praesentium necessitatibus quos molestiae! Reprehenderit officia vitae excepturi consectetur
                                                                    ratione odio illo quas ea velit. Odio in omnis laudantium sapiente, harum dolorem consectetur
                                                                    cum dolor dignissimos esse voluptate adipisci et voluptatibus natus explicabo officia numquam.
                                                                    Suscipit earum veritatis officia cum at aut a recusandae totam pariatur dicta officiis, soluta
                                                                    voluptatem molestiae, quod iure. Repellendus saepe ipsam modi cum incidunt voluptatibus, debitis
                                                                    sequi similique reprehenderit, libero ipsum, ad rerum quibusdam consequatur quidem optio minus
                                                                    est officia praesentium facere exercitationem repellat quam tempora! Deserunt corporis minus
                                                                    ipsum maiores quia? Adipisci ullam vero reiciendis eveniet corrupti recusandae incidunt
                                                                    obcaecati deleniti itaque non autem perspiciatis illo eius voluptates nihil, porro reprehenderit
                                                                    enim qui ipsum. Aperiam quo animi repellendus. Nisi, praesentium aliquam? Soluta, dolorem! Optio
                                                                    est quas dolorum quasi unde culpa dicta nisi libero. Deserunt doloremque non dolorem vero?
                                                                    Accusantium quod, architecto in porro, voluptatibus perspiciatis non ratione, rerum sed
                                                                    exercitationem atque eius. Atque explicabo pariatur consequatur voluptate quasi quas! Nostrum,
                                                                    consectetur unde repellat placeat omnis enim tempora magnam, laboriosam officia quis labore nisi
                                                                    explicabo consequatur ducimus commodi dolores eveniet fugiat. Temporibus maxime iusto id
                                                                    voluptas recusandae tenetur, impedit porro assumenda eligendi, provident ipsam corrupti odit?
                                                                    Recusandae enim ut molestias fuga accusantium, excepturi doloremque officiis ducimus soluta est
                                                                    ex nulla numquam quibusdam? Suscipit eum debitis culpa, recusandae praesentium dolores voluptas
                                                                    ipsam mollitia laborum at omnis nihil expedita consectetur hic tempore fuga veniam quidem
                                                                    consequuntur, doloremque esse sed consequatur obcaecati dolore ducimus. Laudantium, eveniet
                                                                    fugit praesentium dolores obcaecati ut officia est ea libero provident, ab doloremque dolore
                                                                    iste placeat velit aperiam, sint delectus veniam reiciendis suscipit dolorum. Vel nobis nostrum
                                                                    fugit assumenda iure nihil molestiae aliquam, ipsum facere quam. Dolore animi et eius cum beatae
                                                                    voluptatum sit architecto similique tenetur saepe id maiores facere earum nihil eos consequatur,
                                                                    dicta corporis expedita quia sint. Molestias ex corrupti sequi voluptate repellat aut ab
                                                                    deserunt beatae autem quos, iure illo repudiandae tempore reprehenderit cum soluta voluptatibus
                                                                    exercitationem laboriosam expedita amet ea quidem facilis? Fugiat est excepturi cum nostrum
                                                                    tempora necessitatibus libero quaerat, eveniet numquam deleniti ut harum placeat adipisci fuga
                                                                    hic veritatis ab nam. Sit odit cupiditate, quis quae voluptatem nihil molestias facilis ducimus
                                                                    corrupti ratione, qui laborum aliquam modi quam, quos debitis. Repudiandae eaque temporibus
                                                                    beatae quae officia laboriosam, enim eligendi nulla perspiciatis, error consectetur. Repellat
                                                                    amet perspiciatis illum impedit porro molestias hic magnam ducimus inventore ex placeat
                                                                    recusandae, non, eligendi possimus, velit fuga ab voluptas ratione ea laborum. Cum recusandae
                                                                    autem id optio veniam. Impedit repellendus sequi inventore architecto doloribus dolores
                                                                    asperiores atque. Id delectus laboriosam cupiditate quisquam, iusto quibusdam! Repellendus dolor
                                                                    odio tempore cum praesentium tenetur officiis rem laborum sit sequi consectetur hic quod
                                                                    doloribus vel perspiciatis asperiores, dolorum perferendis vero at enim molestiae. Quam harum
                                                                    aliquid a provident quia libero, autem necessitatibus asperiores blanditiis omnis dolorem ad
                                                                    commodi, aspernatur modi laborum unde sapiente temporibus doloribus. Reprehenderit ipsa ex
                                                                    dolorem cumque soluta. Esse, cum?',
                        1000,
                    ) }}
                </p>

                <div class="text-end mt-4">
                    <a href="#" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
