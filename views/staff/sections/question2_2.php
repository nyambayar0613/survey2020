
<!-- Question 2.1 -->
<br>
<p>2. 다음은 <b><u>교수학습지원에</b></u> 대한 만족도 수준을 묻는 문항입니다.</p>
<div class="middle">

            <div class="card-body">
                <p>
                    1) 다양한 교수학습법을 적용, 운영하기 위해 교수들은 노력하고 있다.
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
                            <input type="radio"  v-model="questions.q2_2_1" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q2_2_1"  value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q2_2_1"  value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q2_2_1"  value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td class="tb-d">
                        <label>
                            <input type="radio"   v-model="questions.q2_2_1"  value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                    </tbody>
                </table>
            </div>
            <br>
            <!-- Question 2.1 -->
            <p>2.1. 교수학습지원의 <b><u>다양성과 적절성 강화를</b></u> 위해 필요한 부분은 무엇인가? (중복체크)</p>
            <table class="table table-bordered table-responsive center">
                <thead class="thead-default">
                <tr>
                    <td>1)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_1" value="다양한 교수법의 도입"></td>
                    <td><label for="q2_2_1_1_1">다양한 교수법의 도입</label></td>

                    <td>2)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_2" value="교육 교재 및 교보재 개선"></td>
                    <td><label for="q2_2_1_1_2">교육 교재 및 교보재 개선</label></td>
                </tr>

                <tr>
                    <td>3)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_3" value="학생 참여 수업 확대"></td>
                    <td><label for="q2_2_1_1_3">학생 참여 수업 확대</label></td>

                    <td>4)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_4" value="실험실습 비중의 확대"></td>
                    <td><label for="q2_2_1_1_4">실험실습 비중의 확대</label></td>
                </tr>

                <tr>
                    <td>5)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_5" value="전공분야 최신 기술의 신속 도입"></td>
                    <td><label for="q2_2_1_1_5">전공분야 최신 기술의 신속 도입</label></td>

                    <td>6)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_6" value="다양한 학생 평가방법 도입"></td>
                    <td><label for="q2_2_1_1_6">다양한 학생 평가방법 도입</label></td>
                </tr>

                <tr>
                    <td>7)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_7" value="융복합 교육방법의 도입"></td>
                    <td><label for="q2_2_1_1_7">융복합 교육방법의 도입</label></td>

                    <td>8)</td>
                    <td><input type="checkbox" v-model="questions.q2_2_1_1" id="q2_2_1_1_8" value="다양한 교육 매체의 활용"></td>
                    <td><label for="q2_2_1_1_8">다양한 교육 매체의 활용</label></td>
                </tr>
                <tr>
                    <td>9)</td>
                    <td>기타: </td>
                    <td><input type="text" v-model="questions.q2_2_1_other" class="form-control"></td>
                </tr>
                </thead>
            </table>
        </div>
