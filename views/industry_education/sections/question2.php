<br><br>

<hr>

<p>
    <b>SQ1) 귀사가 영위하고 있는 사업 영역은 다음 중 어느 분야입니까? (복수응답가능)</b>
</p>
<table class="table table-bordered table-responsive center">
    <thead class="thead-default">
    <tr>
        <td>1)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="1" id="sq1_1"></td>
        <td><label for="sq1_1"> 종자·종묘  </label></td>

        <td>2)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="2" id="sq1_2"></td>
        <td><label for="sq1_2"> 채소작물 </label></td>
    </tr>

    <tr>
        <td>3)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="3" id="sq1_3"></td>
        <td><label for="sq1_3"> 화훼작물 </label></td>

        <td>4)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="4" id="sq1_4"></td>
        <td><label for="sq1_4"> 특용작물 </label></td>
    </tr>

    <tr>
        <td>5)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="5" id="sq1_5"></td>
        <td><label for="sq1_5"> 과수작물 </label></td>

        <td>6)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="6" id="sq1_6"></td>
        <td><label for="sq1_6"> 조경 </label></td>
    </tr>

    <tr>
        <td>7)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="7" id="sq1_7"></td>
        <td><label for="sq1_7">정원(가드닝)</label></td>

        <td>8)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="8" id="sq1_8"></td>
        <td><label for="sq1_8">식물보호제</label></td>
    </tr>

    <tr>
        <td>9)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="9" id="sq1_9"></td>
        <td><label for="sq1_9"> 스마트팜 설비·장치 </label></td>

        <td>10)</td>
        <td><input type="checkbox" v-model="questions.sq1" value="10" id="sq1_10"></td>
        <td><label for="sq1_10"> 식물공장 </label></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>

        <td>11)</td>
        <td>기타: </td>
        <td><input type="text" v-model="questions.sq1_nemelt" class="form-control"></td>
    </tr>
    </thead>
</table>

<br>

<p>
    <b>SQ2) 귀사는 스마트팜 관련 시설을 보유하고 있습니까?</b>
</p>

<div class="middle">
    <table class="table table-responsive ">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio" v-model="questions.sq2"  value="1">
                <div class="box4">
                    <span>1) 있음 </span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.sq2" value="2">
                <div class="box4">
                    <span>2) 없음 </span>
                </div>
            </label>
        </td>
    </table>
</div>

<br>

<div v-if="questions.sq2 == '1'">
    <p>
        <b>SQ2-1) 귀사가 보유하고 있는 스마트팜 종류를 선택해 주시고 대략의 면적을 기입해 주십시오. (복수선택가능)</b>
    </p>

    <!--<table class="table table-bordered">
        <tr>
            <td>1. 비닐온실 ( <input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[0]" maxlength="6" style="width: 80px"> )평</td>
            <td>2. 유리온실 ( <input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[1]" maxlength="6" style="width: 80px"> )평</td>
        </tr>
        <tr>
            <td>3. 식물공장 ( <input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[2]" maxlength="6" style="width: 80px"> )평</td>
            <td>4. 기타 ( <input type="text" v-model="questions.sq2_1[3]" style="width: 100px"> ) ( <input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[4]" maxlength="6" style="width: 80px"> )평</td>
        </tr>
    </table>-->

    <table class="table table-bordered">
        <tr>
            <td>1.</td>
            <td>비닐온실</td>
            <td><input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[0]" maxlength="6" class="form-control"></td>
            <td>평</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>유리온실</td>
            <td><input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[1]" maxlength="6" class="form-control"></td>
            <td>평</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>식물공장</td>
            <td><input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[2]" maxlength="6" class="form-control"></td>
            <td>평</td>
        </tr>
        <tr>
            <td>4.</td>
            <td><input type="text" class="form-control" v-model="questions.sq2_1[3]" placeholder="기타 " ></td>
            <td><input type="text" @keypress="onlyNumber" v-model="questions.sq2_1[4]" maxlength="6" class="form-control"></td>
            <td>평</td>
        </tr>
    </table>
</div>

<br>
<p><b>SQ3) 귀사와 연암대학교는 현재 어떠한 관계를 맺고 있습니까?</b></p>

<div class="middle">
    <table class="table table-responsive ">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio" v-model="questions.sq3"  value="1">
                <div class="box4">
                    <span>1) 연암대학교 졸업생이 근무 중임  </span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.sq3" value="2">
                <div class="box4" style="width: 300px">
                    <span>2) 산학협력 협약을 맺음(현장실습, 실습학기, 취업연계 약정 등) </span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.sq3" value="3">
                <div class="box4">
                    <span>3) 관계없음)  </span>
                </div>
            </label>
        </td>
    </table>
</div>

