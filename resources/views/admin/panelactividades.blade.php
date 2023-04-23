@extends('archivoBaseAdmin.baseAdmin')

@section('content')

    <link rel="stylesheet" href="{{ asset ('css/admin/panelActividades.css')}}">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>

    <!-- info de aula -->
    <div class="info-aula ">
        <div class= "name-aula">
            <p>Aula nueva</p>
        </div>
        <div class= "id-aula">
            <p>ID aula: 5548445</p>
        </div>
    </div>


    <div class="options-actvs">

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">

                <div class="contendbutton accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Agregar actividades
                            <i class="icon fa-solid fa-calendar-plus fa-xl" style="color: #000000;"></i>
                    </button>
                </div>


                <div id="flush-collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample">
                    <div class="listActivity accordion-body">
                        
                        <div class="activity">
                            <p class="nameActivity">Actividad 1</p> 
                            <button type="button" class="btnchek btn">
                                <i class="fa-regular fa-square-check fa-xl" style="color: #000000;"></i>
                            </button>

                            <button type="button" class="btnx btn">
                                <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                            </button>  
                        </div>
                        
                        <div class="activity">
                            <p class="nameActivity">Actividad 2</p> 
                            <button type="button" class="btnchek btn">
                                <i class="fa-regular fa-square-check fa-xl" style="color: #000000;"></i>
                            </button>

                            <button type="button" class="btnx btn">
                                <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                            </button>  
                        </div>
                        
                        <div class="activity">
                            <p class="nameActivity">Actividad 3</p> 
                            <button type="button" class="btnchek btn">
                                <i class="fa-regular fa-square-check fa-xl" style="color: #000000;"></i>
                            </button>

                            <button type="button" class="btnx btn">
                                <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                            </button>  
                        </div>

                        <!-- Button trigger modal -->
                        <div class="contendButton">
                            <button type="button" class="btnCrear btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Crear
                            </button>
                        </div>                      

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 TitleModal" id="staticBackdropLabel">Agregar actividad</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="conten-modal modal-body">

                                        <div class="card-instruc card">
                                            <h5 class="cardTitle card-header text-center">Instrucciones</h5>

                                            <div class="cardDesc card-body">
                                            <textarea class="inputInstr form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion de la actividad"></textarea>                                
                                            </div>
                                        </div>

                                        <div class="fecha">
                                            <h5>Establecer fecha de la semana</h5>
                                            <div class="date-if">
                                                <p class="nameDate">Fecha inicio</p> <input class="nameDate" type="date" name="" id="">
                                            </div>
                                            <div class="date-if">
                                                <p class="nameDate">Fecha Final</p> <input class="nameDate" type="date" name="" id="">
                                            </div>

                                            <div class="Para">
                                                <p class="ParaOption">Para:</p>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected class="ParaOption">Seleccionar para quienes</option>
                                                    <option value="1">Tod@s</option>
                                                    <option value="2">Estudiante 1</option>
                                                    <option value="3">Estudiante 2</option>
                                                </select>
                                            </div>
                                            

                                        </div>
                                    




                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Publicar</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    




                    </div>
                </div>
            </div>
        </div>










        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Revisar actividades
                            <i class="icon fa-solid fa-pen-to-square fa-xl" style="color: #000000;"></i>
                    </button>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the 
                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" 
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            solicitudes de acceso
                            <i class="icon fa-solid fa-user-plus fa-xl" style="color: #000000;"></i>
                    </button>
                </div>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the 
                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                    </div>
                </div>
            </div>
        </div>

    </div>



    


    

@endsection