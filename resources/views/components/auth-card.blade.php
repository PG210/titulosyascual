<div class="container">
  <div class="row">
    <div class="col align-self-start">
      
    </div>
    <div class="col align-self-center">
        <div class="card cuerpo" style="width: 30rem;">
            <div class="card-body">
            
                <div class="centrado">
                    <!--class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"-->
                     <div>
                      {{ $logo }}
                     </div>

                     <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                     {{ $slot }}
                    </div>
                </div>
            </div>
       </div>
    </div>
    <div class="col align-self-end">
      </div>
  </div>
</div>