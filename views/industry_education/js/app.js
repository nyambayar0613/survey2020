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
        sq2_1_data_1: '',
        sq2_1_data_2: '',
        sq2_1_data_3: '',
        sq2_1_data_4: '',
        sq2_1_data: ["", "", "", "", ""],
        questions: {
            q1_1: '',
            q1_2: '',
            q1_3: '',
            q1_4: '',
            q1_5: '',

            sq1: [],
            sq1_nemelt: '',
            sq2: '',
            sq2_1: [],
            sq3: '',
            sq3_1: '',
            sq3_1_nemelt: '',
            sq3_2: '',
            sq3_2_nemelt: '',
            sq4_1_1: '',
            sq4_1_2: [],
            sq4_1_2_nemelt: '',

            sq5_1: [],
            sq5_2: [],
            sq5_2_nemelt: '',
            sq5_3: [],
            sq5_3_nemelt: '',

        },
    },
    methods: {
        onlyNumber ($event) {
            let keyCode = ($event.keyCode ? $event.keyCode : $event.which);
            if ((keyCode < 48 || keyCode > 57) && keyCode !== 46) { // 46 is dot
                $event.preventDefault();
            }
        },
        validateQ1: function(){
            window.scrollTo(500, 0);

            if (
                this.questions.q1_2 === '' ||
                this.questions.q1_3 === '' ||
                this.questions.q1_4 === '' ||
                this.questions.q1_5 === ''
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ2: function(){
            window.scrollTo(500, 0);

            var isValidate = false;

            if (this.questions.sq1.length > 0 || this.questions.sq1_nemelt !== '') {
                isValidate = true;
            }else {
                isValidate = false;
            }

            if (this.questions.sq2 === '' || this.questions.sq3 === '') {
                isValidate = false;
            }

            if (this.questions.sq2 === '1') {
                if (this.questions.sq2_1.length === 0) {
                    isValidate = false;
                }
            }

            if (this.questions.sq3 === '1') {
                if (this.questions.sq3_1 !== '' || this.questions.sq3_1_nemelt !== '') {
                    isValidate = true;
                } else {
                    isValidate = false;
                }
            }

            if (this.questions.sq3 === '2') {
                if (this.questions.sq3_2 !== '' || this.questions.sq3_2_nemelt !== '') {
                    isValidate = true;
                } else {
                    isValidate = false;
                }
            }

            if (this.questions.sq4_1_1 === '') {
                isValidate = false;
            } else if(this.questions.sq4_1_1 === '1' || this.questions.sq4_1_1 === '3') {
                if (this.questions.sq4_1_2.length > 0 || this.questions.sq4_1_2_nemelt !== '') {
                    isValidate = true;
                } else {
                    isValidate = false;
                }
            } else if(this.questions.sq4_1_1 === '2') {
                isValidate = true;
            }



            if (isValidate === false) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return isValidate;
            } else {
                return isValidate;
            }
        },
        validateQ3: function() {
            window.scrollTo(500, 0);

            if (
                this.questions.sq5_1.length === 0 ||
                this.questions.sq5_2.length === 0 ||
                this.questions.sq5_3.length === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        onComplete: function(){
            axios({
                method : 'POST',
                url    : '/industry_education/save',
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
                        window.location.href = '/industry_education/index';
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
    },
    watch: {
        "questions.sq2": function () {
            this.questions.sq2_1 = [];
        }
    }
})