
<div class="middle">
    <br>
    <p>2. 다음은 <b><u>행정서비스</b></u>에 대한 만족도 수준을 묻는 문항입니다.</p>
    <div class="card-body">
        <!-- Question 3.2.1 -->
        <p>
            1) 대학의 행정 서비스는 신속하고 정확하게 운영되고 있다.
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
                    <input type="radio"  v-model="questions.q3_2_1" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_1"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_1"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_1"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_1"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>

        </table>

        <!-- Question 3.2.2 -->
        <p>
            2) 대학 행정 서비스의 업무 처리 결과를 신뢰할 수 있다.
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
                    <input type="radio"  v-model="questions.q3_2_2" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_2"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_2"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_2"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_2"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>

        </table>

        <!-- Question 3.2.3 -->
        <p>
            3) 	대학의 행정 서비스 운영 체계 및 프로세스는 효율적으로 구축, 운영되고 있다.
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
                    <input type="radio"  v-model="questions.q3_2_3" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_3"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_3"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_3"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q3_2_3"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
    </div>
    <br>

    <!-- Question 3.2.1 -->
    <p>
        2.1 대학의 행정 지원 서비스에서 개선되어야 할 부분은 무엇이라고 생각하십니까?(중복체크)
    </p>
    <table class="table table-bordered table-responsive center">
        <thead class="thead-default">
        <tr>
            <td>1)</td>
            <td><input type="checkbox" v-model="questions.q3_2_1_1" id="q3_2_1_1_1" value="신속, 정확한 행정 서비스 처리"></td>
            <td><label for="q3_2_1_1_1">신속, 정확한 행정 서비스 처리</label></td>

            <td>2)</td>
            <td><input type="checkbox" v-model="questions.q3_2_1_1" id="q3_2_1_1_2" value="행정 직원의 전문성 강화"></td>
            <td><label for="q3_2_1_1_2">행정 직원의 전문성 강화</label></td>
        </tr>
        <tr>
            <td>3)</td>
            <td><input type="checkbox" v-model="questions.q3_2_1_1" id="q3_2_1_1_3" value="행정 업무 협력 체계 강화"></td>
            <td><label for="q3_2_1_1_3">행정 업무 협력 체계 강화</label></td>

            <td>4)</td>
            <td><input type="checkbox" v-model="questions.q3_2_1_1" id="q3_2_1_1_4" value="행정 업무 프로세스 효율화"></td>
            <td><label for="q3_2_1_1_4">행정 업무 프로세스 효율화</label></td>
        </tr>
        <tr>
            <td>5)</td>
            <td><input type="checkbox" v-model="questions.q3_2_1_1" id="q3_2_1_1_5" value="명확한 행정 업무 분장"></td>
            <td><label for="q3_2_1_1_5">명확한 행정 업무 분장</label></td>

            <td>6)</td>
            <td><input type="checkbox" v-model="questions.q3_2_1_1" id="q3_2_1_1_6" value="행정 업무 처리 결과 피드백"></td>
            <td><label for="q3_2_1_1_6">행정 업무 처리 결과 피드백</label></td>
        </tr>
        <tr>
            <td>7)</td>
            <td><input type="checkbox" v-model="questions.q3_2_1_1" id="q3_2_1_1_7" value="행정 업무 처리의 정시성 강화"></td>
            <td><label for="q3_2_1_1_7">행정 업무 처리의 정시성 강화</label></td>

            <td>8)</td>
            <td>기타: </td>
            <td><input type="text" v-model="questions.q3_2_1_other" class="form-control"></td>
        </tr>
        </thead>
    </table>

</div>

