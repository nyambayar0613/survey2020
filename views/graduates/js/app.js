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
            q1_1_1: 0,
            q1_1_2: 0,
            q1_1_3: 0,
            q1_1_4: 0,
            q1_1_5: 0,

            q1_2_1: 0,
            q1_2_2: 0,
            q1_2_3: 0,
            q1_2_4: 0,
            q1_2_5: 0,
            q1_2_6: 0,
            q1_2_7: 0,
            q1_2_8: 0,
            q1_2_9: 0,
            q1_2_10: 0,
            q1_2_11: 0,
            q1_2_12: 0,
            q1_2_13: 0,
            q1_2_14: 0,
            q1_2_15: 0,

            q1_3_1: 0,
            q1_3_2: 0,
            q1_3_3: 0,
            q1_3_4: 0,
            q1_3_5: 0,
            q1_3_6: 0,
            q1_3_7: 0,
            q1_3_8: 0,
            q1_3_9: 0,
            q1_3_10: 0,
            q1_3_11: 0,
            q1_3_12: 0,
            q1_3_13: 0,
            q1_3_14: 0,
            q1_3_15: 0,

            q2_1_1: 0,
            q2_1_2: 0,
            q2_1_3: 0,

            q2_2_1: 0,
            q2_2_2: 0,

            q3_1: 0,
            q3_2: 0,
            q3_3: 0,

            q4_1: '',

            q4_2: '',

            q4_3: '',

            q5_0: '',

            q5_1: '',

            q5_2: '',
            q5_2_nemelt:'',

            q5_3: '',

            q5_4: '',
            q5_4_nemelt: '',

            q5_5: '',

            q5_6: '',

            q5_6_nemelt: '',
        },

    },
    methods: {

        validateQ1_1: function(){
            window.scrollTo(500, 0);

            if (this.questions.q1_1_1 == 0 ||
                this.questions.q1_1_2 == 0 ||
                this.questions.q1_1_3 == 0 ||
                this.questions.q1_1_4 == 0 ||
                this.questions.q1_1_5 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
            // return true;

        },
        validateQ1_2: function() {
            window.scrollTo(500, 0);
            if (this.questions.q1_2_1 == 0 ||
                this.questions.q1_2_2 == 0 ||
                this.questions.q1_2_3 == 0 ||
                this.questions.q1_2_4 == 0 ||
                this.questions.q1_2_5 == 0 ||
                this.questions.q1_2_6 == 0 ||
                this.questions.q1_2_7 == 0 ||
                this.questions.q1_2_8 == 0 ||
                this.questions.q1_2_9 == 0 ||
                this.questions.q1_2_10 == 0 ||
                this.questions.q1_2_11 == 0 ||
                this.questions.q1_2_12 == 0 ||
                this.questions.q1_2_13 == 0 ||
                this.questions.q1_2_14 == 0 ||
                this.questions.q1_2_15 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
            // return true;
        },
        validateQ1_3: function() {
            window.scrollTo(500, 0);

            if (this.questions.q1_2_1 == 0 ||
                this.questions.q1_2_2 == 0 ||
                this.questions.q1_2_3 == 0 ||
                this.questions.q1_2_4 == 0 ||
                this.questions.q1_2_5 == 0 ||
                this.questions.q1_2_6 == 0 ||
                this.questions.q1_2_7 == 0 ||
                this.questions.q1_2_8 == 0 ||
                this.questions.q1_2_9 == 0 ||
                this.questions.q1_2_10 == 0 ||
                this.questions.q1_2_11 == 0 ||
                this.questions.q1_2_12 == 0 ||
                this.questions.q1_2_13 == 0 ||
                this.questions.q1_2_14 == 0 ||
                this.questions.q1_2_15 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
            // return true;
        },
        validateQ2: function() {
            window.scrollTo(500, 0);

            if (this.questions.q2_1_1 == 0 ||
                this.questions.q2_1_2 == 0 ||
                this.questions.q2_1_3 == 0 ||
                this.questions.q2_2_1 == 0 ||
                this.questions.q2_2_2 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
            // return true;
        },
        validateQ3: function() {
            window.scrollTo(500, 0);

            if (this.questions.q3_1 == 0 ||
                this.questions.q3_2 == 0 ||
                this.questions.q3_3 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
            // return true;
        },
        validateQ4: function() {
            window.scrollTo(500, 0);

            if (this.questions.q4_1 == '' ||
                this.questions.q4_2 == '' ||
                this.questions.q4_3 == ''
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
            // return true;
        },
        validateQ5: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q5_1 == ''
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else if (this.questions.q5_2 == '회사(기관)에 취업' ||
                        this.questions.q5_2 == '창업(자영업)' ||
                        this.questions.q5_2 == '아르바이트' ||
                        this.questions.q5_2 == '직장에 다녔으나 현재 미취업'){
                    if(
                        this.questions.q5_3 == '' ||
                        this.questions.q5_5 == ''
                    ) {
                        alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                        return false;
                    } else {
                        return  true;
                    }
            } else if (this.questions.q5_2 == '취업한적 없음'){
                if(
                    this.questions.q5_3 == ''){
                    alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                    return false;
                } else {
                    return  true;
                }
            } else if(this.questions.q5_2 == '' && this.questions.q5_2_nemelt == '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
             else if(this.questions.q5_4 == '' && this.questions.q5_4_nemelt == '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            else if(this.questions.q5_6 == '' && this.questions.q5_6_nemelt == '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            else {
                return true;
            }
        },

        onComplete: function(){
            axios({
                method : 'POST',
                url    : '/graduates/save',
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
                    if(response.data){
                        isCompletedSurvey = true;
                        alert("설문에 응해 주셔서 감사합니다. 설문 작성이 완료 되었습니다.");
                        window.location.href = '/graduates/index';
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