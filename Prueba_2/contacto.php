<div id="central-content">
<main id="formulario">
    <div class="container-fluid">
        <div class="row row-cols-2">
            <form id="form" action="" method="post" class="row g-4 needs-validation">
                <div class="form-group">
                    <legend>Formulario de contacto</legend>
                    <p class="note">Campos marcados con * son obligatorios</p>
                        <label for="1nomb" class="form-label">Nombres :*</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Juanita"
                            minlength="3" required>
                    </div>
                </div>
                <div class="form-group">
                        <label for="2apell" class="form-label">Apellidos :</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="ape" name="2apell" placeholder="González"
                            minlength="3">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="3telef" class="form-label">Teléfono de contacto :</label>
                        <input type="tel" class="form-control" id="tel" name="3telef" placeholder="(569) 87654321"
                            pattern="\([0-9]{3}\) [0-9]{8}">
                    </div>
                </div>
                <div class="form-group">
                    
                        <label for="4email" class="form-label">Ingresa tu correo :*</label>
                    <div class="col-md-4">
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="hola@correo.com"
                            pattern=".+@.+\.com|.+@.+\.cl" minlength="12" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="5region" class="form-label">Seleccciona Región</label>
                        <select class="form-control" name="5region" id="region">
                            <option selected disabled value="">seleccionar...</option>
                            <option value="1">Arica</option>
                            <option value="2">Iquique</option>
                            <option value="3">Antofagasta</option>
                            <option value="4">Coquimbo</option>
                            <option value="5">Valparaíso</option>
                            <option value="6">Metropolitana</option>
                            <option value="6">O'Higgins</option>
                            <option value="6">Maule</option>
                            <option value="6">Ñuble</option>
                            <option value="6">Concepción</option>
                            <option value="6">Araucanía</option>
                            <option value="6">Los Ríos</option>
                            <option value="6">Los Lagos</option>
                            <option value="6">Aysén</option>
                            <option value="6">Magallanes</option>
                        </select>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" id="enviar" value="Enviar">
                    <input type="reset" class="btn btn-primary" id="limpiar" value="Limpiar">
                </div>
                <div id="error" class="alert alert-danger" role="alert"></div>
                </div>
            </form>
        </div>
        <div class="row">
            <img src="https://arc-anglerfish-arc2-prod-infobae.s3.amazonaws.com/public/NVWQSYGX3RC7ZBEHLPLDVXA3PU.jpg"
                class="d-block w-100">
        </div>
        
    </div>
    </main>
<div>