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
var app = new Vue({
    el: '#app',

    data: {
        questions:{
            q1_1:'',
            q1_2:'',
            q1_3:'',
            q1_4:'',
            q1_5:'',
            q1_6:'',
            q1_6_nemelt:'',
            q1_7:'',

            q2_1:'',
            q2_2:'',
            q2_3:'',
            q2_4:[],
            q2_5:[],
            q2_5_nemelt:'',
            q2_6:'',
            q2_7:[],
            q2_7_nemelt:'',
            q2_8:[],
            q2_8_nemelt:'',

            q3_1: 0,
            q3_2: 0,
            q3_3: 0,
            q3_4: 0,
            q3_5: 0,
            q3_6: 0,
            q3_7: 0,
            q3_8: 0,
            q3_9: 0,
            q3_10: 0,
            q3_11: 0,
            q3_12: 0,
            q3_13: 0,
            q3_14: 0,
            q3_15: 0,

            q4_1: [],
            q4_1_nemelt: '',
            q4_5: 0,
            q4_6: 0,
            q4_7: 0,
            q4_8: 0,
            q4_9: 0,
            q4_10: 0,
            q4_11: 0,
            q4_12: 0,

            q5_1: 0,
            q5_2: 0,
            q5_3: 0,
            q5_4: 0,
            q5_5: 0,
            q5_6: 0,
            q5_7: 0,

            q8_6:[],
            q8_6_nemelt:'',
            q8_7:[],
            q8_7_nemelt:'',
            q8_8:[],
            q8_8_nemelt:'',
            q8_9:'',

        },
        fill_8_1_index: 1,
    },

    methods: {
        checkVal: function (){

            if(document.form.questions.q8_3_nemelt.value != "")
            {
                alert("not empty");
            }
            return;
        },

        fill4_1: function(value, text){
            var text1 = text;

            if(this.fill_8_1_index === 1){
                if(this.questions.q4_2 !== text1 && this.questions.q4_3 !== text1){
                    if (this.questions.q4_1 != '') {
                        return false;
                    } else {
                        this.questions.q4_1 = text1;
                    }
                    this.fill_8_1_index = 2;
                }
                return true;
            }
            if(this.fill_8_1_index === 2){
                if(this.questions.q4_1 !== text1 && this.questions.q4_3 !== text1){
                    if (this.questions.q4_2 != '') {
                        return false;
                    } else {
                        this.questions.q4_2 = text1;
                    }
                    this.fill_8_1_index = 3;
                }
                return true;
            }
            if(this.fill_8_1_index === 3){
                if(this.questions.q4_1 !== text1 && this.questions.q4_2 !== text1){
                    if (this.questions.q4_3 != '') {
                        return false;
                    } else {
                        this.questions.q4_3 = text1;
                    }
                    this.fill_8_1_index = 1;
                }
                return true;
            }
        },
        delete_value_8_1:function(index){
            if(index == 1){
                this.questions.q4_1 = '';
                this.fill_8_1_index = 1;
                return true;
            }
            if(index == 2){
                this.questions.q4_2 = '';
                this.fill_8_1_index = 2;
                return true;
            }
            if(index== 3){
                this.questions.q4_3 = '';
                this.fill_8_1_index = 3;
                return true;
            }
        },

        validateQ1: function(){
            window.scrollTo(500, 0);
            /*if(this.questions.q1_6 == '' && this.questions.q1_6_nemelt == '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (
                this.questions.q1_3 == '' ||
                this.questions.q1_4 == '' ||
                this.questions.q1_5 == '' ||
                this.questions.q1_7 == ''
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }*/
            return true;
        },

        validateQ2: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q2_1 == ''
            ){
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }


        },
        validateQ3: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q3_1 == 0 ||
                this.questions.q3_2 == 0 ||
                this.questions.q3_3 == 0 ||
                this.questions.q3_4 == 0 ||
                this.questions.q3_5 == 0 ||
                this.questions.q3_6 == 0 ||
                this.questions.q3_7 == 0 ||
                this.questions.q3_8 == 0 ||
                this.questions.q3_9 == 0 ||
                this.questions.q3_10 == 0 ||
                this.questions.q3_11 == 0 ||
                this.questions.q3_12 == 0 ||
                this.questions.q3_13 == 0 ||
                this.questions.q3_14 == 0 ||
                this.questions.q3_15 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ4: function() {
            window.scrollTo(500, 0);

            if (this.questions.q4_1.length < 3) {
                alert(' 3가지를 응답해 주세요.');
                return false;
            }

            if (this.questions.q4_1.length === 0 ||
                this.questions.q4_5 === 0 ||
                this.questions.q4_6 === 0 ||
                this.questions.q4_7 === 0 ||
                this.questions.q4_8 === 0 ||
                this.questions.q4_9 === 0 ||
                this.questions.q4_10 === 0 ||
                this.questions.q4_11 === 0 ||
                this.questions.q4_12 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ5: function() {
            window.scrollTo(500, 0);
            if (this.questions.q5_1 === 0 ||
                this.questions.q5_2 === 0 ||
                this.questions.q5_3 === 0 ||
                this.questions.q5_4 === 0 ||
                this.questions.q5_5 === 0 ||
                this.questions.q5_6 === 0 ||
                this.questions.q5_7 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            } /*else if (this.questions.q5_8 == '예') {
                if(this.questions.q5_9 ==''){
                    alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                    return false;
                } else {
                    return true;
                }
            } else {
                if (this.questions.q5_8 == '') {
                    alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                    return false;
                }
                return true;
            }*/
        },
        validateQ6: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q6_1 == '' ||
                this.questions.q6_3 == ''
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else if(this.questions.q6_1 == '예'){
                if(this.questions.q6_2 == ''){
                    alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                    return false;
                } else {
                    return true;
                }
            } else if (this.questions.q6_3 == '아니오'){
                if(this.questions.q6_4 == ''){
                    alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                    return false;
                } else {
                    return true;
                }
            } else {
                return true;
            }
        },

        validateQ8: function() {
            window.scrollTo(500, 0);
            /*if(this.questions.q8_6.length < 1 && this.questions.q8_6_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if(this.questions.q8_7.length < 1 && this.questions.q8_7_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if(this.questions.q8_8.length < 1 && this.questions.q8_8_nemelt === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }*/
            /*if (
                this.questions.q8_1 == '' ||
                this.questions.q8_2 == '' ||
                this.questions.q8_3 == '' ||
                this.questions.q8_4 == '' ||
                this.questions.q8_5 == ''
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }*/

            if(
                this.questions.q8_6.length < 1 && this.questions.q8_6_nemelt === '' ||
                this.questions.q8_7.length < 1 && this.questions.q8_7_nemelt === '' ||
                this.questions.q8_8.length < 1 && this.questions.q8_8_nemelt === ''
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
                url    : '/industry/save',
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
                console.log(response.data);
                if(response.data.isSuccess === true){
                    isCompletedSurvey = true;
                    alert("설문에 응해 주셔서 감사합니다. 설문 작성이 완료 되었습니다.");
                    window.location.href = '/industry/index';
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
    watch : {
        "questions.q2_1" : function(newVal,oldVal){
            this.questions.q2_6 = "";
            this.questions.q2_5 = [];
            this.questions.q2_4 = [];
        } ,
        "questions.q2_6" :function(){
            this.questions.q2_7 = [];
            this.questions.q2_8 = [];
        },
        "questions.q5_8" :function(){
            this.questions.q5_9 = [];
            this.questions.q5_10 = [];
        },
        "questions.q6_1" :function(){
            this.questions.q6_2 = [];
        },
        "questions.q6_3" :function(){
            this.questions.q6_4 = [];
        },
        "questions.q4_1": function (newVal) {
            if(newVal.length < 3) {
                $("input:checkbox:not(:checked)").removeAttr("disabled", "disabled");
            }
            if(newVal.length === 3) {
                $(".survey4_1:checkbox:not(:checked)").attr("disabled", "disabled");
            }
            console.log(newVal.length)
        }
    },
})