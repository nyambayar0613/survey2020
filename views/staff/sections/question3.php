<p class="alert alert-primary">
    다음은 우리대학의 <b><u>직원평가 및 지원과 관련된 만족도 수준</b></u>을 묻는 문항입니다. 귀하의 생각과 가장 가까운 번호를 골라 1에서
    5까지의 숫자 중에서 선택해 주시기 바랍니다.
</p>
<br>
<!-- Question 3.1 -->
<p>1. 다음은 <b><u>직원평가</b></u>에 대한 만족도 수준을 묻는 문항입니다.</p>
<div class="middle">
        <div class="card-body">
            <!-- Question 3.1.1 -->
            <p>
                1) 직원 인사 규정 및 절차가 마련되어 있고 적절히 시행되고 있다.
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
                        <input type="radio"  v-model="questions.q3_1_1" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_1"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_1"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_1"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_1"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>

            <!-- Question 3.1.2 -->
            <p>
                2) 직원의 인사 규정은 주기적으로 검토되어 개선하고 있다.
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
                        <input type="radio"  v-model="questions.q3_1_2" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_2"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_2"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_2"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_2"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>

            <!-- Question 3.1.3 -->
            <p>
                3) 	다른 전문대학과 비교하여, 현재 급여 수준에 만족한다.
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
                        <input type="radio"  v-model="questions.q3_1_3" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_3"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_3"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_3"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_3"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>

            <!-- Question 3.1.4 -->
            <p>
                4) 직원의 복지는 관련 규정 및 지침에 따라 적절하게 운영되고 있다.
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
                        <input type="radio"  v-model="questions.q3_1_4" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_4"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_4"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_4"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_1_4"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>

        </div>
</div>

