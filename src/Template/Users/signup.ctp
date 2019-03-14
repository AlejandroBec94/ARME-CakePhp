<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Registrate</title>
    <?= $this->Html->meta('icon') ?>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <?= $this->Html->css('/template/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/template/assets/css/plugins.css') ?>
    <?= $this->Html->css('/template/assets/css/users/register-2.css') ?>

    <?= $this->Html->script('/template/assets/js/libs/jquery-3.1.1.min.js') ?>
    <?= $this->Html->script('/template/bootstrap/js/popper.min.js') ?>
    <?= $this->Html->script('/template/bootstrap/js/bootstrap.min.js') ?>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--VueJs-->
    <!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>-->
    <!--VueJs-->
    <!--Cookie JS-->
    <!--<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>-->
    <!--Cookie JS-->

</head>

<!--<h1></h1>-->
<body class="register">
<!--<?= $this->Form->create($user,['type'=>'post','class'=>'form-register']) ?>-->
<!--<div id="form-register">-->

    <div class="form-register" id="form-register">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <!--<img alt="logo" src="assets/img/logo-3.png" class="theme-logo">-->
                <?= $this->Html->image('/template/assets/img/ARME.png',['class'=>'theme-logo','alt'=>'logo','style'=>'width:130px;']) ?>

            </div>

            <div class="col-md-12">

                <label for="email" class="sr-only">Correo Electrónico</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-email-fill-2"></i> </span>
                    </div>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address"  autocomplete="off" aria-describedby="inputEmail" required >
                </div>

                <label for="username" class="sr-only">Usuario</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-username"><i class="flaticon-user-7"></i> </span>
                    </div>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-describedby="username" autocomplete="off" required >
                </div>

                <label for="password" class="sr-only">Password</label>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" aria-describedby="inputPassword" required >
                </div>

                <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" v-on:click="getResponse" >Register</button>

                <?php
                    $request = $this->Url->build(['controller' => 'Users', 'action' => 'signup']);
                ?>
                <div id="rute" rel="<?= $request ?>" style="display: none;"></div>

            </div>

        </div>
    </div>

<!--</div>-->
<!--<?= $this->Form->end() ?>-->

<script>
    var targeturl = $("#rute").attr('rel');
    // var urlUsers = 'https://jsonplaceholder.typicode.com/users';
    new Vue({
        el: '#form-register',

        data: {
            response: [],

            // Objeto con los datos
            userInfo: [
                username= 'Sherlock',
                password= 'kkpipip2',
                email= 'Moriarty'
            ]
        },
        methods: {
            getResponse: function() {
                console.log("Empieza");
                /*axios.post(targeturl).then(response => {
                    // this.response = response.data
                    console.log(response)
                }).catch(error => {
                    console.log(error)
                });*/
                /*axios({
                    method:'post',
                    url:targeturl,
                        data:{
                        username: 'Sherlock',
                        password: 'kkpipip2',
                        email: 'Moriarty'
                    },
                })*/
                $.ajax({
                    type:'POST',
                    url:targeturl,
                    data: {
                        username: 'Sherlock',
                        password: 'kkpipip2',
                        email: 'Moriarty'
                    },
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', <?= json_encode($this->request->getParam('_csrfToken')) ?>);
                    },
                    success:function(data) {

                            console.log(data)

                    },
                    error: function(xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
                console.log("Termina");
            }
        }
    });
</script>

</body>
</html>
