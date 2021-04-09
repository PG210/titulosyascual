@extends ('informacion.instancias')
@section('content')
<br>
<div class="card bg-dark text-white">
  <img src="{{url('img/pueblo.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay">
    <!--acordion-->
        <div class="accordion accordion-flush " id="accordionFlushExample">
        <div class="accordion-item color">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            HISTORIA DE YASCUAL
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <p>
            Yascual, es uno de los pueblos más antiguos perteneciente al
            pueblo de los Pastos. Los primeros habitantes que se asentaron
            en este territorio fue en el sitio llamado Cuasamira, 
            porque ahí había agua, lugar para los ritos, y 
            además es una huecada que los protegía del frío.
          </p>
           <p>
                las primeras familias que poblaron este lugar fueron: Mayag, 
                Chalacán, Getial, Ipujan, Maingual, Mengual, Chi-miranos (Altamiranos),
                Cuaichar. Esta comunidad estaba al mando del cacique Ascual.
                Yascual antes de la llegada de los españoles era uno de los pueblos 
                más importantes del pueblo de los Pastos, su fundación data en 1536, 
                3 años antes de la fundación de San Juan de Pasto, quedando desde entonces 
                como parte integral de la tenencia de Pasto. Con la llegada de los españoles, 
                escogieron a Yascual como un lugar estratégico por ser un punto central para 
                la explotación de las minas de oro, convirtiéndolo en un centro religioso, económico 
                y político. Yascual, fue un territorio de gran importancia y prosperidad por poseer 
                sus tres minas de oro, entre ellas: el Infiernillo, La Yascualita y Santa Isabel.
          </p>
          <img src="{{url('img/papa.jpg')}}" class="card-img im"  alt="...">
         </div>
        </div>
        </div>
    <!--end acordion-->
  </div>
</div>
<br>
<style>
    .color{
    background-color:#CF3196;
    }
    img.im{
     width:1000px;
     height:250px;

    }
</style>
@stop