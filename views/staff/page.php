<div class=container id="app">
    <div>
        <form-wizard @on-complete="onComplete" title="" subtitle="" color="grey">

            <tab-content title="대학발전계획" :before-change="validateQ1">
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header" >Ⅰ. 대학발전계획</h4>
                    </div>
                    <?php include('sections/question1.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ2">
                <div class="question-section" >
                    <!-- Question 2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅱ. 교육</h4>
                    </div>
                    <?php include('sections/question2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ2_2">
                <div class="question-section" >
                    <!-- Question 2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅱ. 교육</h4>
                    </div>
                    <?php include('sections/question2_2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ2_3">
                <div class="question-section" >
                    <!-- Question 2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅱ. 교육</h4>
                    </div>
                    <?php include('sections/question2_3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ2_4">
                <div class="question-section" >
                    <!-- Question 2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅱ. 교육</h4>
                    </div>
                    <?php include('sections/question2_4.php'); ?>
                </div>
            </tab-content>

            <tab-content title="직원평가 및 지원" :before-change="validateQ3">
                <div class="question-section">
                    <!-- Question 3 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅲ. 직원평가 및 지원</h4>
                    </div>
                    <?php include('sections/question3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="직원평가 및 지원" :before-change="validateQ3_2">
                <div class="question-section">
                    <!-- Question 3 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅲ. 직원평가 및 지원</h4>
                    </div>
                    <?php include('sections/question3_2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="직원평가 및 지원" :before-change="validateQ3_3">
                <div class="question-section">
                    <!-- Question 3 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅲ. 직원평가 및 지원</h4>
                    </div>
                    <?php include('sections/question3_3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="직원평가 및 지원" :before-change="validateQ3_4">
                <div class="question-section">
                    <!-- Question 3 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅲ. 직원평가 및 지원</h4>
                    </div>
                    <?php include('sections/question3_4.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육시설" :before-change="validateQ4" >
                <div class="question-section">
                    <!-- Question 4 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅳ. 교육시설</h4>
                    </div>
                    <?php include('sections/question4.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육시설" :before-change="validateQ4_2" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅳ. 교육시설</h4>
                    </div>
                    <?php include('sections/question4_2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육시설" :before-change="validateQ4_3" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅳ. 교육시설</h4>
                    </div>
                    <?php include('sections/question4_3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="정보자원" :before-change="validateQ5" >
                <div class="question-section">
                    <!-- Question 5 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">V. 정보자원</h4>
                    </div>
                    <?php include('sections/question5.php'); ?>
                </div>
            </tab-content>

            <tab-content title="학생지원" :before-change="validateQ6" >
                <div class="question-section">
                    <!-- Question 6 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅵ. 학생지원</h4>
                    </div>
                    <?php include('sections/question6.php'); ?>
                </div>
            </tab-content>

            <tab-content title="학생지원" :before-change="validateQ6_2" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅵ. 학생지원</h4>
                    </div>
                    <?php include('sections/question6_2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="학생지원" :before-change="validateQ6_5" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅵ. 학생지원</h4>
                    </div>
                    <?php include('sections/question6_5.php'); ?>
                </div>
            </tab-content>

            <tab-content title="학생지원" :before-change="validateQ6_6" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅵ. 학생지원</h4>
                    </div>
                    <?php include('sections/question6_6.php'); ?>
                </div>
            </tab-content>

            <tab-content title="대학이미지" :before-change="validateQ7" >
                <div class="question-section">
                    <!-- Question 7 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅶ. 대학이미지</h4>
                    </div>
                    <?php include('sections/question7.php'); ?>
                </div>
            </tab-content>

            <tab-content title="대학의 전반적 만족도" :before-change="validateQ8" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅷ. 대학의 전반적 만족도</h4>
                    </div>
                    <?php include('sections/question8.php'); ?>
                </div>
            </tab-content>

            <tab-content title="코로나 19로 인한 비대면 원격 수업 및 교육환경 만족도" :before-change="validateQ9" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅸ. 코로나 19로 인한 비대면 원격 수업 및 교육환경 만족도</h4>
                    </div>
                    <?php include('sections/question9.php'); ?>
                </div>
            </tab-content>

            <tab-content title="코로나 19로 인한 비대면 원격 수업 및 교육환경 만족도" :before-change="validateQ9_2" >
                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅸ. 코로나 19로 인한 비대면 원격 수업 및 교육환경 만족도</h4>
                    </div>
                    <?php include('sections/question9_2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="대학의 전반적 만족도" :before-change="validateQ10" >
                <div class="question-section">
                    <?php include('sections/question10.php'); ?>
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