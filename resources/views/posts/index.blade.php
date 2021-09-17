<x-app-layout>
    {{-- <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
          <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>           
            <main class="">
                <div class="sm:text-center lg:text-left py-32">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Encuentra </span>
                    <span class="block text-green-600 xl:inline">Eventos Académicos</span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    En Eduland encontrarás la oferta de cursos de pregrado y postagrado que te ayudarán a complementar tu formación académica.
                </p>               
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="images/learn.jpg" alt="">
      </div>
</div> --}}

    <!-- Slider Area -->
    <section class="home-slider">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider overlay">
                <div class="slider-image" style="background-image:url('images/slider/slider-bg1.jpg')"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-10 col-12">
                            <!-- Slider Content -->
                            <div class="slider-content">
                                <h1 class="slider-title rounded"><b>Busca </b> eventos académicos</h1>
                                <p class="slider-text rounded">En <b style="color: #05C46B">Eduland</b> encontrarás la oferta de cursos de pregrado y postagrado que te ayudarán a complementar tu formacion académica.</p>
                                {{-- <input class="w-full h-16 px-3 rounded mb-8 focus:outline-none focus:shadow-outline text-xl px-8 shadow-lg" type="search" placeholder="Buscar...">                                      --}}
                                
                               
                            
                            </div>
                            <!--/ End Slider Content -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->
    
    <!-- Courses -->
    <section class="courses section">
        <div class="container">            
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="section-title bg">
                        <h2>Eventos <span>Publicados</span></h2>							
                        <div class="icon"><i class="fa fa-clone"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-12">
                    
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2018/05/19/00/53/online-3412473_960_720.jpg @endif)">
                            <a href="{{route('posts.show', $post)}}" class="btn white primary">Más Información</a>
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">									
                                <span class="price">{{$post->price}} Bs.</span>
                            </div>
                            <h4 class="c-title"><a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a></h4>
                            <p>{!!$post->extract!!}</p>
                        </div>
                        <!-- Course Meta -->
                        <div class="course-meta">							
                            <!-- Course Info -->								
                            <div class="course-info">																		
                                <span><i class="fa fa-calendar-o"></i>{{ \Carbon\Carbon::parse($post->date)->format('d/m/Y')}}</span>
                                <span class="float-right"><i class="fa fa-clock-o"></i>{{$post->time}}</span>
                            </div>    
                        </div>
                        <div class="course-meta">                        
                            <div class="course-info" >
                                @foreach ($post->tags as $tag)
                                    <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                                @endforeach
                            </div>                        
                        </div>
                        <!--/ End Course Meta -->
                    </div>
                    <!--/ End Single Course -->
                    
                </div>
                @endforeach
            </div>
            <div class="=mt-4 pt-4">
                {{$posts->links()}}
            </div>
        </div>
    </section>
    <!--/ End Courses -->	   

</x-app-layout>