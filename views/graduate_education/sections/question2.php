<h5 style="text-align: center"><b><응답자 특성 문항></b></h5>

<br><br>
<div class="middle">

<p><b>SQ1)</b> 귀하가 연암대학교에서 이수한 전공은 무엇입니까? </p>
<input type="text" class="form-control" v-model="questions.q2_1">

<br><br>

</div>
<p class="alert alert-primary">
※ 연암대학교 <b><u>스마트원예학과(학사학위 전공심화(3,4학년))는 스마트팜에 대한 지식과 기술을 기반으로 원예, 조경, 가드닝 등 식물 생산과 관리를 전문적으로 수행할 수 있는 현장 실무형 인재를 양성하는데 목표를</u></b> 두고 있습니다.
</p>

<br><br>
<div class="middle">
    <p><b>SQ2)</b> 다음은 연암대학교의 학사학위 전공심화 과정인 스마트원예학과 참여의사를 묻는 문항입니다.  </p>
    <p>1-1. 귀하는 연암대학교 스마트원예학과 교육과정(학사학위 전공심화(3, 4학년))에 참여할 의사가 있습니까?</p>

    <table class="table table-responsive center">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio" v-model="questions.q2_1_1"  value="1">
                <div class="box4" style="width: 250px">
                    <span>1) 예</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q2_1_1" value="2">
                <div class="box4" style="width: 250px;">
                    <span>2) 아니오 </span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q2_1_1"  value="3">
                <div class="box4" style="width: 250px">
                    <span>3) 아직 결정하지 않았음</span>
                </div>
            </label>
        </td>
    </table>

    <br><br>

    <div v-if="questions.q2_1_1 == '1' || questions.q2_1_1 == '3'">
        <p>1-2. 스마트원예학과는 원칙적으로 주간으로 운영됩니다만, 산업체 재직자(일학습병행자)를 위한 다양한 수업 형태도 병행하고자 합니다. 다음 중 귀하가 가장 선호하는 수업 형태를 선택해 주십시오. </p>

        <!--<table class="table table-responsive center">

            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio" v-model="questions.q2_1_2"  value="1) 주간 강좌">
                    <div class="box4" style="width: 250px">
                        <span>1) 주간 강좌</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_1_2" value="2) 토요일 강좌">
                    <div class="box4" style="width: 250px;">
                        <span>2) 토요일 강좌 </span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q2_1_2" value="3) 비대면(온라인) 강좌">
                    <div class="box4" style="width: 250px;">
                        <span>3) 비대면(온라인) 강좌</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q2_1_2" value="4) 계절학기(하계, 동계) 강좌">
                    <div class="box4" style="width: 250px">
                        <span>4) 계절학기(하계, 동계) 강좌</span>
                    </div>
                </label>
                <label>
                    <div class="box4" style="width: 250px">
                        <input type="text" v-model="questions.q2_1_2_nemelt" class="form-control form-control-sm"  value="관계없음 (설문종료)" placeholder="5) 기타">
                    </div>
                </label>
            </td>

        </table>-->

        <table class="table table-bordered table-responsive center">
            <thead class="thead-default">

            <tr>
                <td>1)</td>
                <td><input type="checkbox" v-model="questions.q2_1_2" id="q2_1_2_1" value="1"></td>
                <td><label for="q2_1_2_1"> 주간 강좌  </label></td>

                <td>2)</td>
                <td><input type="checkbox" v-model="questions.q2_1_2" id="q2_1_2_2" value="2"></td>
                <td><label for="q2_1_2_2"> 토요일 강좌 </label></td>
            </tr>

            <tr>
                <td>3)</td>
                <td><input type="checkbox" v-model="questions.q2_1_2" id="q2_1_2_3" value="3"></td>
                <td><label for="q2_1_2_3"> 비대면(온라인) 강좌 </label></td>

                <td>4)</td>
                <td><input type="checkbox" v-model="questions.q2_1_2" id="q2_1_2_4" value="4"></td>
                <td><label for="q2_1_2_4"> 계절학기(하계, 동계) 강좌 </label></td>
            </tr>

            <tr>
                <td>5)</td>
                <td>기타: </td>
                <td><input type="text" v-model="questions.q2_1_2_nemelt" class="form-control"></td>

                <td></td>
                <td></td>
                <td></td>
            </tr>

            </thead>
        </table>
    </div>
</div>

