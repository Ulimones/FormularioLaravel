<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>




  <title>Document</title>
</head>

<body>
  <div class=row>
    <br><br><br>
    <div class="col-md-5">
      <img src="form.jpg" style="max-width:100%;">
    </div>
    <div class="col-md-6">
      <br><br><br>
      
	@if(session('status')) 
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif 

    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

      <form class="form-horizontal" method="POST" action="/formulario" enctype="multipart/form-data">
                        {{ csrf_field() }}
        <h3>SECCIÓN I. DATOS DE IDENTIFICACIÓN</h3>
        <div class="form-row">

          <div class="form-group col-md-4">
            <label><b>Nombre</b></label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group col-md-4">
            <label><b>Apellido paterno</b></label>
            <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Apellido paterno">
          </div>
          <div class="form-group col-md-4">
            <label><b>Apellido materno</b></label>
            <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="Apellido materno">
          </div>
        </div>
        <div class="form-group">
          <label><b>Ficha de depósito</b></label>
          <input type="text" class="form-control" name="fichadeposito" id="fichadeposito" placeholder="Ficha de depósito">
        </div>

        <div class="row">
          <div class="form-group col-md-7">
            <label><b>Correo</b></label>
            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
          </div>
          <div class="form-group col-md-5">
            <label for="inputState"><b>Municipio </b></label>
            <select name="municipio" id="municipio" class="form-control">
              <option selected="true" disabled="disabled">Ejile una opción</option>
              <option>Pública</option>
              <option>Privada</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-7">
            <label><b>Escuela de procedencia</b></label>
            <input type="text" class="form-control" name="escuela" id="escuela" placeholder="Escuela de procedencia">
          </div>
          <div class="form-group col-md-5">
            <label for="inputState"><b>Tipo de escuela de procedencia </b></label>
            <select name="tipoescuela" id="tipoescuela" class="form-control">
              <option selected="true" disabled="disabled">Ejile una opción</option>
              <option>Pública</option>
              <option>Privada</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-2">
            <label><b>Edad</b></label>
            <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState"><b>Sexo </b></label>
            <select name="sexo" id="sexo" class="form-control">
              <option selected="true" disabled="disabled">Ejile un sexo</option>
              <option>Hombre</option>
              <option>Mujer</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState"><b>Curso al que te inscribes </b></label>
            <select name="curso" id="curso" class="form-control">
              <option selected="true" disabled="disabled">Ejile un curso</option>
              <option>Ingreso a Educación Media Superior (CBTIS 166)</option>
              <option>Ingreso a Educación Superior </option>
              <option>Inglés</option>
              <option>Regularización matemáticas</option>
              <option>Regularización Lectura y Redacción </option>
              <option>Regularización ciencias </option>
              <option>Emprendedurismo </option>
              <option>Liderazgo</option>
              <option>Deportes</option>
              <option>Artes</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label><b>¿Qué nivel de inglés te interesa practicar?</b></label>
            <select name="nivelingles" id="nivelingles" class="form-control">
              <option selected="true" disabled="disabled">Ejile un nivel</option>
              <option>Básico 1</option>
              <option>Básico 2</option>
              <option>Intermedio</option>
              <option>Avanzado</option>

            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState"><b>Vocación que prefieres</b></label>
            <select name="vocacion" id="vocacion" class="form-control">
              <option selected="true" disabled="disabled">Ejile una vocación</option>
              <option>Deportiva</option>
              <option>Artítisca</option>
              <option>Científica</option>
              <option>Política</option>
              <option>Empresarial</option>
            </select>
          </div>
          <div class="form-group col-md-7">
            <label for="inputState"><b> ¿Has ganado algún premio o reconocimiento local, estatal, nacional o
                internacional? </b></label>
            <select name="premio" id="premio" class="form-control">
              <option selected="true" disabled="disabled">Ejile una respuesta</option>
              <option>Sí</option>
              <option>No </option>
            </select>
          </div>
          <div class="form-group col-md-5">
            <br>
            <label for="inputState"><b>¿Qué tipo de premio?</b></label>
            <input type="text" class="form-control" name="tipopremio" id="tipopremio" placeholder="Describe premio">
          </div>
        </div>

        <br><br>
        <h3>SECCIÓN II. PROYECTO DE VIDA</h3>

        <div class="form-row">

          <div class="form-group col-md-5">
            <label for="inputState"><b>¿Qué persigues al seguir una vocación?</b></label>
            <select name="seguirvocacion" id="seguirvocacion"  class="form-control">
              <option selected="true" disabled="disabled">Ejile una opción</option>
              <option>reconocimiento</option>
              <option>Dinero</option>
              <option>Envidia</option>
              <option>Plenitud</option>
            </select>
          </div>
          <div class="form-group col-md-7">
            <label> <b>¿Qué profesión te gustaría estudiar a nivel licenciatura?</b></label>
            <input type="text" class="form-control" name="profesion" id="profesion"  placeholder="Escribe profesión">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>¿Quién soy? (Sí, se refiere a ti. A quien está leyendo el cuestionario. Por favor, realiza una breve
              descripción)</label>
          </div>
          <div class="form-group col-md-8">
            <textarea name="quiensoy" id="quiensoy"  rows="4" cols="60"></textarea>
            <div>


            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>¿Cuáles son mis principales deseos o necesidades?</label>
          </div>
          <div class="form-group col-md-8">
            <textarea name="deseosnecesidades" id="deseosnecesidades"  rows="2" cols="60"></textarea>
            <div>
            </div>
          </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
              <label>¿Cuáles son mis principales intereses?</label>
            </div>
            <div class="form-group col-md-8">
              <textarea name="intereses" id="intereses"  rows="2" cols="60"></textarea>
              <div>
              </div>
            </div>
          </div>

          <div class="form-row">
              <div class="form-group col-md-4">
                <label>¿Cuáles son mis principales fortalezas para lograr lo anterior y contribuir al desarrollo social y ambiental?</label>
              </div>
              <div class="form-group col-md-8">
                <textarea name="fortalezas" id="fortalezas"  rows="4" cols="60"></textarea>
                <div>
                </div>
              </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                  <label>¿Cuáles son mis áreas de talento desarrolladas o por desarrollar?</label>
                </div>
                <div class="form-group col-md-8">
                  <textarea name="areastalento" id="areastalento"  rows="2" cols="60"></textarea>
                  <div>
                  </div>
                </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>¿Cuáles son los principales valores que poseo?</label>
                  </div>
                  <div class="form-group col-md-8">
                    <textarea name="valores" id="valores"  rows="2" cols="60"></textarea>
                    <div>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>Mis metas a corto plazo son (en los próximos seis meses):</label>
                    </div>
                    <div class="form-group col-md-8">
                      <textarea name="metascp" id="metascp"  rows="2" cols="60"></textarea>
                      <div>
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label>Mis metas a mediano plazo son (en los próximos dos años): </label>
                      </div>
                      <div class="form-group col-md-8">
                        <textarea name="metasmp" id="metasmp"  rows="2" cols="60"></textarea>
                        <div>
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Metas a largo plazo (en los próximos 10 años):	</label>
                        </div>
                        <div class="form-group col-md-8">
                          <textarea name="metaslp" id="metaslp"  rows="2" cols="60"></textarea>
                          <div>
                          </div>
                        </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-4">
                            <label>Lo que tengo pendiente por hacer (Se refiere a la laboriosidad, terminación de actividades iniciadas y logro de metas)	</label>
                          </div>
                          <div class="form-group col-md-8">
                            <textarea name="pendiente" id="pendiente"  rows="2" cols="60"></textarea>
                            <div>
                            </div>
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label>Aspectos por mejorar en mi persona:	</label>
                            </div>
                            <div class="form-group col-md-8">
                              <textarea name="aspectosmejorar" id="aspectosmejorar"  rows="2" cols="60"></textarea>
                              <div>
                              </div>
                            </div>
                          </div>


                          <div class="form-row">
                              <div class="form-group col-md-4">
                                <label>Acciones para mejorar:		</label>
                              </div>
                              <div class="form-group col-md-8">
                                <textarea name="accionesmejorar" id="accionesmejorar"  rows="2" cols="60"></textarea>
                                <div>
                                </div>
                              </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label>Valores por consolidar:</label>
                                </div>
                                <div class="form-group col-md-8">
                                  <textarea name="valoresconsolidar" id="valoresconsolidar"  rows="2" cols="60"></textarea>
                                  <div>
                                  </div>
                                </div>
                              </div>


                


        <button type="submit" class="btn btn-primary btn-md btn-block">Registrar</button>
      </form>
      <div class="col-md-2">

      </div>
    </div>


  </div>





</body>

</html>