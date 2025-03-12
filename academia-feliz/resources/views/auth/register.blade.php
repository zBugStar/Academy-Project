<!doctype html>
<html lang="es">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="{{asset("assets/estilos.css")}}" rel="stylesheet"/> 
    </head>

    <body>
        <section class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color:rgb(224, 29, 87);">
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card rounded-3 text-black shadow-lg">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                        style="width: 185px;" alt="logo">
                                    <h3 class="mt-1 mb-5 pb-1">Registrarse</h3>
                                </div>

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <p class="text-center">Ingresa la información pertinente</p>

                                    <div class="mb-4">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Primer apellido</label>
                                        <input type="text" class="form-control" placeholder="Primer apellido" name="primer-apellido" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Segundo apellido</label>
                                        <input type="text" class="form-control" placeholder="Segundo apellido" name="segundo-apellido"/>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="fecha-nacimiento" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Género</label>
                                        <select id="gender" name="gender" class="form-select" required>
                                            <option value="">Selecciona tu género</option>
                                            <option value="male">Masculino</option>
                                            <option value="female">Femenino</option>
                                            <option value="non-binary">No binario</option>
                                            <option value="other">Otro</option>
                                            <option value="prefer-not-to-say">Prefiero no decirlo</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Correo</label>
                                        <input type="email" class="form-control" placeholder="Correo" name="correo" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Confirmar contraseña</label>
                                        <input type="password" class="form-control" placeholder="Confirmar contraseña" name="confirmar-contrasena" required/>
                                    </div>

                                    <div class="text-center mb-5">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pt-4">
                                        <p class="mb-0 me-2">¿Ya tienes cuenta?</p>
                                        <button type="button" class="btn btn-outline-danger">Iniciar sesión</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
