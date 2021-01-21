<!-- Question 8 -->
<p class="alert alert-primary">
    다음은 우리대학의 <b><u>코로나 19로 인한 비대면 원격 수업 및 교육환경 만족도 수준을</u></b> 묻는 문항입니다. 귀하의 생각과 가장 가까운
    번호를 골라 1에서 5까지의 숫자 중에서 선택해 주시기 바랍니다.
</p>
<br>

<p>2. 다음은 <b><u>코로나 19로 인한 교육 환경에</u></b> 대한 만족도 수준을 묻는 문항입니다.</p>

<div class="middle"  >
    <div class="card-body">
        <p>1) 비대면 수업 관련 대학 수업지원(디지털 기기, 플랫폼 선정)은 적절하게 지원되었다고 생각한다</p>
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
                    <input type="radio"  v-model="questions.qc9_2_1" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_1"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_1"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_1"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_1"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>

        <p>2) 비대면 수업 관리 및 학생 출결관리만을 위한 중복 점검 관리 체계를 구축, 운영하고 있다.</p>
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
                    <input type="radio"  v-model="questions.qc9_2_2" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_2"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_2"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_2"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_2"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>

        <p>3) 비대면 수업을 통해 추가적인 학습이 이루어질 수 있는 환경(다시보기 등)은 충분히 제공되었다.</p>
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
                    <input type="radio"  v-model="questions.qc9_2_3" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_3"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_3"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_3"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_3"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>

        <p>4) 비대면 수업 여건(인터넷 사용 환경 및 인터넷 속도 등)은 장애 없이 원활히 이루어졌다.</p>
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
                    <input type="radio"  v-model="questions.qc9_2_4" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_4"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_4"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_4"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_4"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>

        <p>5) 비대면 수업 중이나 비대면 수업 이후 추가적인 질문이나 궁금증 해소를 위한 다양한 여건이 제공되었다.</p>
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
                    <input type="radio"  v-model="questions.qc9_2_5" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_5"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_5"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_5"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_2_5"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
    </div>
</div>

<br>

<div class="middle">

<p>3. 다음은 <b><u>코로나 19로 인한 방역 대응에</u></b> 대한 만족도 수준을 묻는 문항입니다.</p>
    <div class="card-body">
        <p>1) 교육시설 이용 시 코로나19 안전수칙(체온체크, 마스크착용권유 등)을 적절하게 이행하고 있다.</p>
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
                    <input type="radio"  v-model="questions.qc9_3_1" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_1"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_1"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_1"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_1"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>

        <p>2) 편의시설 이용 시 코로나19 안전수칙(체온체크, 마스크착용권유 등)을 적절하게 이행하고 있다.</p>
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
                    <input type="radio"  v-model="questions.qc9_3_2" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_2"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_2"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_2"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_2"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>

        <p>3) 도서관 이용 시 코로나19 안전수칙(방역, 체온체크 ,마스크착용권유 등)을 적절하게 이행하고 있다.</p>
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
                    <input type="radio"  v-model="questions.qc9_3_3" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_3"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_3"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_3"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_3"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>

        <p>4) 연암대학교는 코로나19 사태에 대응을 잘하고 있다고 생각한다.</p>
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
                    <input type="radio"  v-model="questions.qc9_3_4" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_4"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_4"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_4"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.qc9_3_4"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
    </div>
</div>