<?php session_start();?>
<style>
    #app {
        height: 100vh;
        width: 100vw;
        background-color: red;
        background: url("https://source.unsplash.com/category/nature/1920x1080") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .lead-form {
        background-color: rgba(255, 255, 255, 0.6);
        border-radius: 5px;
        margin-top: 200px;
        width: 600px;
        margin-left: 200px;
        padding-top: 20px;
    }

</style>

<body>
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="lead-form">
                    <div class="login center">

                        <h5>2019년 연암대학교 교육만족도(교원) 조사에 오신 것을 한영합니다.</h5><br>
                        <h5>연암대학교 교원이신지 학인을 위하여</h5>
                        <h5>본인의 <b><u>E-mail
                                    ID</u></b>를 입력해 주시기 바랍니다.</h5>
                        <form method="post" action="/login/typeLogin/branch">
                            <h5><input type="text" class="form-control" style="width: 300px; margin-left: 150px; height: 35px;" name="email">@koje.ac.kr.</h5>
                            <input type="submit" name="submit" value="로그인">
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
</body>


