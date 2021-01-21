<div class=container id="app">
    <div>
        <form-wizard @on-complete="onComplete" title="" subtitle="" color="grey">

            <tab-content :before-change="validateQ1">
                <div class="question-section">
                    <?php include('sections/question1.php'); ?>
                </div>
            </tab-content>

            <tab-content :before-change="validateQ2">
                <div class="question-section">
                    <?php include('sections/question2.php'); ?>
                </div>
            </tab-content>

            <tab-content :before-change="validateQ3">
                <div class="question-section">
                    <?php include('sections/question3.php'); ?>
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