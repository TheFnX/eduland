<x-app-layout>
    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
        <div class="container"> 
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Eventos</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="">Inicio<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="{{route('event')}}">Eventos</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <!--/ End Breadcrumb -->
    <!-- Events -->
    <section class="events section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="section-title bg">
                        <h2>Proximos <span>Eventos</span></h2>
                        <p>Aqui conoceras diferentes eventos academicos que se aproximan</p>
                        <div class="icon"><i class="fa fa-calendar-check-o"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="event-img">
                        <img src="images/event-left.png" alt="#">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    @foreach ($posts as $post)
                        <div class="coming-event">
                            <!-- Single Event -->
                            <div class="single-event">
                                <div class="event-date">   
                                    <p>{{ \Carbon\Carbon::parse($post->date)->format('d')}}<span>{{ \Carbon\Carbon::parse($post->date)->format('M')}}</span></p>           
                                 </div>
                                <div class="event-content">
                                    <h3 class="event-title"><a href="event-single.html">{{$post->name}}</a></h3>
                                    <p>{!!$post->extract!!}</p>   
                                                                    
                                </div>
                                <div class="course-meta">							
                                    <!-- Course Info -->								
                                    <div class="course-info entry-date-time">																		
                                        <span><i class="fa fa-calendar-o"></i> {{ \Carbon\Carbon::parse($post->date)->diffForHumans()}}</span>
                                        <span class="float-right"><i class="fa fa-clock-o"></i> {{$post->time}}</span>
                                    </div>    
                                </div>
                            </div>
                            <!-- End Single Event -->                            
                        </div>                    
                    @endforeach                    
                </div>
            </div>
        </div>
    </section>
    <!--/ End Events -->
</x-app-layout>