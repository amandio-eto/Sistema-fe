<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<title>Print </title>
  </head>
  <body id="body">
    <div class="row mb-4">
        <div class="container">
            <div class="col-md text-right" style="margin-top:50px;">

                <button type="button" onclick="printPage()" class="btn btn-success"><i class="bi bi-printer-fill" ></i> Print</button>

            </div>

        </div>

    </div>


    <div class="container" id="data" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;border:1px black solid;" >





        <div class="row" style="margin-top:100px;">
            <div class="col-md" style="margin-top:50px;">
               <h3>Fundu Esperanca Timor Oan</h3>
                <p style="font-style: italic;">"Ami Mak imi Esperanca "</p>
                <div class="col-md text-right">
                  <h4  style="text-transform: uppercase;weight:1000;">  Desposito Numerario <br>
                      Original Para O FE Timor</h4>

                </div>
                <div class="row">
                    <div class="col text-center">
                        <h5>{{ $data->credito->naran }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <ul style="list-style: none;">
                            Numero Client : <h4 style="weight:1000;">{{ $data->credito->clientid }}</h4>
                            <li>
                                Data : <p>{{ $data->created_at->format('d,m y') }}</p>
                            </li>

                         <li>Descritivo : Dep Num:888-130908</li>
                         <li >Valor a depositar : {{ $data->update_selu }} </li>
                         <li>Total Credito: {{ $data->credito->total_credito }}</li>
                        <li>Moeda : USD </li>
                         <li>Quantidade Deposito :</li>
                     </ul>
                     <hr>
                    <div class="row justify-content-center mb-2" style="margin-button:20px;">
                        <div class="col-md-4" style="border-button:1px solid black;">
                           <p>Assinatura Depositante </p> <br>
                           <span style="">{{ $data->credito->naran }}</span>

                          </div>
                        <div class="col-md-4">
                            <p>Assinatura do Caixa </p> <br>

                            ({{ Auth()->user()->name }})


                        </div>
                    </div>
                     <hr>
                     <p class="text-center"><small class="text-danger" style="font-style:italic">Documento Processado por Computador. Nao Necesita de carimbo.</small></p>

                    </div>

                </div>

            </div>

        </div>

       <hr>
       <div class="col text-center">

           <span style="border-buton:1px solid black;margin-top:60px;">-----------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
       </div>


       <div class="row" style="margin-top:100px;">
        <div class="col-md" style="margin-top:50px;">
           <h3>Fundu Esperanca Timor Oan</h3>
            <p style="font-style: italic;padding-left:30%;">"Ami Mak imi Esperanca "</p>
            <div class="col-md text-right">
              <h4  style="text-transform: uppercase;weight:1000;">  Desposito Numerario <br>
                  Original Para O FE Timor</h4>

            </div>
            <div class="row">
                <div class="col text-center">
                    <h5>{{ $data->credito->naran }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <ul style="list-style: none;">
                        Numero Client : <h4 style="weight:1000;">{{ $data->credito->clientid }}</h4>
                        <li>
                            Data : <p>{{ $data->created_at->format('D,F Y') }}</p>
                        </li>

                     <li>Descritivo : Dep Num:888-130908</li>
                     <li >Valor a depositar : </li>
                     <li>Total Credito: Dep Num:888-130908</li>
                    <li>Moeda : USD </li>
                     <li>Quantidade Deposito :</li>
                 </ul>
                 <hr>
                <div class="row justify-content-center mb-2" style="margin-button:20px;">
                    <div class="col-md-4" style="border-button:1px solid black;">
                       <p>Assinatura Depositante </p> <br>
                       <span style="">{{ $data->credito->naran }}</span>

                      </div>
                    <div class="col-md-4">
                        <p>Assinatura do Caixa </p> <br>

                        ({{ Auth()->user()->name }})


                    </div>
                </div>
                 <hr>
                 <p class="text-center"><small class="text-danger" style="font-style:italic">Documento Processado por Computador. Nao Necesita de carimbo.</small></p>

                </div>

            </div>

        </div>

    </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function printPage(){
            // var printdata = document.getElementById(myfrm);
            // newin = window.open("");
            // newwin.document.write(printdata.outerHTML);
            // newin.print();
            // newin.close();
            var body = document.getElementById('body').innerHTML;
            var data = document.getElementById('data').innerHTML;
            document.getElementById('body').innerHTML= data
            window.print();

        }
    </script>
  </body>
</html>
