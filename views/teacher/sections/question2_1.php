<p class="alert alert-primary">
    다음은 우리대학의 <b><u>교육에 대한 만족도 수준</b></u>을 묻는 문항입니다. 귀하의 생각과 가장 가까운 번호를 골라 1에서 5까지의 숫자
    중에서 선택해 주시기 바랍니다.
</p>
<br>
<!-- Question 2.1 -->
<p>1. 다음은 <b><u>교육과정</b></u>에 대한 만족도 수준을 묻는 문항입니다.</p>

<div class="middle">
    <div class="card-body">
    <p>
        1) 대학의 교육과정이 대학의 사명 및 교육목표와 적절하게 부합되어 있다.
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
        <td>
            <label>
                <input type="radio"  v-model="questions.q2_1_1" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q2_1_1"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_1"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q2_1_1"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q2_1_1"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>

    <p>
        2) 교육과정은 학과의 인재양성목표와 연계되어 개발되어 있다.
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
        <td >
            <label>
                <input type="radio"  v-model="questions.q2_1_2" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_2"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_2"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_2"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_2"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    <p>
        3) 대학의 교육과정은 사회적 변화와 기술 트랜드를 적절하게 반영하고 있다.
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
        <td >
            <label>
                <input type="radio"  v-model="questions.q2_1_3" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_3"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_3"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_3"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_3"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>

    <p>
        4) 대학의 교육과정은 이론과 실험 실습이 적절한 비율로 구성되어 있다.
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
        <td >
            <label>
                <input type="radio"  v-model="questions.q2_1_4" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_4"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_4"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_4"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_4"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>

    <p>
        5) 학생들의 직무능력 및 학업 성취도를 볼 때 교육과정이 적절하다고 판단한다.
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
        <td >
            <label>
                <input type="radio"  v-model="questions.q2_1_5" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_5"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_5"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_5"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1_5"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    </div>
    <!-- Question 2.1.1.1 -->
<br>
    <p>1.1 대학의  <b><u>교육과정에서 부족하다고 생각되는</b></u> 부분은 무엇입니까? (중복체크)</p>

    <table class="table table-bordered" style="width: 100%">
        <tbody>
            <tr>
                <td style="padding: 5px"><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_1" value="전공 이론 교육의 부족"></td>
                <td>1)</td>
                <td><label for="q2_1_1_1">전공 이론 교육의 부족</label></td>
                <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_2" value="최신기술 교육의 부족"></td>
                <td>2)</td>
                <td><label for="q2_1_1_2">최신기술 교육의 부족</label></span></td>
            </tr>
            <tr>
                <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_3" value="자격증 시험 중심의 교육운영" ></td>
                <td>3)</td>
                <td><label for="q2_1_1_3">자격증 시험 중심의 교육운영</label></td>
                <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_4" value="실험 및 실습 교육의 부족"></td>
                <td>4)</td>
                <td><label for="q2_1_1_4">실험 및 실습 교육의 부족</label></td>
            </tr>
            <tr>
                <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_5" value="현장직무와의 연계성 부족"></td>
                <td>5)</td>
                <td><label for="q2_1_1_5">현장직무와의 연계성 부족</label></td>
                <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_6" value="매우 낮은 수준의 교육과정"></td>
                <td>6)</td>
                <td><label for="q2_1_1_6">낮은 수준의 교육과정</label></td>
            </tr>
            <tr>
                <td><input type="checkbox" v-model="questions.q2_1_1_1" id="q2_1_1_7" value="적절하지 않은 평가방법"></td>
                <td>7)</td>
                <td><label for="q2_1_1_7">적절하지 않은 평가방법</label></td>
                <td><input type="checkbox"></td>
                <td>8)</td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control" v-model="questions.q2_1_nemelt" placeholder="기타">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</div>