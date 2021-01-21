<style>
    .form-other {
        background-color: black;
        color: black;
        margin-top: -20px;
    }
</style>
<br>
<p>
    1. 마지막으로 연암대학교가 우수한 대학으로 발전하기 위하여 개선해야 할 사항이나 건의사항 등의 의견이 있으시다면 자유롭게 적어 주시기 바랍니다.
</p>

<textarea v-model="questions.q5_0" style="height: 90px" cols="30" rows="2" class="form-control"></textarea>
<br>
<h5 style="text-align: center"><b><응답자 특성 문항></b></h5>
<br>

<p><b>SQ1.</b> 귀하의 성별은 무엇입니까?</p>
<div class="middle">
    <table class="table table-responsive" style="width: 100%">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio"v-model="questions.q5_1" value="남성" />
                    <div class="box3">
                        <span>1) 남성     </span>
                    </div>
                </label>
                <label>
                    <input type="radio"v-model="questions.q5_1" value="여성" />
                    <div class="box3">
                        <span>2) 여성      </span>
                    </div>
                </label>
            </td>
    </table>
    <br>
    <hr>
    <p><b>SQ2.</b> 현재의 취업상황은 어떻습니까?</p>
    <table class="table table-responsive">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio" v-model="questions.q5_2" value="회사(기관)에 취업" />
                    <div class=" box3">
                        <span>1) 회사(기관)에 취업</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_2" value="창업(자영업)" />
                    <div class=" box3">
                        <span>2) 창업(자영업)</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_2" value="아르바이트" />
                    <div class=" box3">
                        <span>3) 아르바이트</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_2" value="직장에 다녔으나 현재 미취업" />
                    <div class=" box3" style="width: 250px;">
                        <span>4) 직장에 다녔으나 현재 미취업</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_2" value="취업한적 없음" />
                    <div class=" box3">
                        <span>5) 취업한적 없음</span>
                    </div>
                </label>

                <label>
                    <div class=" box3">
                        <input type="text" class="" v-model="questions.q5_2_nemelt" placeholder="기타(______)" style="width: 100px">
                    </div>
                </label>
            </td>
    </table>

        <hr>
        <div v-if="questions.q5_2 == '회사(기관)에 취업' || questions.q5_2 == '창업(자영업)' || questions.q5_2 == '아르바이트' || questions.q5_2 == '직장에 다녔으나 현재 미취업' || questions.q5_2 == '취업한적 없음' || questions.q5_2_nemelt != ''">
        <p><b>SQ3.</b> 귀하가 졸업한 학과는 무엇입니까?</p>
        <table class="table table-responsive">
                <td style="border-top: 1px solid #fff">
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="스마트축산전공" />
                        <div class=" box3">
                            <span>1) 스마트축산전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="낙농한우전공" />
                        <div class=" box3">
                            <span>2) 낙농한우전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="양돈양계전공" />
                        <div class=" box3">
                            <span>3) 양돈양계전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="축산산업전공" />
                        <div class=" box3">
                            <span>4) 축산산업전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="스마트팜전공" />
                        <div class=" box3">
                            <span>5) 스마트팜전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="원예전공" />
                        <div class=" box3">
                            <span>6) 원예전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="환경조경전공" />
                        <div class=" box3">
                            <span>7) 환경조경전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="플로리스트리전공" />
                        <div class=" box3">
                            <span>8) 플로리스트리전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="가드닝전공" />
                        <div class=" box3">
                            <span>9) 가드닝전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="동물보호전공" />
                        <div class=" box3">
                            <span>10) 동물보호전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="애완동물전공" />
                        <div class=" box3">
                            <span>11) 애완동물전공</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="축산학과(전공심화)" />
                        <div class=" box3">
                            <span>12) 축산학과(전공심화)</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_3" value="스마트원예학과(전공심화) " />
                        <div class=" box3">
                            <span>13) 스마트원예학과(전공심화) </span>
                        </div>
                    </label>

                </td>
        </table>
        </div>
       <hr>
    <div v-if="questions.q5_2 == '회사(기관)에 취업' || questions.q5_2 == '창업(자영업)' || questions.q5_2 == '아르바이트' || questions.q5_2 == '직장에 다녔으나 현재 미취업' || questions.q5_2_nemelt != ''">
    <p><b>SQ4.</b> 귀하가 재직하고 있는 기관은 다음 중 어디에 해당합니까(직업이 있는 경우만 응답)?</p>
    <table class="table table-responsive">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio" v-model="questions.q5_4" value="교육기관" />
                    <div class=" box3">
                        <span>1) 교육기관</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_4" value="대기업" />
                    <div class=" box3">
                        <span>2) 대기업</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_4" value="3" />
                    <div class=" box3">
                        <span>3) 중소기업</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_4" value="자영업" />
                    <div class=" box3">
                        <span>4) 자영업</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_4" value="의료기관" />
                    <div class=" box3">
                        <span>5) 의료기관</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_4" value="일반 사무실" />
                    <div class=" box3">
                        <span>6) 일반 사무실</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_4" value="정부, 지방 자치단체, 정부 투자기관" />
                    <div class="box3" style="width: 300px;">
                        <span>7) 정부, 지방 자치단체, 정부 투자기관</span>
                    </div>
                </label>
                <label>
                    <div class=" box3">
                        <input type="text" v-model="questions.q5_4_nemelt" placeholder="기타(_______)" style="width: 100px;">
                    </div>
                </label>
            </td>
    </table>
   </div>


    <!-- Question 5.5 -->
    <div v-if="questions.q5_2 == '회사(기관)에 취업' || questions.q5_2 == '창업(자영업)' || questions.q5_2 == '아르바이트' || questions.q5_2 == '직장에 다녔으나 현재 미취업' || questions.q5_2_nemelt != ''">
        <hr>
        <p><b>SQ5.</b> 직업의 종류는 무엇입니까 (직업이 있는 경우만 응답)?</p>
        <table class="table table-responsive">
                <td style="border-top: 1px solid #fff">
                    <input type="text" class="form-control" v-model="questions.q5_5">
                    <!--<label>
                        <input type="radio" v-model="questions.q5_5" value="전문직" />
                        <div class=" box3">
                            <span>1) 전문직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="경영직" />
                        <div class=" box3">
                            <span>2) 경영직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="관리직" />
                        <div class=" box3">
                            <span>3) 관리직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="사무직" />
                        <div class=" box3">
                            <span>4) 사무직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="영업직" />
                        <div class=" box3">
                            <span>5) 영업직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="생산직" />
                        <div class=" box3">
                            <span>6) 생산직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="판매/서비스직" />
                        <div class=" box3">
                            <span>7) 판매/서비스직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="노무직" />
                        <div class=" box3">
                            <span>8) 노무직</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="자영업(개인사업)" />
                        <div class=" box3">
                            <span>9) 자영업(개인사업)</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="공무원/교원" />
                        <div class=" box3">
                            <span>10) 공무원/교원</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="농/임/축산/어업" />
                        <div class=" box3">
                            <span>11) 농/임/축산/어업</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="전업주부" />
                        <div class=" box3">
                            <span>12) 전업주부</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="학생" />
                        <div class=" box3">
                            <span>13) 학생</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_5" value="기타" />
                        <div class=" box3">
                            <span>14) 기타</span>
                        </div>
                    </label>-->
                </td>
        </table>
    </div>
    <!-- Question 5.6 -->
    <div v-if="questions.q5_2 == '회사(기관)에 취업' || questions.q5_2 == '창업(자영업)' || questions.q5_2 == '아르바이트' || questions.q5_2 == '직장에 다녔으나 현재 미취업' || questions.q5_2_nemelt != ''">
        <hr>
        <p><b>SQ6.</b> 어떤 방법으로 취업을 하셨습니까(직업이 있는 경우만 응답)?</p>
        <table class="table table-responsive">
                <td style="border-top: 1px solid #fff">
                    <label>
                        <input type="radio" v-model="questions.q5_6" value="학교/학과의 추천" />
                        <div class=" box3">
                            <span>1) 학교/학과의 추천</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_6" value="선배/친구의 추천" />
                        <div class=" box3">
                            <span>2) 선배/친구의 추천</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_6" value="공개채용(구인광고)" />
                        <div class=" box3">
                            <span>3) 공개채용(구인광고)</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_6" value="가족의 추천" />
                        <div class=" box3">
                            <span>4) 가족의 추천</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" v-model="questions.q5_6" value="교수의 추천" />
                        <div class=" box3">
                            <span>5) 교수의 추천</span>
                        </div>
                    </label>
                    <label>
                        <div class=" box3">
                            <input type="text" style="width: 150px" v-model="questions.q5_6_nemelt" placeholder="기타(__________)">
                        </div>
                    </label>
                </td>
        </table>

    </div>
</div>