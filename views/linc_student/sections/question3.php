<p class="alert alert-primary">
    다음은 <b><u>LINC+사업 협력도의 만족도 수준</b></u>을 묻는 문항입니다. 귀하의 생각과 가장 가까운 번호를 골라 1에서 5까지의 숫자 중에서
    선택해 주시기 바랍니다.
</p>
<br>
<!-- Question 3 -->

<div class="middle">
    <div class="card-body">
    <p>
        1) 대학은 산업체와 함께 학생 선발과정을 적절하게 운영했다.
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
                <input type="radio"  v-model="questions.q3_1" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q3_1"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_1"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q3_1"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q3_1"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    <p>
        2) LINC+사업단은 현재 협약기업체의 요구를 반영한 사회맞춤형 교육프로그램을 수행하고 있다.
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
                <input type="radio"  v-model="questions.q3_2" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_2"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_2"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_2"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_2"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    <p>
        3) LINC+사업 프로그램 운영 시 산업체 인사 강의 확대, 현장실습 등 현장중심교육 강화, 산업체 인사 멘토링 등 산업체의 교육 참여가 강화 되었다.
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
                <input type="radio"  v-model="questions.q3_3" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_3"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_3"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_3"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_3"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>

    <p>
        4) LINC+사업 프로그램을 알리기 위한 소속 대학의 노력 및 홍보 등은 적절하다.
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
                <input type="radio"  v-model="questions.q3_4" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_4"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_4"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_4"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q3_4"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    </div>
</div>