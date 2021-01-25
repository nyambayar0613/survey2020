<p class="alert alert-primary">
    다음은 <b><u>LINC+사업프로그램 전·후 만족도 수준</b></u>을 묻는 문항입니다. 귀하의 생각과 가장 가까운 번호를 골라 1에서 5까지의
    숫자 중에서 선택해 주시기 바랍니다.
</p>
<br>
<!-- Question 3 -->

<div class="middle">
    <div class="card-body">
        <p>
            1) LINC+사업 프로그램 참여 협약 당시 기대수준.
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
                    <input type="radio"  v-model="questions.q4_1" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td>
                <label>
                    <input type="radio"   v-model="questions.q4_1"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td >
                <label>
                    <input type="radio"   v-model="questions.q4_1"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td>
                <label>
                    <input type="radio"   v-model="questions.q4_1"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td>
                <label>
                    <input type="radio"   v-model="questions.q4_1"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p>
            2) LINC+사업 프로그램 참여 이후 현재 만족도.
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
                    <input type="radio"  v-model="questions.q4_2" value="1" />
                    <div class=" box">
                        <span>1</span>
                    </div>
                </label>
            </td>
            <td >
                <label>
                    <input type="radio"   v-model="questions.q4_2"  value="2" />
                    <div class=" box">
                        <span>2</span>
                    </div>
                </label>
            </td>
            <td >
                <label>
                    <input type="radio"   v-model="questions.q4_2"  value="3" />
                    <div class=" box">
                        <span>3</span>
                    </div>
                </label>
            </td>
            <td >
                <label>
                    <input type="radio"   v-model="questions.q4_2"  value="4" />
                    <div class=" box">
                        <span>4</span>
                    </div>
                </label>
            </td>
            <td >
                <label>
                    <input type="radio"   v-model="questions.q4_2"  value="5" />
                    <div class=" box">
                        <span>5</span>
                    </div>
                </label>
            </td>
            </tbody>
        </table>
        <p><b>SQ1.</b> 2021년 현재 협약된 약정인원을 모두 채용하지 못했다면, 그 이유는 무엇입니까?</p>
        <table class="table table-responsive">
            <td style="border-top: 1px solid #fff; ">
                <label>
                    <input type="radio" v-model="questions.q4_3" value="스마트팜" />
                    <div class=" box3">
                        <span>1) 협약된 약정인원 모두 채용</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q4_3" value="스마트식물관리" />
                    <div class=" box3" style="width: 280px">
                        <span>2) 협약된 약정인원 보다 많이 채용</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q4_3" value="스마트축산" />
                    <div class=" box3" style="width: 410px">
                        <span>3) LINC+사업의 참여 학생 지원자가 적어서 채용하지 못함 </span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q4_3" value="반려동물산업" />
                    <div class=" box3" style="width: 470px">
                        <span>4) LINC+사업 참여 학생 중 원하는 직무수행능력을 갖춘 학생 못함</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q4_3" value="수의간호복지" />
                    <div class=" box3" style="width: 310px">
                        <span>5) 회사의 경영 환경 변화로 채용이 어려움</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q4_3" value="바이오동물산업" />
                    <div class=" box3" style="width: 400px">
                        <span>6) LINC+사업 참여 학생의 자퇴 등 사업 참여를 포기함</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q4_3" value="바이오동물산업" />
                    <div class=" box3" style="width: 250px;">
                        <span>7) LINC+사업 참여 학생의 휴학</span>
                    </div>
                </label>
                <label>
                    <div class=" box3">
                        <input type="text" v-model="questions.q4_3_nemelt" placeholder="기타(_______)" style="width: 150px;">
                    </div>
                </label>
            </td>
        </table>
        <p><b>SQ2.</b> 사회맞춤형 LINC+ 사업의 발전을 위한 건의사항이나 개선사항이 있으면 자유롭게 기술해 주십시오.</p>
        <textarea class="form-control" v-model="questions.q4_4" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
</div>