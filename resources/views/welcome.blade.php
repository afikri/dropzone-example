<!DOCTYPE html>
<html>
    <head>
        <title>Laravel with DropzoneJS</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css" integrity="sha256-e47xOkXs1JXFbjjpoRr1/LhVcqSzRmGmPqsrUQeVs+g=" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js" integrity="sha256-p2l8VeL3iL1J0NxcXbEVtoyYSC+VbEbre5KHbzq1fq8=" crossorigin="anonymous"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <form
                  action="{{url('upload')}}"
                  method="POST"
                  class="dropzone"
                  id="my-awesome-dropzone">

                  {{csrf_field()}}
                </form>
            </div>


        </div>
    </body>
</html>
