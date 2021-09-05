@extends('layouts.main')

@section('container')
<div class="row">
    @foreach($posts as $post)
        <div class="col-sm-6 mb-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{$post->title}} </h5>
                <h5 class="card-subtitle text-muted"> {{$post->judul}} </h5><hr>
                <p class="card-text mt-3"> {{$post->excerpt}} </p>
                <a href="/posts/{{$post->slug}}" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    @endforeach
</div>
@endsection


{{-- 
Post::create([
    'title' => 'Blog Three',
    'slug'=>'blog_3',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem molestias eius in impedit esse tenetur ex magni reprehenderit',
    'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates non unde nulla aperiam cumque ullam iure debitis saepe consequatur possimus molestias id tempore voluptatibus minus odit voluptatem amet rem, quod asperiores porro quia. Porro itaque impedit ipsa eveniet ipsam eius explicabo, voluptates dolore quod blanditiis odio veritatis cumque ratione atque assumenda deserunt beatae officia doloremque corrupti ullam! Eos illo nisi facere animi qui exercitationem doloremque maxime ipsa, hic vitae veritatis totam provident dolores voluptate voluptatum tenetur corrupti. Commodi provident dignissimos vitae natus perspiciatis aut quaerat iure pariatur esse accusamus consequatur rerum, sunt hic a dolorem fugiat soluta porro vel consectetur?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iste tempora architecto rem cupiditate ratione accusamus officia est nesciunt dolores eveniet voluptate repudiandae sit, explicabo velit ipsam quas consectetur sequi soluta maxime. Ratione animi et ullam fugiat eligendi. Officia, veritatis nesciunt? Molestias neque consectetur animi perspiciatis ut nemo a inventore dolor, accusantium sed quod facilis perferendis aspernatur deserunt odit eveniet. Optio voluptate earum dolor, non quidem enim reiciendis eligendi commodi nam debitis quia maiores dolorum nihil libero magni autem, recusandae quibusdam ex eius ducimus vitae, ipsa exercitationem delectus iure! Rerum nostrum fugit natus ipsa mollitia, itaque, culpa autem recusandae ut corrupti fugiat maiores, eos voluptates accusamus architecto sed eligendi. Aspernatur, ratione veniam repellendus obcaecati sit, tempora ipsum delectus ducimus dolore inventore voluptas eum aliquid placeat quis. Nobis odit quae molestiae totam iusto ut quaerat, dolores ad ipsum nostrum molestias qui. Sed blanditiis, eum temporibus eius aspernatur rem! Itaque facere quisquam aspernatur! Non quibusdam odit ab dolores architecto soluta! Voluptates tempora iste aperiam quidem sunt ratione pariatur vero commodi molestias excepturi officiis, eum maiores soluta suscipit nisi aliquam harum unde accusantium. Libero excepturi expedita error corporis voluptatem veritatis ducimus laboriosam obcaecati? Recusandae nesciunt, consectetur rerum sit architecto laborum iste odio amet?</p> '
]) --}}

