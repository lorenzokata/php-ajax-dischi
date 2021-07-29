
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Ajax Dischi</title>
</head>
<body class="vh-100 bg-dark overflow-auto">

    <div id="app">

        <div class="container">
            <div class="row row-cols-4 g-4">
                <div class="col" v-for="disco in dischi">
                    <div class="card h-100">
                        <img :src="disco.poster" class="card-img-top" :alt="disco.title">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title text-white">{{disco.title}}</h5>
                            <p class="card-text text-white">{{disco.author}}</p>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        
    </div>




    <script src="js/script.js"></script>
</body>
</html>