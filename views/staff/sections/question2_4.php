
<div class="middle">
        <!-- Question 4 -->
    <br>
        <p>4. 다음은 <b><u>교육성과에</b></u> 대한 만족도 수준을 묻는 문항입니다.</p>
        <div class="card-body">
            <!-- Question 4.1 -->
            <p>
                1) 대학 교육 경쟁력 강화를 위한 행재정적 지원을 충분히 하고 있다.
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
                        <input type="radio"  v-model="questions.q2_4_1" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_4_1"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_4_1"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_4_1"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q2_4_1"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>
            </table>
        </div>
        <br>


        <!-- Question 4.1 -->
        <p>4.1. 연암대학교 <b><u>교육과정에서 강화되어야 할 부분은 </b></u>무엇이라고 생각하십니까? (중복체크)</p>
        <table class="table table-bordered table-responsive center">
            <thead class="thead-default">
            <tr>
                <td>1)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1"  id="q2_4_1_1_1" value="실무 적합형 이론"></td>
                <td><label for="q2_4_1_1_1">실무 적합형 이론</label></td>

                <td>2)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_2" value="현장 적합형 실무능력"></td>
                <td><label for="q2_4_1_1_2">현장 적합형 실무능력</label></td>
            </tr>

            <tr>
                <td>3)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_3" value="자격증 보유 등의 전문성"></td>
                <td><label for="q2_4_1_1_3">자격증 보유 등의 전문성</label></td>

                <td>4)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_4" value="직업관, 윤리관 등의 인성"></td>
                <td><label for="q2_4_1_1_4">직업관, 윤리관 등의 인성</label></td>
            </tr>

            <tr>
                <td>5)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_5" value="체계적인 실험 및 실습"></td>
                <td><label for="q2_4_1_1_5">체계적인 실험 및 실습</label></td>

                <td>6)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_6" value="조직 적응력 및 커뮤니케이션 능력"></td>
                <td><label for="q2_4_1_1_6">조직 적응력 및 커뮤니케이션 능력</label></td>
            </tr>

            <tr>
                <td>7)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_7" value="컴퓨터 활용 능력"></td>
                <td><label for="q2_4_1_1_7">컴퓨터 활용 능력</label></td>

                <td>8)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_8" value="창의적인 업무 처리 능력"></td>
                <td><label for="q2_4_1_1_8">창의적인 업무 처리 능력</label></td>
            </tr>
            <tr>
                <td>9)</td>
                <td><input type="checkbox" v-model="questions.q2_4_1_1" id="q2_4_1_1_9" value="최신 기술 트랜드"></td>
                <td><label for="q2_4_1_1_9">최신 기술 트랜드</label></td>
                <td>10)</td>
                <td>기타: </td>
                <td><input type="text" v-model="questions.q2_4_1_other" class="form-control"></td>
            </tr>
            </thead>
        </table>

        <!-- Question 4.2 -->
        <p>4.2. 연암대학교 <b><u>졸업생 또는 학생의 장점은 </b></u>무엇이라고 생각하십니까? (중복체크)</p>
        <table class="table table-bordered table-responsive center">
            <thead class="thead-default">
            <tr>
                <td>1)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_1" value="실무 적합형 이론"></td>
                <td><label for="q2_4_2_1_1">실무 적합형 이론</label></td>

                <td>2)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_2" value="현장 적합형 실무능력"></td>
                <td><label for="q2_4_2_1_2">현장 적합형 실무능력</label></td>
            </tr>
            <tr>
                <td>3)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_3" value="자격증 보유 등의 전문성"></td>
                <td><label for="q2_4_2_1_3">자격증 보유 등의 전문성</label></td>

                <td>4)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_4" value="직업관, 윤리관 등의 인성"></td>
                <td><label for="q2_4_2_1_4">직업관, 윤리관 등의 인성</label></td>
            </tr>
            <tr>
                <td>5)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_5" value="체계적인 실험 및 실습"></td>
                <td><label for="q2_4_2_1_5">체계적인 실험 및 실습</label></td>

                <td>6)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_6" value="조직 적응력 및 커뮤니케이션 능력"></td>
                <td><label for="q2_4_2_1_6">조직 적응력 및 커뮤니케이션 능력</label></td>
            </tr>
            <tr>
                <td>7)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_7" value="컴퓨터 활용 능력"></td>
                <td><label for="q2_4_2_1_7">컴퓨터 활용 능력</label></td>

                <td>8)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_8" value="창의적인 업무 처리 능력"></td>
                <td><label for="q2_4_2_1_8">창의적인 업무 처리 능력</label></td>
            </tr>
            <tr>
                <td>9)</td>
                <td><input type="checkbox" v-model="questions.q2_4_2_1" id="q2_4_2_1_9" value="최신 기술 트랜드"></td>
                <td><label for="q2_4_2_1_9">최신 기술 트랜드</label></td>
                <td>10)</td>
                <td>기타: </td>
                <td><input type="text" v-model="questions.q2_4_2_other" class="form-control"></td>
            </tr>
            </thead>
        </table>
</div>