@props(['post'])
<div class="col-lg-6 col-md-6 col-12">
    <!-- Single Event -->
    <div class="single-event">
        <div class="event-image">
            @if ($post->image)
                <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2018/05/19/00/53/online-3412473_960_720.jpg" alt="">
            @endif
            <div class="event-date">
                <p>{{ \Carbon\Carbon::parse($post->date)->format('d')}}<span>{{ \Carbon\Carbon::parse($post->date)->format('M')}}</span></p>           
            </div>
        </div>
        <div class="event-content">
            <h3 class="event-title"><a href="{{route('posts.show', $post)}}">{{$post->name}}</a></h3>
            <p>{!!$post->extract!!}</p>
            <span class="entry-date-time"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->time}}</span>
        </div>
        <div class="event-content">
            @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}" class="event-title inline_block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>                    
            @endforeach
        </div>                            
    </div>
    <!-- End Single Event -->
</div>