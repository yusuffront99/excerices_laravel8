@extends('layouts.main')

@section('container')
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        {!!$post->body!!}
        <a href="/posts" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection

{{-- Post::create([
    "title"=>"Blog Ketiga",
    "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.", 
    "body"=>"<h1>Lorem, ipsum dolor.</h1><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore dicta ullam voluptatibus voluptatum voluptates, totam tempora, ad dignissimos ex aliquid! Vitae, quaerat exercitationem voluptatem, aut nostrum dolorem cumque fuga sit quae autem distinctio possimus, hic eos amet. Quo temporibus modi quam eum nihil, dicta maiores consequatur aliquam sed, aspernatur provident illo nesciunt veniam. Ad fugit voluptatem non delectus consequuntur. Quis numquam possimus, quo nihil in cupiditate? Debitis impedit neque, nesciunt similique rem accusantium minus pariatur. Mollitia porro nulla ratione, vitae minima debitis voluptatem. Sit, rerum aliquid. Quis nihil aliquid consequatur eveniet, dolores, assumenda sit nesciunt hic excepturi, voluptate blanditiis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro deserunt ipsam quam amet explicabo, dolore, consequatur sint iusto laborum aliquid voluptate facere? Quibusdam asperiores non sed debitis nam quae atque modi, in assumenda delectus aut voluptatem illum esse, ad iusto soluta reiciendis ipsum? Sapiente, pariatur maiores illum ipsam similique molestiae ex sint est harum nemo asperiores dolorum voluptate expedita, architecto ipsum soluta placeat voluptates autem inventore. Voluptate, porro quasi. Sint vero libero et cumque reiciendis, totam voluptatem doloribus consequuntur labore earum quis doloremque itaque distinctio ab iure cupiditate officia cum error expedita, nulla in, mollitia harum quos tenetur. Error, totam. Tempora ipsa fugiat perferendis, delectus rem earum, ab mollitia eius dolorum modi enim illo sapiente amet? Eum optio quas ipsam suscipit amet expedita incidunt reiciendis qui fugit harum est reprehenderit numquam velit deleniti quis at, aperiam corporis molestiae quaerat nisi consequatur autem libero obcaecati tenetur! Illum debitis ipsum assumenda pariatur est neque fugiat sint quis aspernatur iusto eius asperiores aliquid perspiciatis, obcaecati amet! Corrupti magni sit laborum ut suscipit neque dolor veniam, maiores accusamus in eveniet, totam officiis fugit minus nobis. Porro explicabo, cupiditate sint reiciendis quidem numquam vitae pariatur voluptatum architecto blanditiis, illo voluptatibus consequuntur consectetur sed aspernatur optio?</p>"
]) --}}

