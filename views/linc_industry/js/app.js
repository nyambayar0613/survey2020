var isCompletedSurvey = false;
var serialize = function(obj) {
    var str = [];
    for (var p in obj) {
        if (obj.hasOwnProperty(p)) {
            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
        }
    }
    return str.join("&");
};
Vue.use(VueFormWizard);
new Vue({
    el: '#app',

    data: {
        questions:{
            q1_1:0,
            q1_2:0,
            q1_3:0,
            q1_4:0,

            q2_1:0,
            q2_2:0,
            q2_3:0,
            q2_4:0,

            q3_1:0,
            q3_2:0,
            q3_3:0,
            q3_4:0,

            q4_1:0,
            q4_2:0,
            q4_3:"",
            q4_3_nemelt:"",
            q4_4:"",

            q5_1:"",
            q5_2:"",
            q5_3:"",
            q5_4:"",
            q5_5:"",
            q5_5_nemelt:"",
            q5_6:"",
            q5_7:"",


        },

    },
    methods: {

        validateQ1: function(){
            window.scrollTo(500, 0);

            if (this.questions.q1_1 == 0 ||
                this.questions.q1_2 == 0 ||
                this.questions.q1_3 == 0 ||
                this.questions.q1_4 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ2: function() {
            window.scrollTo(500, 0);
            if (this.questions.q2_1 === 0 ||
                this.questions.q2_2 === 0 ||
                this.questions.q2_3 === 0 ||
                this.questions.q2_4 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ3: function() {
            window.scrollTo(500, 0);
            if (this.questions.q3_1 == 0 ||
                this.questions.q3_2 == 0 ||
                this.questions.q3_3 == 0 ||
                this.questions.q3_4 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ4: function() {
            window.scrollTo(500, 0);
            if(this.questions.q4_3.length < 1 && this.questions.q4_3_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (this.questions.q4_1 == 0 ||
                this.questions.q4_2 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ5: function() {
            window.scrollTo(500, 0);
            if(this.questions.q5_5.length < 1 && this.questions.q5_5_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (this.questions.q5_1 == "" ||
                this.questions.q5_2 == "" ||
                this.questions.q5_4 == "" ||
                this.questions.q5_6 == "" ||
                this.questions.q5_7 == ""
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },


        onComplete: function(){
            axios({
                method : 'post',
                url    : '/linc_industries/save',
                data   : jQuery.param(
                    {
                        questions: this.questions
                    }
                ),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
            })
                .then(function (response) {
                    if(response.data.isSuccess === true){
                        isCompletedSurvey = true;
                        alert("설문에 응해 주셔서 감사합니다. 설문 작성이 완료 되었습니다.");
                        window.location.href = '/linc_industries/index';
                    }else{
                        //alert("hadgalj chadsangui");
                        isCompletedSurvey = false;
                    }

                })
                .catch(function (error) {
                    isCompletedSurvey = false;
                    console.log(error);
                });
        }
    }
})