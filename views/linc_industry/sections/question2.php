<p class="alert alert-primary">
    다음은 <b><u>LINC+사업 밀착도의 만족도 수준</b></u>을 묻는 문항입니다. 귀하의 생각과 가장 가까운 번호를 골라 1에서 5까지의 숫자 중에서
    선택해 주시기 바랍니다.
</p>
<br>
<!-- Question 2 -->

<div class="middle">
    <div class="card-body">
    <p>
        1) 대학은 산학협력에 적합환 환경(대학 내부 교원, 협약 산업체 강사 등 인력, 시설/장비 등 인프라)을 구축, 운영하고 있다.
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
                <input type="radio"  v-model="questions.q2_1" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q2_1"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_1"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q2_1"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td>
            <label>
                <input type="radio"   v-model="questions.q2_1"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    <p>
        2) 대학의 LINC+관계자는 LINC+사업 수행을 위한 충분한 지식을 보유하고 있다.
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
                <input type="radio"  v-model="questions.q2_2" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_2"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_2"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_2"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_2"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    <p>
        3) 대학은 다양한 교육과정 운영을 위해 산업체와의 다양한 교류 및 활동을 위한 노력을 하고 있다.
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
                <input type="radio"  v-model="questions.q2_3" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_3"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_3"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_3"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_3"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>

    <p>
        4) 대학의 LINC+사업 담당자들이 학생들과 취업, 진로 관련 지속적인 지원을 하고 있다.
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
                <input type="radio"  v-model="questions.q2_4" value="1" />
                <div class=" box">
                    <span>1</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_4"  value="2" />
                <div class=" box">
                    <span>2</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_4"  value="3" />
                <div class=" box">
                    <span>3</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_4"  value="4" />
                <div class=" box">
                    <span>4</span>
                </div>
            </label>
        </td>
        <td >
            <label>
                <input type="radio"   v-model="questions.q2_4"  value="5" />
                <div class=" box">
                    <span>5</span>
                </div>
            </label>
        </td>
        </tbody>
    </table>
    </div>
</div>