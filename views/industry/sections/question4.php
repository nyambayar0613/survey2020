<style>
    input[type="checkbox"][readonly] {
        pointer-events: none;
    }
</style>
    <!-- question 2-->

    <p>
        2. 연암대학교 학생 및 졸업생들이 귀사에서 담당하고 있는 업무를 고려할 때, 보다 <b>보완이 필요한 교육과정(커리큘럼)</b>은 어떤 것인지 <b>3가지만</b> 응답해 주십시오. <b>(보기란에 제시된 번호 중 해당하는 번호 앞에 체크(√)를 해주시면 됩니다.)</b>
    </p>
    <br>
    <div class="middle">

        <table class="table table-bordered table-responsive center">
            <thead class="thead-default">
            <tr>
                <td>1)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="전공분야 전문지식" class="survey4_1"  id="survey4_1_1"></td>
                <td><label for="survey4_1_1"> 전공분야 전문지식</label></td>

                <td>2)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="자기관리 및 개발능력" class="survey4_1" id="survey4_1_2"></td>
                <td><label for="survey4_1_2"> 자기관리 및 개발능력</label></td>
            </tr>

            <tr>
                <td>3)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="의사소통능력" class="survey4_1" id="survey4_1_3"></td>
                <td><label for="survey4_1_3"> 의사소통능력</label></td>

                <td>4)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="수리활용능력" class="survey4_1" id="survey4_1_4"></td>
                <td><label for="survey4_1_4"> 수리활용능력</label></td>
            </tr>

            <tr>
                <td>5)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="정보활용능력" class="survey4_1" id="survey4_1_5"></td>
                <td><label for="survey4_1_5"> 정보활용능력</label></td>

                <td>6)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="문제해결능력" class="survey4_1" id="survey4_1_6"></td>
                <td><label for="survey4_1_6"> 문제해결능력</label></td>
            </tr>

            <tr>
                <td>7)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="자원관리능력" class="survey4_1" id="survey4_1_7"></td>
                <td><label for="survey4_1_7"> 자원관리능력</label></td>

                <td>8)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="기술활용능력" class="survey4_1" id="survey4_1_8"></td>
                <td><label for="survey4_1_8"> 기술활용능력</label></td>
            </tr>

            <tr>
                <td>9)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="대인관계능력" class="survey4_1" id="survey4_1_9"></td>
                <td><label for="survey4_1_9"> 대인관계능력</label></td>

                <td>10)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="문화이해능력" class="survey4_1" id="survey4_1_10"></td>
                <td><label for="survey4_1_10"> 문화이해능력</label></td>

            </tr>

            <tr>
                <td>11)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="조직이해능력" class="survey4_1" id="survey4_1_11"></td>
                <td><label for="survey4_1_11"> 조직이해능력</label></td>

                <td>12)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="변화관리능력" class="survey4_1" id="survey4_1_12"></td>
                <td><label for="survey4_1_12"> 변화관리능력</label></td>
            </tr>

            <tr>
                <td>13)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="문서 이해 및 작성 능력" class="survey4_1" id="survey4_1_13"></td>
                <td><label for="survey4_1_13"> 문서 이해 및 작성 능력</label></td>

                <td>14)</td>
                <td><input type="checkbox" v-model="questions.q4_1" value="외국어구사능력" class="survey4_1" id="survey4_1_14"></td>
                <td><label for="survey4_1_14"> 외국어구사능력</label></td>

            </tr>

            <tr>
                <td>15)</td>
                <td><input type="checkbox" v-model="questions.q4_1" id="survey4_1_15" value="창의적 문제해결능력" class="survey4_1"></td>
                <td><label for="survey4_1_15"> 창의적 문제해결능력</label></td>

                <td>-</td>
                <td>기타: </td>
                <td><input type="text" v-model="questions.q4_1_nemelt" class="form-control"></td>
            </tr>


            </thead>
        </table>

        <br>


        <!-- question 3-->
        <p>3. 다음은 귀사가 연암대학교의 산학협력 업무 요청 및 교육활동 시 그 수준에 대한 만족도를 묻는 문항입니다.
            귀하의 생각과 가장 가까운 번호를 골라 V표를 해주시기 바랍니다. </p>


            <div class="card-body">
                <p>3.1 산학협력활동</p>
                <p>
                    1) 산학협력 활성화를 위해 진행되는 정책은 원활하게 이루어지고 있다.
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
                            <input type="radio"  v-model="questions.q4_5" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_5"  value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_5"  value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_5"  value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_5"  value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                    </tbody>
                </table>

                <p>
                    2) 산학협력 활동이 회사의 요구와 기대 수준에 부합하고 있다.
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
                            <input type="radio"  v-model="questions.q4_6" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_6"  value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_6"  value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_6"  value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_6"  value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                    </tbody>
                </table>

                <p>
                    3) 산학협력 활동이 회사와 대학의 인적, 물적 교류에 큰 도움이 되고 있다
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
                            <input type="radio"  v-model="questions.q4_7" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_7"  value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_7"  value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_7"  value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_7"  value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                    </tbody>
                </table>

                <p>
                    4) 산학협력 활동을 지속적으로 계속할 의향이 있다
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
                            <input type="radio"  v-model="questions.q4_8" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_8"  value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_8"  value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_8"  value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q4_8"  value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                    </tbody>
                </table>
            </div>

            <div class="card-body">
                <p>
                    3.2 취업지원 및 현장실습
                </p>
                <p>
                1) 연암대학교의 현장 실습에 대한 지원 및 운영은 잘 이루어지고 있다.
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
                        <input type="radio"  v-model="questions.q4_9" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_9"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_9"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_9"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_9"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>
            </table>

            <p>
                2) 귀사에 참여한 현장실습생들의 업무관련 전공지식 및 수준에 만족한다.
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
                        <input type="radio"  v-model="questions.q4_10" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_10"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_10"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_10"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_10"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>
            </table>

            <p>
                3) 연암대학교 실습생, 졸업생이 타 대학 출신의 실습생보다 우수하다.
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
                        <input type="radio"  v-model="questions.q4_11" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_11"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_11"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_11"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_11"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>
            </table>

            <p>
                4) 귀사에 파견된 현장실습학생들의 기간 종료 후 업무 수행능력이 향상되었다.
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
                        <input type="radio"  v-model="questions.q4_12" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_12"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_12"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_12"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q4_12"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>
            </table>
            </div>
    </div>
