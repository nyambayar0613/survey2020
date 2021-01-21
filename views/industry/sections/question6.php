
<div class="middle">
    <!-- question 6-->
    <p>
        6. 다음은 연암대학교의 <b>인재상</b>에 대한 인식 및 만족도 수준을 묻는 문항입니다.
    </p>
    <div class="card-body">
    <p>
        6.1 연암대학교의 인재상은 ‘차세대 농업 분야를 선도할 영농 기술인, 현장 실무 역량에 강한 전문 직업인, 4차 산업혁명 시대의 가치를 실천하는 융복합 교양인’ 입니다. 귀사에서 필요로 하는 인재를 육성하고 있다고 생각하십니까?
    </p>
    <table class="table table-responsive center">
        <tbody>
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio"   v-model="questions.q6_1"  value="예">
                    <div class="box4" >
                        <span><b>1)</b> 예</span>
                    </div>
                </label>

                <label>
                    <input type="radio"   v-model="questions.q6_1"  value="아니오">
                    <div class="box4">
                        <span><b>2)</b> 아니오</span>
                    </div>
                </label>

                <label>
                    <input type="radio"   v-model="questions.q6_1"  value="모름">
                    <div class="box4">
                        <span><b>3)</b> 모름</span>
                    </div>
                </label>
            </td>
        </tbody>
    </table>
        <div v-if="questions.q6_1 == '예'">
    <p>
        6.2 귀사에서 필요로 하는 인재로서 연암대학교 졸업생 또는 학생의 장점은 무엇이라고 생각하십니까?
    </p>
        <table class="table table-responsive center">
            <tbody>
                <td style="border-top: 1px solid #fff">
                    <label>
                        <input type="radio"   v-model="questions.q6_2"  value="실무 적합형 이론교육 충실">
                        <div class="box4">
                            <span><b>1)</b> 실무 적합형 이론교육 충실</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio"   v-model="questions.q6_2"  value="현장 적합형 실무능력 충실">
                        <div class="box4">
                            <span><b>2)</b> 현장 적합형 실무능력 충실</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio"  v-model="questions.q6_2"   value="자격증 보유 등의 전문성 충실">
                        <div class="box4">
                            <span><b>3)</b> 자격증 보유 등의 전문성 충실</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio"  v-model="questions.q6_2"   value="직업관, 윤리관 등의 인성 우수">
                        <div class="box4">
                            <span><b>4)</b> 직업관, 윤리관 등의 인성 우수</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio"  v-model="questions.q6_2"   value="조직 적응력 및 커뮤니케이션 능력 탁월">
                        <div class="box4">
                            <span><b>5)</b> 조직 적응력 및 커뮤니케이션 능력 탁월</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio"   v-model="questions.q6_2"  value="컴퓨터 활용 능력 탁월">
                        <div class="box4">
                            <span><b>6)</b> 컴퓨터 활용 능력 탁월</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio"   v-model="questions.q6_2"  value="창의적인 업무 처리 능력 우수">
                        <div class="box4">
                            <span><b>7)</b> 창의적인 업무 처리 능력 우수</span>
                        </div>
                    </label>
                    <label>
                        <input type="text" placeholder="기타:" v-model="questions.q6_2_nemelt"  name="text">
                    </label>
                </td>

            </tbody>
        </table>
        <br>
        </div>
    </div>

    <!-- question 7-->
    <p>
        7. 다음은 연암대학교의 졸업생 혹은 학생들의 지식 및 기술 습득에 대한 인식 및 만족도 수준을 묻는 문항입니다.
    </p>
    <div class="card-body">
    <p>
        7.1 연암대학교 졸업생 또는 학생들이 대학에서 습득한 지식과 기술이 산업현장에서 요구되는 수준에 부합한다고 생각하십니까?
    </p>
    <table class="table table-responsive center">
        <tbody>
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio"   v-model="questions.q6_3"  value="예">
                    <div class="box4" >
                        <span><b>1)</b> 예</span>
                    </div>
                </label>

                <label>
                    <input type="radio"   v-model="questions.q6_3"  value="아니오">
                    <div class="box4">
                        <span><b>2)</b> 아니오</span>
                    </div>
                </label>

                <label>
                    <input type="radio"   v-model="questions.q6_3"  value="모름">
                    <div class="box4">
                        <span><b>3)</b> 모름</span>
                    </div>
                </label>
            </td>

        </tbody>
    </table>
    <br>
        <div v-if="questions.q6_3 == '아니오'">
    <p>
        7.2 연암대학교에서 습득한 지식과 기술이 산업현장에서 요구되는 수준과 어떤 차이가 있다고 생각하십니까?
    </p>
    <table class="table table-responsive center">
        <tbody>
        <tr>
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio"   v-model="questions.q6_4"  value="너무 이론적 지식에 치우침">
                    <div class="box4">
                        <span><b>1)</b> 너무 이론적 지식에 치우침</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q6_4"   value="최신 기술 트랜드가 부족함">
                    <div class="box4">
                        <span><b>2)</b> 최신 기술 트랜드가 부족함</span>
                    </div>
                </label>
                <label>
                    <input type="radio"   v-model="questions.q6_4"  value="현장 직무 수행에 부적합함">
                    <div class="box4">
                        <span><b>3)</b> 현장 직무 수행에 부적합함</span>
                    </div>
                </label><label>
                    <input type="radio"  v-model="questions.q6_4"   value="너무 낮은 수준의 기술 교육">
                    <div class="box4">
                        <span><b>4)</b> 너무 낮은 수준의 기술 교육</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q6_4"   value="실험 및 실습이 부족함">
                    <div class="box4">
                        <span><b>5)</b> 실험 및 실습이 부족함</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q6_4"   value="컴퓨터 활용 능력 탁월">
                    <div class="box4">
                        <span><b>6)</b> 자격증 위주의 교육</span>
                    </div>
                </label>
                <label>
                    <input type="radio"   v-model="questions.q6_4"  value="창의적인 업무 처리 능력 우수">
                    <div class="box4">
                        <span><b>7)</b> 업무 처리의 기본 소양 부족</span>
                    </div>
                </label>
                <label>
                    <input type="text" placeholder="기타:" v-model="questions.q6_4_nemelt"  name="text">
                </label>
            </td>
        </tbody>
    </table>
        </div>
    </div>
</div>