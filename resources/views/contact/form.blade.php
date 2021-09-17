<x-app-layout> 
<!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Contáctenos</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="/">Inicio<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a {{route('contact')}}>Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->
    
    <!-- Contact Us -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="section-title bg">
                        <h2>Ponte en <span>contácto</span></h2>
                        <p>Complete el formulario y nos pondremos en contácto lo más pronto posible</p>
                        <div class="icon"><i class="fa fa-paper-plane"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="form-head">
                        <!-- Contact Form -->
                        <form class="form" action="mail/mail.php">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <i class="fa fa-user"></i>
                                        <input name="first-name" type="text" placeholder="Nombre">
                                    </div>
                                </div>                                
                                <div class="col-6">
                                    <div class="form-group">
                                        <i class="fa fa-envelope"></i>
                                        <input name="email" type="email" placeholder="Correo electronico">
                                    </div>
                                </div>                                
                                <div class="col-12">
                                    <div class="form-group message">
                                        <i class="fa fa-pencil"></i>
                                        <textarea name="message" placeholder="Escribe tu mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn primary">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Contact Form -->
                    </div>
                </div>                
            </div>
        </div>	
    </div>	
</x-app-layout>
