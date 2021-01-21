<div class=container id="app">
    <div>
        <form-wizard @on-complete="onComplete" title="" subtitle="" color="grey">

            <tab-content title="" :before-change="validateQ1">
                <div class="question-section">
                    <?php include('sections/question1.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육" :before-change="validateQ2">
                <div class="question-section" >
                   <?php include('sections/question2.php'); ?>
                </div>
            </tab-content>

            <tab-content title="대학구성원" :before-change="validateQ3">
                <div class="question-section">
                    <?php include('sections/question3.php'); ?>
                </div>
            </tab-content>

            <tab-content title="교육시설"  :before-change="validateQ4" >
                <div class="question-section">
                    <?php include('sections/question4.php'); ?>
                </div>
            </tab-content>


            <tab-content title="사회봉사" :before-change="validateQ5" >
                <div class="question-section">
                    <?php include('sections/question5.php'); ?>
                </div>
            </tab-content>

            <!--<tab-content title="사회봉사" :before-change="validateQ6" >
                <div class="question-section">
                    <?php /*include('sections/question6.php'); */?>
                </div>
            </tab-content>-->

            <tab-content title="주관식 문항" :before-change="validateQ8" >
                <div class="question-section">
                    <?php include('sections/question8.php'); ?>
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