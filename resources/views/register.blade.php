@extends('template.master')

@section('main')
<!-- ======= Hero Slider Section ======= -->
<section>
    <div class="container">

        <div class="section-title" style="text-align: center">
        <h2 style="font-size: 30px">REGISTRATE PARA VER LAS TRANSMISIONES EN VIVO</h2>
        <p style="font-size: 25px">Podras realizar comprar.</p>
        </div>
        <form name="form_search" id="form-search" action="{{ route('register.store') }}" method="post" class="form-search was-validated" data-aos="fade-up" data-aos-delay="200">
            @csrf
            <div class="row">     
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12 div-img" >
                            <img src="template/img/register/register.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>  
            
                <div class="col-lg-6 mt-4 mt-lg-0">            
                    <div class="row">                        
                        <div class="col-md-6 form-group">
                            <span ><b>Ci</b></span>
                            <input type="text" name="ci" autocomplete="off" class="form-control" id="ci" placeholder="Cedula de identidad.." value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <span ><b>Fecha Nacimiento</b></span>
                            <input type="date" class="form-control" name="responsible" id="responsible" placeholder="Ingrese su apellido paterno.." value="{{ old('responsible') }}" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">                        
                        <div class="col-md-6 form-group">
                            <span ><b>Nombre</b></span>
                            <input type="text" name="name" autocomplete="off" class="form-control" id="nombre" placeholder="Ingrese su nombre.." value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <span ><b>Apellido Paterno</b></span>
                            <input type="text" class="form-control" autocomplete="off" name="responsible" id="responsible" placeholder="Ingrese su apellido paterno.." value="{{ old('responsible') }}" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <span ><b>Apellido Materno</b></span>
                            <input type="text" class="form-control" name="responsible" autocomplete="off" id="responsible" placeholder="Ingrese su apellido materno.." value="{{ old('responsible') }}" required>
                        </div>
                        <div class="col-md-6 form-group">                        
                            <span ><b>Teléfono</b></span>
                            <input type="text" name="phone1" class="form-control" autocomplete="off" placeholder="7896555" onkeypress='return validaNumericos(event)' value="{{ old('phone1') }}" required>
                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <textarea class="form-control" name="address" id="address" rows="3" placeholder="Dirección" required>{{ old('address') }}</textarea>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <span ><b>Email</b></span>
                            <input type="email" name="email" class="form-control" id="email" placeholder="ejemplo@gmail.com"  value="{{ old('email') }}"required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <span ><b>Contraseña</b></span>
                            <div class="form-group">
                                <div class="input-group">                                  
                                <input type="password" class="form-control" name="password" id="password" id="email" placeholder="*********" required>                                 
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button" onclick="mostrarContrasena()" id="boton"><span class="fa fa-eye"></span></button>                                   
                                </div>
                                </div>
                            </div>    
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                    
                        </div>
                    </div>
                    <br>
                
                    <div id="g-recaptcha"></div>
                    <button type="submit" class="btn" id="btn-sumit" style="background-color: #056318; width:100%; color:#ffffff; font-size: 20px">Registrarse</button>
                    <br>
                    <br>
                    <div style="text-align: center" >
                        <button type="submit" class="btn" id="btn-sumit" style="width:45%; background-color: #f73929; color:#ffffff; font-size: 20px">Iniciar sesión con <i class="fa-brands fa-google"></i></button>
                        <button type="submit" class="btn" id="btn-sumit" style="width:45%; background-color: #3b5998; color:#ffffff; font-size: 20px">Iniciar sesión con <i class="fa-brands fa-facebook"></i></button>
                        {{-- <a type="button" href="{{url('/')}}" class="btn" style="background-color: #526069; color:#ffffff;">Inicio</a> --}}
                    </div>                
                </div>        

            </div>
        </form>
    </div>
</section><!-- End Contact Section -->


@endsection