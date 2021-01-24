
<div class=container id="app">
    <div>
        <form-wizard @on-complete="onComplete" title="" subtitle="" color="grey">

            <tab-content title="대학의 사명과 발전계획" :before-change="validateQ1">
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header" >Ⅰ. LINC+사업 만족도</h4>
                    </div>
                    <?php include('sections/question1.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ2">
                <div class="question-section" >
                    <!-- Question 2.1 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅱ. LINC+사업 밀착도</h4>
                    </div>
                    <?php include('sections/question2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ3">
                <div class="question-section" >
                    <!-- Question 2.2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅲ. LINC+사업 협력도</h4>
                    </div>
                    <?php include('sections/question3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ4">
                <div class="question-section" >
                    <!-- Question 2.2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅳ. LINC+사업 프로그램 전·후 만족도</h4>
                    </div>
                    <?php include('sections/question4.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ5">
                <div class="question-section" >
                    <!-- Question 2.2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">< 응답자 특성 문항 ></h4>
                    </div>
                    <?php include('sections/question5.php'); ?>
                </div>
            </tab-content>

            <tab-content>
                <div class="question-section">
                    <?php include('sections/finish.php'); ?>
                </div>
            </tab-content>
        </form-wizard>
    </div>
    <script>
        window.addEventListener("beforeunload", function (e) {
            var confirmationMessage = "이 페이지를 떠나면 정보가 저장되지 않습니다.";
            if(!isCompletedSurvey){
                (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                return confirmationMessage;                            //Webkit, Safari, Chrome
            }
        });
    </script>
<?php
if (isset($this->js))
{
    foreach ($this->js as $js)
    {
        echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
    }
}
?>