<p class="alert alert-primary">
    다음은 우리대학의 <b><u>교육에 대한 만족도 수준</b></u>을 묻는 문항입니다. 귀하의 생각과 가장 가까운 번호를 골라 1에서 5까지의 숫자
    중에서 선택해 주시기 바랍니다.
</p>
<br>
<!-- Question 2.1 -->
<p>1. 다음은 <b><u>교육과정</b></u>에 대한 만족도 수준을 묻는 문항입니다.</p>
<div class="middle">
        <div class="card-body">
            <!-- Question 1.1 -->
            <p>
                1) 대학의 교육과정은 학생들의 취업이나 창업에 많은 도움이 되고 있다.
            </p>
            <table class="table table-bordered table-responsive" >
                <thead class="thead-default">
                <tr>
                    <th>전혀 그렇지 않다</th>
                    <th>그렇지 않다</th>
                    <th>보통이다</th>
                    <th>그렇다</th>
                    <th>매우 그렇다</th>
                </tr>
                </thead>
                <tbody>
                <td class="tb-d">
                    <label>
                        <input type="radio"  v-model="questions.q2_1_1" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_1"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_1"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_1"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_1"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>

            <!-- Question 1.2 -->
            <p>
                2) 대학의 교육과정은 산업 및 기술 트랜드 변화를 적극적으로 수용하여 변화하고 있다.
            </p>
            <table class="table table-bordered table-responsive" >
                <thead class="thead-default">
                <tr>
                    <th>전혀 그렇지 않다</th>
                    <th>그렇지 않다</th>
                    <th>보통이다</th>
                    <th>그렇다</th>
                    <th>매우 그렇다</th>
                </tr>
                </thead>
                <tbody>
                <td class="tb-d">
                    <label>
                        <input type="radio"  v-model="questions.q2_1_2" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_2"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_2"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_2"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_1_2"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>
        </div>
    <br>



    <!-- Question 1.1 -->

    <p>1.1 대학의 <b><u>교육과정에서 부족하다고 생각되는</b></u> 부분은 무엇입니까? (중복체크)</p>
    <table class="table table-bordered table-responsive center">
        <tbody>
        <tr>
            <td>1)</td>
            <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1_1" value="전공 이론 교육의 부족"></td>
            <td><label for="q2_1_1_1_1">전공 이론 교육의 부족</label></td>

            <td>2)</td>
            <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1_2" value="최신기술 교육의 부족"></td>
            <td><label for="q2_1_1_1_2">최신기술 교육의 부족</label></td>
        </tr>

        <tr>
            <td>3)</td>
            <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1_3" value="자격증 시험 중심의 교육운영"></td>
            <td><label for="q2_1_1_1_3">자격증 시험 중심의 교육운영</label></td>

            <td>4)</td>
            <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1_4" value="실험 및 실습 교육의 부족"></td>
            <td><label for="q2_1_1_1_4">실험 및 실습 교육의 부족</label></td>
        </tr>

        <tr>
            <td>5)</td>
            <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1_5" value="현장직무와의 연계성 부족"></td>
            <td><label for="q2_1_1_1_5">현장직무와의 연계성 부족</label></td>

            <td>6)</td>
            <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1_6" value="낮은 수준의 교육과정"></td>
            <td><label for="q2_1_1_1_6">낮은 수준의 교육과정</label></td>
        </tr>

        <tr>
            <td>7)</td>
            <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1_7" value="적절하지 않은 평가방법"></td>
            <td><label for="q2_1_1_1_7">적절하지 않은 평가방법</label></td>

            <td>8)</td>
            <td>기타: </td>
            <td><input type="text" v-model="questions.q2_1_1_other" class="form-control"></td>
        </tr>

        </tbody>
    </table>
    <br>
</div>