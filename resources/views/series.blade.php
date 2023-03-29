<x-main>
        <section class="main-container ">
            <div class="location" id="home">
                <h1 id="home">Serie su FakeFlix</h1>
                <div class="box">
                    @foreach ($array as $item )
                    <a href="{{route('detail',$item['id'])}}">
                        <img src="{{$item['img']}}" alt="">
                    </a>
                    @endforeach
                </div>
            </div>

        </section>
</x-main>