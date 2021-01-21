<div class=container id="app">
    <div>
        <form-wizard @on-complete="onComplete" title="" subtitle="" color="grey">

            <tab-content title="대학의 사명과 발전계획" :before-change="validateQ1_1">

                <div class="question-section">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header" >Ⅰ. 대학교육의 활용성</h4>
                    </div>
                    <?php include('sections/question1_1.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ1_2">
                <div class="question-section" >
                    <!-- Question 1.2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header" >Ⅰ. 대학교육의 활용성</h4>
                    </div>
                    <?php include('sections/question1_2.php'); ?>
                </div>
            </tab-content>


            <tab-content title="대학구성원" :before-change="validateQ1_3">
                <div class="question-section">
                    <!-- Question 1.3 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header" >Ⅰ. 대학교육의 활용성</h4>
                    </div>
                    <?php include('sections/question1_3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="대학의 명성 및 이미지" :before-change="validateQ2" >
                <div class="question-section">
                    <!-- Question 2 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header" >Ⅱ. 대학의 명성 및 이미지</h4>
                    </div>
                    <?php include('sections/question2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육시설" :before-change="validateQ3" >
                <div class="question-section">
                    <!-- Question 3 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header" >Ⅲ. 대학의 전반적 만족도</h4>
                    </div>
                    <?php include('sections/question3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="사회봉사" :before-change="validateQ4" >
                <div class="question-section">
                    <!-- Question 4 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">Ⅳ. 학생역량강화</h4>
                    </div>
                    <?php include('sections/question4.php'); ?>
                </div>
            </tab-content>

            <tab-content title="사회봉사" :before-change="validateQ5" >
                <div class="question-section">
                    <!-- Question 5 -->
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="center header">V. 주관식 문항</h4>
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