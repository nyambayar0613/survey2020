<br>
<!-- Question 6.6 -->
<p>6. 다음은 <b><u>교과외 학생활동 지원에</b></u> 대한 만족도 수준을 묻는 문항입니다.</p>
<div class="middle">
    <div class="card-body">
        <p>
            1) 대학의 학생회 및 동아리 활동에 대한 지원 및 운영은 원활하게 이루어지고 있다.
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
                    <input type="radio"  v-model="questions.q6_6_1" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_1"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_1"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_1"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_1"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            2) 학과 학회 및 스터디 그룹, 체험활동 등 학생활동 지원 프로그램은 다양하게 진행되고 있다.
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
                    <input type="radio"  v-model="questions.q6_6_2" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_2"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_2"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_2"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_2"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            3) 교과외 활동에 대한 정보는 적극적으로 안내, 홍보되고 있다.
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
                    <input type="radio"  v-model="questions.q6_6_3" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_3"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_3"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_3"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td class="tb-d">
                <label>
                    <input type="radio"   v-model="questions.q6_6_3"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
    </div>
<!-- Question 6.7 -->
<p>
    7. 학생지원 활동의 효과적 성과 도출을 위해 필요한 사항이 무엇이라고 생각하십니까?
</p>
    <table class="table table-bordered" style="width: 100%">
        <tbody>
        <tr>
            <td style="padding: 5px"><input type="checkbox" v-model="questions.q6_7" id="q6_7_1" value="학생지원 활동의 홍보 강화"></td>
            <td>1)</td>
            <td><label for="q6_7_1">학생지원 활동의 홍보 강화</label></td>
            <td><input type="checkbox" v-model="questions.q6_7" id="q6_7_2" value="학생지원 활동의 체계 고도화"></td>
            <td>2)</td>
            <td><label for="q6_7_2">학생지원 활동의 체계 고도화</label></td>
        </tr>
        <tr>
            <td><input type="checkbox" v-model="questions.q6_7" id="q6_7_3" value="학생지원 활동의 선택과 집중"></td>
            <td>3)</td>
            <td><label for="q6_7_3">학생지원 활동의 선택과 집중</label></td>
            <td><input type="checkbox" v-model="questions.q6_7" id="q6_7_4" value="대학의 행재정적 지원 강화"></td>
            <td>4)</td>
            <td><label for="q6_7_4">대학의 행재정적 지원 강화</label></td>
        </tr>
        <tr>
            <td><input type="checkbox" v-model="questions.q6_7" id="q6_7_5" value="담당자의 전문성 강화"></td>
            <td>5)</td>
            <td><label for="q6_7_5">담당자의 전문성 강화</label></td>
            <td><input type="checkbox" v-model="questions.q6_7" id="q6_7_6" value="선진 학생지원 프로그램 도입"></td>
            <td>6)</td>
            <td><label for="q6_7_6">선진 학생지원 프로그램 도입</label></td>
        </tr>
        <tr>
            <td><input type="checkbox" v-model="questions.q6_7" id="q6_7_7" value="관련 행정 업무의 효율화"></td>
            <td>7)</td>
            <td><label for="q6_7_7">관련 행정 업무의 효율화</label></td>
            <td><input type="checkbox"></td>
            <td>8)</td>
            <td>
                <div class="input-group">
                    <input type="text" class="form-control" v-model="questions.q6_7_nemelt" placeholder="기타">
                </div>
            </td>
        </tr>
        </tbody>
    </table>

</div>