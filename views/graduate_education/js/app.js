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
        questions: {
            q1_1: '',
            q1_2: '',
            q1_3: '',
            q1_4: '',
            q2_1: '',
            q2_1_1: '',
            q2_1_2: [],
            q2_1_2_nemelt: '',

            sq5_1: [],
            sq5_1_nemelt: '',

            sq5_2: [],
            sq5_2_nemelt: '',
            sq5_3: [],
            sq5_3_nemelt: '',
        }
    },
    methods: {
        validateQ1: function(){
            window.scrollTo(500, 0);

            if (
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
        validateQ2: function(){
            window.scrollTo(500, 0);

            var isValidate1 = false;
            var isValidate = false;

            if (this.questions.q2_1 === '') {
                isValidate1 = false;
            } else {
                isValidate1 = true;
            }

            if (this.questions.q2_1_1 === '') {
                isValidate = false;
            } else if(this.questions.q2_1_1 === '1' || this.questions.q2_1_1 === '3') {
                if (
                    this.questions.q2_1_2.length > 0 ||
                    this.questions.q2_1_2 !== '' ||
                    this.questions.q2_1_2_nemelt !== ''
                ) {
                    isValidate = true;
                } else {
                    isValidate = false;
                }
            } else if(this.questions.q2_1_1 === '2') {
                isValidate = true;
            }

            if (isValidate1 && isValidate) {
                return  true;
            } else {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
        },
        validateQ3: function(){
            window.scrollTo(500, 0);

            var isValidate1 = false;
            var isValidate2 = false;
            var isValidate3 = false;

            if(this.questions.sq5_1.length > 0 || this.questions.sq5_1_nemelt !== '') {
                isValidate1 = true;
            } else {
                isValidate1 = false;
            }

            if(this.questions.sq5_2.length > 0 || this.questions.sq5_2_nemelt !== '') {
                isValidate2 = true;
            } else {
                isValidate2 = false;
            }

            if(this.questions.sq5_3.length > 0 || this.questions.sq5_3_nemelt !== '') {
                isValidate3 = true;
            } else {
                isValidate3 = false;
            }

            if (isValidate1 && isValidate2 && isValidate3) {
                return true;
            } else {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
        },
        onComplete: function(){
            axios({
                method : 'POST',
                url    : '/graduate_education/save',
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
                    console.log(response)
                    if(response.data.isSuccess === true){
                        isCompletedSurvey = true;
                        alert("설문에 응해 주셔서 감사합니다. 설문 작성이 완료 되었습니다.");
                        window.location.href = '/graduate_education/index';
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