@extends('archivoBaseUser.baseUser')

@section('title', 'Checklist-User')

@section('content')
<link rel="stylesheet" href=" {{ asset('css/user/checklisUser.css')}}">

<div class="content">
    <div class="content-semana">
        <h3>{{ ucfirst($actividad->nombreActividad) }}</h3>
        <p>{{ Str::ucfirst($actividad->resumen) }}</p>
    </div>
    <div class="content-ckeck">
        <div class="actividades">
            <div class="semana">
                <p>Checklist semana 3</p>
            </div>
            <div class="dias">
                <ul>
                    <li>
                        <label for="Domingo">Domingo</label>
                        <input type="checkbox" id="domingo">
                        <input type="text" id="tarea_domingo" placeholder=" | Observaciones">
                    </li>
                    <li>
                        <label for="lunes">Lunes</label>
                        <input type="checkbox" id="lunes">
                        <input type="text" id="tarea_lunes" placeholder=" | Observaciones">
                    </li>
                    <li>
                        <label for="martes">Martes</label>
                        <input type="checkbox" id="martes">
                        <input type="text" id="tarea_martes" placeholder=" | Observaciones">
                    </li>
                    <li>
                        <label for="miercoles">Miércoles</label>
                        <input type="checkbox" id="miercoles">
                        <input type="text" id="tarea_miercoles" placeholder=" | Observaciones">
                    </li>
                    <li>
                        <label for="jueves">Jueves</label>
                        <input type="checkbox" id="jueves">
                        <input type="text" id="tarea_jueves" placeholder=" | Observaciones">
                    </li>
                    <li>
                        <label for="viernes">Viernes</label>
                        <input type="checkbox" id="viernes">
                        <input type="text" id="tarea_viernes" placeholder=" | Observaciones">
                    </li>
                    <li>
                        <label for="Sabado">Sábado</label>
                        <input type="checkbox" id="sabado">
                        <input type="text" id="tarea_sabado" placeholder=" | Observaciones">
                    </li>
                </ul>
            </div>
        </div>
        <div class="calendario">
            <table>
                <thead>
                    <tr>
                    <th colspan="7">Mayo</th>
                    </tr>
                    <tr>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mié</th>
                    <th>Jue</th>
                    <th>Vie</th>
                    <th>Sáb</th>
                    <th>Dom</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="semana-1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    </tr>
                    <tr class="semana-2">
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    </tr>
                    <tr class="semana-3">
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    </tr>
                    <tr class="semana-4">
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    </tr>
                    <tr class="semana-5">
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    </tr>
                    <tr class="semana-6">
                    <td>31</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="botones-container">
        <button id="boton-cancelar">Cancelar</button>
        <button id="boton-guardar">Guardar</button>
    </div>
</div>
@endsection