<br>
<div v-if="questions.sq3 == '1'">
    <p><b>SQ3-1) 현재 근무 중인 연암대학교 졸업생은 무슨 계열(학과)를 졸업하였습니까?</b></p>

    <div class="middle">
        <table class="table table-responsive ">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio" v-model="questions.sq3_1"  value="1">
                    <div class="box4" style="width: 300px">
                        <span>1) 스마트원예계열(원예, 스마트팜, 환경조경, 가드닝, 플로리스트 전공) </span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.sq3_1" value="2">
                    <div class="box4" >
                        <span>2) 축산계열 </span>
                    </div>
                </label>
                <label>
                    <div class="box4 alignLeft">
                        <input type="text" v-model="questions.sq3_1_nemelt" placeholder="기타:" name="text">
                    </div>
                </label>
            </td>
        </table>
    </div>
</div>

<br>

<div v-if="questions.sq3 == '2'">
    <p><b>SQ3-2) 현재 산학협력을 맺고 있는 연암대학교 계열(학과)는 무엇입니까?</b></p>

    <div class="middle">
        <table class="table table-responsive ">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio" v-model="questions.sq3_2"  value="1">
                    <div class="box4" style="width: 250px">
                        <span>1) 스마트원예계열(원예, 스마트팜, 환경조경, 가드닝, 플로리스트 전공)     </span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.sq3_2" value="2">
                    <div class="box4" style="width: 250px">
                        <span>2) 축산계열 </span>
                    </div>
                </label>
                <label>
                    <div class="box4 alignLeft" style="width: 250px">
                        <input type="text" v-model="questions.sq3_2_nemelt" placeholder="기타:" class="form-control form-control-sm">
                    </div>
                </label>
            </td>
        </table>
    </div>
</div>

<br>
<div>
    <p class="alert alert-primary">
        ※ 연암대학교 <b><u>스마트원예학과(학사학위 전공심화(3,4학년))</u></b>는 <b><u>스마트팜에 대한 지식과 기술을 기반으로 원예, 조경, 가드닝 등 식물 생산과 관리를 전문적으로 수행할 수 있는 현장 실무형 인재를 양성하는데 목표를</u></b> 두고 있습니다.
    </p>

    <p><b>SQ4) 다음은 연암대학교의 학사학위 전공심화 과정인 스마트원예학과 참여의사를 묻는 문항입니다. </b></p>
    <p>1-1. 연암대학교 스마트원예학과에 본인 또는 귀사 직원을 참여시킬 의사가 있습니까?</p>

    <div class="middle">
        <table class="table table-responsive ">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio" v-model="questions.sq4_1_1"  value="1">
                    <div class="box4" style="width: 250px">
                        <span>1) 예 </span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.sq4_1_1" value="2">
                    <div class="box4" style="width: 250px">
                        <span>2) 아니오  </span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.sq4_1_1" value="3">
                    <div class="box4 alignLeft" style="width: 250px">
                        3) 아직 결정하지 않았음
                    </div>
                </label>
            </td>
        </table>
    </div>
</div>

<br>

<div v-if="questions.sq4_1_1 == '1' || questions.sq4_1_1 == '3'">
    <p>1-2. 스마트원예학과는 원칙적으로 주간으로 운영됩니다만, 산업체 재직자(일학습병행자)를 위한 다양한 수업 형태도 병행하고자 합니다. 다음 중 본인 또는 귀사가 가장 선호하는 수업 형태를 선택해 주십시오. (복수응답가능)</p>

    <table class="table table-bordered table-responsive center">
        <thead class="thead-default">

        <tr>
            <td>1)</td>
            <td><input type="checkbox" v-model="questions.sq4_1_2" id="sq4_1_2_1" value="1"></td>
            <td><label for="sq4_1_2_1"> 주간 강좌  </label></td>

            <td>2)</td>
            <td><input type="checkbox" v-model="questions.sq4_1_2" id="sq4_1_2_2" value="2"></td>
            <td><label for="sq4_1_2_2"> 토요일 강좌 </label></td>
        </tr>

        <tr>
            <td>3)</td>
            <td><input type="checkbox" v-model="questions.sq4_1_2" id="sq4_1_2_3" value="3"></td>
            <td><label for="sq4_1_2_3"> 비대면(온라인) 강좌 </label></td>

            <td>4)</td>
            <td><input type="checkbox" v-model="questions.sq4_1_2" id="sq4_1_2_4" value="4"></td>
            <td><label for="sq4_1_2_4"> 계절학기(하계, 동계) 강좌 </label></td>
        </tr>

        <tr>
            <td>5)</td>
            <td>기타: </td>
            <td><input type="text" v-model="questions.sq4_1_2_nemelt" class="form-control"></td>

            <td></td>
            <td></td>
            <td></td>
        </tr>

        </thead>
    </table>

</div>