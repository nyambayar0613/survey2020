

<div class="middle">
    <!-- Question 1.2 -->
    <p>
        3. 본인이 생각했을 때, 취업 후 실질적으로 실무에서 활용되는 능력 중, <b><u>대학이 학생에게 교육을 충분히 제공했는지를 </u></b>묻는 문항입니다.
    </p>
    <div class="card-body">
        <p>
            1) 전공분야 전문 지식
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_1" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_1"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_1"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_1"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_1"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            2) 자기관리 및 개발 능력 (원만한 직장생활을 지속적으로 영위할 수 있도록 스스로를 관리하며 개발하는데 필요한 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_2" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_2"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_2"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_2"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_2"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            3) 의사소통능력 (직장에서 상대방과 대화를 나누거나 의견을 교환할 때 상대방이 뜻한 바를 정확하게 파악하고 자신의 의사를 효과적으로 전달할 수 있는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_3" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_3"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_3"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_3"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_3"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            4) 수리활용능력 (주어진 과제를 수행할 때 자주 활용되는 기초적인 연산과 그래프, 표 등의 자료를 해석하여 업무에 적용하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_4" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_4"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_4"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_4"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_4"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            5) 정보활용능력 (업무수행에 필요한 정보를 수집, 관리하고, 이를 위해 컴퓨터를 활용할 수 있는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_5" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_5"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_5"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_5"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_5"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            6) 문제해결능력 (업무 수행상에 발생하는 문제점을 인식하고, 문제를 해결하기 위하여 논리적, 분석적 사고를 통해 문제 해결 전략을 신속, 정확하게 결정하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_6" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_6"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_6"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_6"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_6"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            7) 자원관리능력 (업무를 수행하는 데 필요한 시간, 예산, 물적, 인적자원을 확보하여 과제를 수행하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_7" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_7"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_7"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_7"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_7"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            8) 기술활용능력 (과제수행에 필요한 도구, 장치 및 기법 등을 선택하여 적용하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_8" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_8"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_8"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_8"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_8"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            9) 대인관계능력 (타인과 협력하여 직무를 수행하고 업무상황에서 원만한 대인관계를 유지하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_9" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_9"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_9"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_9"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_9"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            10) 문화이해능력 (자신이 속한 집단과 다른 문화를 가진 사람들에 대한 이해를 바탕으로 관계를 형성하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_10" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_10"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_10"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_10"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_10"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            11) 조직이해능력 (업무를 원활하게 수행하기 위해 조직의 체제와 경영에 대해 이해하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_11" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_11"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_11"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_11"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_11"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table><p>
            12) 변화관리능력 (조직과 업무에 몰입하여 조직 및 업무변화 상황에서도 유연하게 대처하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_12" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_12"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_12"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_12"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_12"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            13) 문서이해 및 작성능력 (업무에 필요한 문서를 확인하여 내용을 이해하고 요점을 파악하는 능력과 업무의 목적과 상황에 맞게 상대방이 이해하기 쉽도록 문서를 작성하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_13" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_13"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_13"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_13"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_13"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            14) 외국어구사능력 (글로벌 업무를 추진하기 위하여 기본적인 영어 및 기타 외국어를 듣기, 말하기, 읽기, 쓰기 등을 할 수 있는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_14" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_14"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_14"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_14"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_14"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            15) 창의적 문제해결능력 (업무 수행 상에 발생하는 문제를 해결하기 위하여 융합적, 창의적 사고를 통해 문제 해결 전략을 신속, 정확하게 결정하는 능력)
        </p>
        <table class="table table-bordered table-responsive" >
            <thead class="thead-default">
            <tr>
                <th>전혀 제공하지 않았다</th>
                <th>제공하지 않았다</th>
                <th>보통이다</th>
                <th>제공하였다</th>
                <th>충분히 제공하였다</th>
            </tr>
            </thead>
            <tbody>
            <td class="tb-d">
                <label>
                    <input type="radio"  v-model="questions.q1_3_15" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_15"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_15"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_15"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q1_3_15"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
    </div>
</div>






