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
            q1_1_1:0,
            q1_1_2:0,
            q1_1_3:0,
            q1_1_4:0,
            q1_1_5:0,

            q2_1_1:0,
            q2_1_2:0,
            q2_1_3:0,
            q2_1_4:0,
            q2_1_5:0,

            q2_1_1_1: [],

            q2_2_1:0,
            q2_2_2:0,
            q2_2_3:0,
            q2_2_4:0,

            q2_2_1_1: [],

            q2_3_1:0,
            q2_3_2:0,
            q2_3_3:0,
            q2_3_4:0,
            q2_3_5:0,
            q2_3_6:0,

            q2_4_1:0,
            q2_4_2:0,
            q2_4_3:0,

            q2_4_1_1: [],
            q2_4_2_1: [],

            q3_1_1:0,
            q3_1_2:0,
            q3_1_3:0,
            q3_1_4:0,
            q3_1_5:0,
            q3_1_6:0,

            q3_2_1:0,
            q3_2_2:0,
            q3_2_3:0,

            q3_2_1_1: [],

            q3_3_1:0,
            q3_3_2:0,
            q3_3_3:0,

            q3_4_1:0,
            q3_4_2:0,
            q3_4_3:0,
            q3_4_4:0,

            q3_3_1_1: '',

            q4_1_1:0,
            q4_1_2:0,
            q4_1_3:0,
            q4_1_4:0,


            q4_2_1:0,
            q4_2_2:0,
            q4_2_3:0,
            q4_2_4:0,

            q4_3_1:0,
            q4_3_2:0,
            q4_3_3:0,
            q4_3_4:0,


            q5_1_1:0,
            q5_1_2:0,
            q5_1_3:0,
            q5_1_4:0,


            q6_1_1:0,
            q6_1_2:0,
            q6_1_3:0,

            q6_2_1:0,
            q6_2_2:0,
            q6_2_3:0,

            q6_3_1:0,
            q6_3_2:0,
            q6_3_3:0,

            q6_4_1:0,
            q6_4_2:0,
            q6_4_3:0,

            q6_5_1:0,
            q6_5_2:0,


            q6_6_1:0,
            q6_6_2:0,
            q6_6_3:0,

            q6_7: [],

            q7_1_2:0,
            q7_1_3:0,

            q8_1_1:0,
            q8_1_2:0,

            q8_2: '',

            q2_1_nemelt: '',
            q2_2_nemelt: '',
            q2_4_1_nemelt: '',
            q2_4_2_nemelt: '',
            q3_2_nemelt: '',
            q6_7_nemelt: '',

            qc9_1_1: 0,
            qc9_1_2: 0,
            qc9_1_3: 0,
            qc9_1_4: 0,
            qc9_1_5: 0,
            qc9_1_6: 0,
            qc9_1_7: 0,
            qc9_1_8: 0,

            qc9_2_1: 0,
            qc9_2_2: 0,
            qc9_2_3: 0,
            qc9_2_4: 0,
            qc9_2_5: 0,

            qc9_3_1: 0,
            qc9_3_2: 0,
            qc9_3_3: 0,
            qc9_3_4: 0,

            q9_1: 0,
            q9_2: 0,
            q9_3: 0,

        },

    },
    methods: {

        validateQ1: function(){
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
        },
        validateQ2_1: function() {
            window.scrollTo(500, 0);
            if(this.questions.q2_1_1_1.length < 1 && this.questions.q2_1_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (this.questions.q2_1_1 === 0 ||
                this.questions.q2_1_2 === 0 ||
                this.questions.q2_1_3 === 0 ||
                this.questions.q2_1_4 === 0 ||
                this.questions.q2_1_5 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ2_2: function() {
            window.scrollTo(500, 0);
            if(this.questions.q2_2_1_1.length < 1 && this.questions.q2_2_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (this.questions.q2_2_1 == 0 ||
                this.questions.q2_2_2 == 0 ||
                this.questions.q2_2_3 == 0 ||
                this.questions.q2_2_4 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ2_3: function() {
            window.scrollTo(500, 0);
            if (this.questions.q2_3_1 == 0 ||
                this.questions.q2_3_2 == 0 ||
                this.questions.q2_3_3 == 0 ||
                this.questions.q2_3_4 == 0 ||
                this.questions.q2_3_5 == 0 ||
                this.questions.q2_3_6 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ2_4: function() {
            window.scrollTo(500, 0);
            if(this.questions.q2_4_1_1.length < 1 && this.questions.q2_4_1_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if(this.questions.q2_4_2_1.length < 1 && this.questions.q2_4_2_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }

            if (this.questions.q2_4_1 == 0 ||
                this.questions.q2_4_2 == 0 ||
                this.questions.q2_4_3 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ3_1: function() {
            window.scrollTo(500, 0);
            if (this.questions.q3_1_1 == 0 ||
                this.questions.q3_1_2 == 0 ||
                this.questions.q3_1_3 == 0 ||
                this.questions.q3_1_4 == 0 ||
                this.questions.q3_1_5 == 0 ||
                this.questions.q3_1_6 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ3_2: function() {
            window.scrollTo(500, 0);
            if(this.questions.q3_2_1_1.length < 1 && this.questions.q3_2_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (this.questions.q3_2_1 === 0 ||
                this.questions.q3_2_2 === 0 ||
                this.questions.q3_2_3 ===0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ3_3: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q3_3_1 === 0 ||
                this.questions.q3_3_2 === 0 ||
                this.questions.q3_3_3 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
            return true;
            }
        },
        validateQ3_4: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q3_4_1 === 0 ||
                this.questions.q3_4_2 === 0 ||
                this.questions.q3_4_3 === 0 ||
                this.questions.q3_4_4 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ4_1: function() {
            window.scrollTo(500, 0);
            if (this.questions.q4_1_1 == 0 ||
                this.questions.q4_1_2 == 0 ||
                this.questions.q4_1_3 == 0 ||
                this.questions.q4_1_4 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ4_2: function() {
            window.scrollTo(500, 0);
            if (this.questions.q4_2_1 == 0 ||
                this.questions.q4_2_2 == 0 ||
                this.questions.q4_2_3 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ4_3: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q4_3_1 == 0 ||
                this.questions.q4_3_2 == 0 ||
                this.questions.q4_3_3 == 0 ||
                this.questions.q4_3_4 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
            return true;
            }
        },
        validateQ5: function() {
            window.scrollTo(500, 0);
            if (this.questions.q5_1_1 == 0 ||
                this.questions.q5_1_2 == 0 ||
                this.questions.q5_1_3 == 0 ||
                this.questions.q5_1_4 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ6_1: function() {
            window.scrollTo(500, 0);
            if (this.questions.q6_1_1 == 0 ||
                this.questions.q6_1_2 == 0 ||
                this.questions.q6_1_3 == 0 ||
                this.questions.q6_2_1 == 0 ||
                this.questions.q6_2_2 == 0 ||
                this.questions.q6_2_3 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ6_3: function() {
            window.scrollTo(500, 0);
            if (this.questions.q6_3_1 === 0 ||
                this.questions.q6_3_2 === 0 ||
                this.questions.q6_3_3 === 0 ||
                this.questions.q6_4_1 === 0 ||
                this.questions.q6_4_2 === 0 ||
                this.questions.q6_4_3 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ6_5: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q6_5_1 === 0 ||
                this.questions.q6_5_2 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
            return true;
            }
        },
        validateQ6_6: function() {
            window.scrollTo(500, 0);
            if(this.questions.q6_7.length < 1 && this.questions.q6_7_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (this.questions.q6_6_1 === 0 ||
                this.questions.q6_6_2 === 0 ||
                this.questions.q6_6_3 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ7: function() {
            window.scrollTo(500, 0);
            if (this.questions.q7_1_1 == 0 ||
                this.questions.q7_1_2 == 0 ||
                this.questions.q7_1_3 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ8: function() {
            window.scrollTo(500, 0);
            if (this.questions.q8_1_1 === 0 ||
                this.questions.q8_1_2 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },

        validateQC9: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.qc9_1_1 === 0 ||
                this.questions.qc9_1_2 === 0 ||
                this.questions.qc9_1_3 === 0 ||
                this.questions.qc9_1_3 === 0 ||
                this.questions.qc9_1_4 === 0 ||
                this.questions.qc9_1_5 === 0 ||
                this.questions.qc9_1_7 === 0 ||
                this.questions.qc9_1_8 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },

        validateQC9_2: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.qc9_2_1 === 0 ||
                this.questions.qc9_2_2 === 0 ||
                this.questions.qc9_2_3 === 0 ||
                this.questions.qc9_2_4 === 0 ||
                this.questions.qc9_2_5 === 0 ||
                this.questions.qc9_3_1 === 0 ||
                this.questions.qc9_3_2 === 0 ||
                this.questions.qc9_3_3 === 0 ||
                this.questions.qc9_3_4 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },

        validateQ9: function() {
            window.scrollTo(500, 0);
            if (this.questions.q9_1 == '' ||
                this.questions.q9_2 == '' ||
                this.questions.q9_3 == ''
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
                url    : '/teachers/save',
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
                        window.location.href = '/teachers/index';
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