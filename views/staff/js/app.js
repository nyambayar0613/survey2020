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
            q1_1_5:0, // section 1

            q2_1_1:0,
            q2_1_2:0,
            q2_1_1_1: [],
            q2_1_1_other: '', // section 2.1

            q2_2_1:0,
            q2_2_1_1: [],
            q2_2_1_other: '', // section 2.2

            q2_3_1:0,
            q2_3_2:0,
            q2_3_3:0,
            q2_3_4:0,
            q2_3_5:0, // section 2.3

            q2_4_1:0,
            q2_4_1_1: [],
            q2_4_1_other: '',
            q2_4_2_1: [],
            q2_4_2_other: '', // section 2.4

            q3_1_1:0,
            q3_1_2:0,
            q3_1_3:0,
            q3_1_4:0, // section 3.1

            q3_2_1:0,
            q3_2_2:0,
            q3_2_3:0,
            q3_2_1_1: [],
            q3_2_1_other: '', // section 3.2

            q3_3_1:0,
            q3_3_2:0,
            q3_3_3:0,
            q3_3_1_1:'', // section 3.3

            // added 20201209
            q3_4_1: 0,
            q3_4_2: 0,
            q3_4_3: 0,
            q3_4_4: 0, //section 3.4

            q4_1_1:0,
            q4_1_2:0, // section 4.1

            q4_2_1:0,
            q4_2_2:0,
            q4_2_3:0, // section 4.2

            q4_3_1:0,
            q4_3_2:0,
            q4_3_3:0,
            q4_3_4:0, // section 4.4

            q5_1_1:0,
            q5_1_2:0,
            q5_1_3:0,
            q5_1_4:0, // section 5.1

            q6_1_1:0,
            q6_1_2:0,
            q6_1_3:0,
            q6_2_1:0,
            q6_2_2:0,
            q6_2_3:0,  // section 6.1 6.2

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

            q6_7_1:[],
            q6_7_other:'',


            q7_1_1: 0,
            q7_1_2: 0,

            q8_1_1: 0,
            q8_1_2: 0,
            q8_1_1_1: '',

            q9_1_1: 0,
            q9_1_2: 0,
            q9_1_3: 0,
            q9_1_4: 0,
            q9_1_5: 0,
            q9_1_6: 0,
            q9_1_7: 0,
            q9_1_8: 0,

            q9_2_1: 0,
            q9_2_2: 0,
            q9_2_3: 0,
            q9_2_4: 0,
            q9_2_5: 0,
            q9_2_6: 0,
            q9_2_7: 0,

            q10_1: 0,
            q10_2: 0,
            q10_3: 0,

        },
        fill_8_1_index: 1,
        fill_8_2_index: 1,
        fill_8_4_index: 1,
        fill_8_5_index: 1,
        fill_8_10_index: 1,
    },
    methods: {
        checkVal: function (){

            if(document.form.questions.q8_3_nemelt.value != "")
            {
                alert("not empty");
            }
            return;
        },

        fill8_1: function(value){

            if(this.fill_8_1_index == 1){
                if(this.questions.q8_1_2 != value && this.questions.q8_1_3 != value){
                    if (this.questions.q8_1_1 != null) {
                        return false;
                    } else {
                        this.questions.q8_1_1 = value;
                    }
                    this.fill_8_1_index = 2;
                }

                return true;
            }
            if(this.fill_8_1_index == 2){
                if(this.questions.q8_1_1 != value && this.questions.q8_1_3 != value){
                    if (this.questions.q8_1_2 != null) {
                        return false;
                    } else {
                        this.questions.q8_1_2 = value;
                    }
                    this.fill_8_1_index = 3;
                }

                return true;
            }
            if(this.fill_8_1_index == 3){
                if(this.questions.q8_1_1 != value && this.questions.q8_1_2 != value){
                    if (this.questions.q8_1_3 != null) {
                        return false;
                    } else {
                        this.questions.q8_1_3 = value;
                    }
                    this.fill_8_1_index = 1;
                }

                return true;

            }
        },

        delete_value_8_1:function(index){
            if(index == 1){
                this.questions.q8_1_1 = null;
                this.fill_8_1_index = 1;
                return true;
            }
            if(index == 2){
                this.questions.q8_1_2 = null;
                this.fill_8_1_index = 2;
                return true;
            }
            if(index== 3){
                this.questions.q8_1_3 = null;
                this.fill_8_1_index = 3;
                return true;
            }
        },

        fill8_2: function(value){

            if(this.fill_8_2_index == 1){
                if(this.questions.q8_2_2 != value && this.questions.q8_2_3 != value){
                    if (this.questions.q8_2_1 != null) {
                        return false;
                    } else {
                        this.questions.q8_2_1 = value;
                    }
                    this.fill_8_2_index = 2;
                }
                return true;
            }
            if(this.fill_8_2_index == 2){
                if(this.questions.q8_2_1 != value && this.questions.q8_2_3 != value){
                    if (this.questions.q8_2_2 != null) {
                        return false;
                    } else {
                        this.questions.q8_2_2 = value;
                    }
                    this.fill_8_2_index = 3;
                }
                return true;
            }
            if(this.fill_8_2_index == 3){
                if(this.questions.q8_2_1 != value && this.questions.q8_2_2 != value) {
                    if (this.questions.q8_2_3 != null) {
                        return false
                    } else {
                        this.questions.q8_2_3 = value;
                    }
                    this.fill_8_2_index = 1;
                }
                return true;
            }
        },

        delete_value_8_2:function(index){
            if(index == 1){
                this.questions.q8_2_1 = null;
                this.fill_8_2_index = 1;
                return true;
            }
            if(index == 2){

                this.questions.q8_2_2 = null;
                this.fill_8_2_index = 2;
                return true;
            }
            if(index==3){
                this.questions.q8_2_3 = null;
                this.fill_8_2_index = 3;
                return true;
            }
        },

        fill8_4: function(value){
            if(this.fill_8_4_index == 1){
                if(this.questions.q8_4_2 != value && this.questions.q8_4_3 != value){
                    if (this.questions.q8_4_1 != null) {
                        return false
                    } else {
                        this.questions.q8_4_1 = value;
                    }
                    this.fill_8_4_index = 2;
                }
                return true;
            }
            if(this.fill_8_4_index == 2){
                if(this.questions.q8_4_1 != value && this.questions.q8_4_3 != value) {
                    if (this.questions.q8_4_2 != null) {
                        return false;
                    } else {
                        this.questions.q8_4_2 = value;
                    }
                    this.fill_8_4_index = 3;
                }
                return true;
            }
            if(this.fill_8_4_index == 3){
                if(this.questions.q8_4_1 != value && this.questions.q8_4_2 != value) {
                    if (this.questions.q8_4_3 != null) {
                        return false;
                    } else {
                        this.questions.q8_4_3 = value;
                    }
                    this.fill_8_4_index = 1;
                }
                return true;
            }
        },

        delete_value_8_4:function(index){
            if(index == 1){
                this.questions.q8_4_1 = null;
                this.fill_8_4_index = 1;
                return true;
            }
            if(index == 2){
                this.questions.q8_4_2 = null;
                this.fill_8_4_index = 2;
                return true;
            }
            if(index == 3){
                this.questions.q8_4_3 = null;
                this.fill_8_4_index = 3;
                return true;
            }
        },

        fill8_5: function(value){
            if(this.fill_8_5_index == 1){
                if(this.questions.q8_5_2 != value && this.questions.q8_5_3 != value) {
                    if (this.questions.q8_5_1 != null) {
                        return false;
                    } else {
                        this.questions.q8_5_1 = value;
                    }
                    this.fill_8_5_index = 2;
                }
                return true;
            }
            if(this.fill_8_5_index == 2){
                if(this.questions.q8_5_1 != value && this.questions.q8_5_3 != value) {
                    if (this.questions.q8_5_2 != null) {
                        return false;
                    } else {
                        this.questions.q8_5_2 = value;
                    }
                    this.fill_8_5_index = 3;
                }
                return true;
            }
            if(this.fill_8_5_index == 3){
                if(this.questions.q8_5_1 != value && this.questions.q8_5_2 != value) {
                    if (this.questions.q8_5_3 != null) {
                        return false;
                    } else {
                        this.questions.q8_5_3 = value;
                    }
                    this.fill_8_5_index = 1;
                }
                return true;
            }
        },

        delete_value_8_5:function(index){
            if(index == 1){
                this.questions.q8_5_1 = null;
                this.fill_8_5_index = 1;
                return true;
            }
            if(index == 2){
                this.questions.q8_5_2 = null;
                this.fill_8_5_index = 2;
                return true;
            }
            if(index== 3){
                this.questions.q8_5_3 = null;
                this.fill_8_5_index = 3;
                return true;
            }
        },

        fill8_10: function(value){

            if(this.fill_8_10_index == 1){
                if(this.questions.q8_10_2 != value && this.questions.q8_10_3 != value) {
                    if (this.questions.q8_10_1 != null) {
                        return false;
                    } else {
                        this.questions.q8_10_1 = value;
                    }
                    this.fill_8_10_index = 2;
                }
                return true;
            }
            if(this.fill_8_10_index == 2){
                if(this.questions.q8_10_1 != value && this.questions.q8_10_3 != value) {
                    if (this.questions.q8_10_2 != null) {
                        return false;
                    } else {
                        this.questions.q8_10_2 = value;
                    }
                    this.fill_8_10_index = 3;
                }
                return true;
            }
            if(this.fill_8_10_index == 3){
                if(this.questions.q8_10_1 != value && this.questions.q8_10_2 != value) {
                    if (this.questions.q8_10_3 != null) {
                        return false;
                    } else {
                        this.questions.q8_10_3 = value;
                    }
                    this.fill_8_10_index = 1;
                }
                return true;
            }
        },

        delete_value_8_10:function(index){
            if(index == 1){
                this.questions.q8_10_1 = null;
                this.fill_8_10_index = 1;
                return true;
            }
            if(index == 2){
                this.questions.q8_10_2 = null;
                this.fill_8_10_index = 2;
                return true;
            }
            if(index== 3){
                this.questions.q8_10_3 = null;
                this.fill_8_10_index = 3;
                return true;
            }
        },

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
        validateQ2: function() {

            window.scrollTo(500, 0);
            if(this.questions.q2_1_1_1.length < 1 && this.questions.q2_1_1_other === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (
                this.questions.q2_1_1 === 0 ||
                this.questions.q2_1_2 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            else {
                return true;
            }
        },
        validateQ2_2: function() {

            window.scrollTo(500, 0);

            if(this.questions.q2_2_1_1.length < 1 && this.questions.q2_2_1_other === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (
                this.questions.q2_2_1 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            else {
                return true;
            }
        },
        validateQ2_3: function() {

            window.scrollTo(500, 0);
            if (
                this.questions.q2_3_1 === 0 ||
                this.questions.q2_3_2 === 0 ||
                this.questions.q2_3_3 === 0 ||
                this.questions.q2_3_4 === 0 ||
                this.questions.q2_3_5 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            else {
                return true;
            }
        },
        validateQ2_4: function() {

            window.scrollTo(500, 0);

            if(this.questions.q2_4_1_1.length < 1 && this.questions.q2_4_1_other === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if(this.questions.q2_4_2_1.length < 1 && this.questions.q2_4_2_other === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (
                this.questions.q2_4_1 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            else {
                return true;
            }
        },
        validateQ3: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q3_1_1 === 0 ||
                this.questions.q3_1_2 === 0 ||
                this.questions.q3_1_3 ===0 ||
                this.questions.q3_1_4 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ3_2: function() {
            window.scrollTo(500, 0);
            if(this.questions.q3_2_1_1.length < 1 && this.questions.q3_2_1_other === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (
                this.questions.q3_2_1 === 0 ||
                this.questions.q3_2_2 === 0 ||
                this.questions.q3_2_3 === 0
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
        validateQ4: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q4_1_1 == 0 ||
                this.questions.q4_1_2 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }
        },
        validateQ4_2: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q4_2_1 == 0 ||
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

            if (
                this.questions.q5_1_1 == 0 ||
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
        validateQ6: function() {
            window.scrollTo(500, 0);
            if (
                this.questions.q6_1_1 === 0 ||
                this.questions.q6_1_2 === 0 ||
                this.questions.q6_1_3 === 0 ||

                this.questions.q6_2_1 === 0 ||
                this.questions.q6_2_2 === 0 ||
                this.questions.q6_2_3 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }

        },
        validateQ6_2: function() {
            window.scrollTo(500, 0);

            if (
                this.questions.q6_3_1 === 0 ||
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
            if(this.questions.q6_7_1.length < 1 && this.questions.q6_7_other === '')
            {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            }
            if (
                this.questions.q6_6_1 === 0 ||
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

            if (
                this.questions.q7_1_1 == 0 ||
                this.questions.q7_1_2 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }

        },

        validateQ8: function() {
            window.scrollTo(500, 0);

            if (
                this.questions.q8_1_1 == 0 ||
                this.questions.q8_1_2 == 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }

        },

        validateQ9: function() {
            window.scrollTo(500, 0);

            if (
                this.questions.q9_1_1 === 0 ||
                this.questions.q9_1_2 === 0 ||
                this.questions.q9_1_3 === 0 ||
                this.questions.q9_1_4 === 0 ||
                this.questions.q9_1_5 === 0 ||
                this.questions.q9_1_6 === 0 ||
                this.questions.q9_1_7 === 0 ||
                this.questions.q9_1_8 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }

        },

        validateQ9_2: function() {
            window.scrollTo(500, 0);

            if (
                this.questions.q9_2_1 === 0 ||
                this.questions.q9_2_2 === 0 ||
                this.questions.q9_2_3 === 0 ||
                this.questions.q9_2_4 === 0 ||
                this.questions.q9_2_5 === 0 ||
                this.questions.q9_2_6 === 0 ||
                this.questions.q9_2_7 === 0
            ) {
                alert('모든 응답을 하셔야 다음으로 넘어갈 수 있습니다.');
                return false;
            } else {
                return true;
            }

        },

        validateQ10: function() {
            window.scrollTo(500, 0);

            if (
                this.questions.q10_1 === 0 ||
                this.questions.q10_2 === 0 ||
                this.questions.q10_3 === 0
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
                url    : '/staff/save',
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
                        window.location.href = '/staff/index';
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