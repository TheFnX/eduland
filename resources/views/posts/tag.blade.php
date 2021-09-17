<x-app-layout>
    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg')">
        <div class="container"> 
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Etiqueta:  {{$tag->name}}</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="">Inicio<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="{{route('event')}}">Etiqueta</a></li>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
    <!--/ End Breadcrumb -->    
     <!-- Events -->
		<section class="events archive">
			<div class="container">				
				<div class="row">
                    @foreach ($posts as $post)
					    <x-card-post :post="$post"></x-card-post>
                    @endforeach 
				</div>
			</div>
		</section>        
        <div class="mt-4">
            {{$posts->links()}}
        </div>
		<!--/ End Events -->    
</x-app-layout>
