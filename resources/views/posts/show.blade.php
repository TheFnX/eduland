<x-app-layout>    
  <!-- Breadcrumb -->
  <div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <h2>Detalles</h2>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <ul class="bread-list">
            <li><a href="{{route('posts.index', $post)}}">Inicio<i class="fa fa-angle-right"></i></a></li>
            {{-- <li><a href="{{route('posts.show', $post)}}">Curso<i class="fa fa-angle-right"></i></a></li> --}}
            <li class="active"><a href="{{route('posts.show', $post)}}">Curso</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--/ End Breadcrumb -->

  <!--================Course Details Area =================-->
  <section class="course_details_area p_120 mb-5 mt-5">
    <div class="container">
      <h1 class="text-4xl font-bold text-gray-600 mb-3">
        {{$post->name}}
      </h1>
      <div class="row course_details_inner">
        <div class="col-lg-8">
          <div class="lg:col-span-2">
            <figure>
                @if ($post->image)
                    <img class="w-full h-auto object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">                       
                @else
                    <img class="w-full h-auto object-cover object-center" src="https://cdn.pixabay.com/photo/2018/05/19/00/53/online-3412473_960_720.jpg" alt="">                        
                @endif
            </figure>                
          </div>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Información</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contenidos</a>
            </li>              
            <li class="nav-item">
              <a class="nav-link active" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Comentarios</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="objctive_text">
                <p>{!!$post->extract!!}</p>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="objctive_text">
                <p>{!!$post->body!!}</p>                  
              </div>
            </div>            
          </div>
        </div>
        <div class="col-lg-4">
          <div class="c_details_list">
            <ul class="list">
              <li><a href="#">Modalidad <span>{{$post->modality}}</span></a></li>
              <li><a href="#">Precio <span>{{$post->price}} Bs</span></a></li>
              <li><a href="#">Fecha <span>{{ \Carbon\Carbon::parse($post->date)->format('d/m/Y')}}</span></a></li>
              <li><a href="#">Hora <span>{{$post->time}}</span></a></li>                
            </ul>
            <a class="main_btn" href="#">Enroll the Course</a>
          </div>
          <h1 class="text-2xl font-bold text-gray-600 mb-4 mt-4">Más en {{$post->category->name}}</h1>
              <ul>
                  @foreach ($similares as $similar)
                      <li class="mb-4">
                          <a class="flex" href="{{route('posts.show', $similar)}}">
                              @if ($similar->image)
                                  <img class="h-20 w-30 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                              @else
                                  <img class="h-20 w-30 object-cover object-center" src="https://cdn.pixabay.com/photo/2018/05/19/00/53/online-3412473_960_720.jpg" alt="">
                              @endif
                              <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                          </a>
                      </li>
                      
                  @endforeach
              </ul>
        </div>
        
      </div>
    </div>
  </section>
  <!--================End Course Details Area =================-->
    
</x-app-layout>