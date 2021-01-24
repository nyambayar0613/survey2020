<p class="alert alert-primary">
    ※ 귀사 및 귀하의 기본 정보에 대한 사항입니다. 본 질문은 통계적 분류 및 분석을 위하여 이용되는 문항이며,<br>
    <b>개별적인 정보는 통계법에 의하여 비밀이 보장되며 개별적으로 사용되지 않습니다.</b>
</p>
<div class="middle">
    <table class="table table-bordered table-responsive">
        <colspan>
            <col width="18%" style="background-color: #ddd">
            <col width="82%">
        </colspan>
        <!--<tr>
            <td>응답자  인적사항</td>
            <td><input type="text" name="text" v-model="questions.q1_1" class="form-control"></td>
        </tr>-->
        <tr>
            <td>회사소재지</td>
            <td><input type="text" v-model="questions.q5_1" class="form-control" placeholder="ex) 천안, 서울, 경기, 평택 등" ></td>
        </tr>
        <tr>
            <td>직 급 </td>
            <td>
                <label>
                    <input type="radio" v-model="questions.q5_2"  value="사원 이하">
                    <div class="box4">
                        <span><b>1)</b> 사원 이하</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_2" value="대리급">
                    <div class="box4">
                        <span><b>2)</b> 대리급</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_2" value="과장급">
                    <div class="box4">
                        <span><b>3)</b> 과장급</span>
                    </div>
                </label>
                <br>
                <label>
                    <input type="radio"  v-model="questions.q5_2" value="차장급">
                    <div class="box4">
                        <span><b>4)</b> 차장급</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_2" value="부장급">
                    <div class="box4">
                        <span><b>5)</b> 부장급</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_2" value="임원급">
                    <div class="box4">
                        <span><b>6)</b> 임원급</span>
                    </div>
                </label>
            </td>
        </tr>
        <tr>
            <td>성별 </td>
            <td>
                <label>
                    <input type="radio" v-model="questions.q5_3"  value="남성">
                    <div class="box4">
                        <span><b>1)</b> 남성</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_3" value="여성">
                    <div class="box4">
                        <span><b>2)</b> 여성</span>
                    </div>
                </label>
            </td>
        </tr>
        <tr align="center">
            <td>연 령</td>
            <td style="vertical-align:middle;">
                <label>
                    <input type="radio"  v-model="questions.q5_4" value="20대">
                    <div class="box4">
                        <span><b>1)</b> 20대</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q5_4"  value="30대">
                    <div class="box4">
                        <span><b>2)</b> 30대</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_4" value="40대">
                    <div class="box4">
                        <span><b>3)</b> 40대</span>
                    </div>
                </label>
                <br>
                <label>
                    <input type="radio"  v-model="questions.q5_4" value="50대">
                    <div class="box4">
                        <span><b>4)</b> 50대</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_4" value="60대">
                    <div class="box4">
                        <span><b>5)</b> 60대</span>
                    </div>
                </label>
            </td>
        </tr>
        <tr>
            <td>업 종 </td>
            <td>
                <label>
                    <input type="radio" v-model="questions.q5_5"  value="농업/임업/어업/광업">
                    <div class="box4">
                        <span><b>1)</b> 농업/임업/어업/광업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="제조업">
                    <div class="box4">
                        <span><b>2)</b> 제조업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="전기, 가스 및 수도사업">
                    <div class="box4">
                        <span><b>3)</b> 전기, 가스 및 수도사업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="건설업">
                    <div class="box4">
                        <span><b>4)</b> 건설업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="도매 및 소매업">
                    <div class="box4">
                        <span><b>5)</b> 도매 및 소매업 </span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="숙박 및 음식점업">
                    <div class="box4">
                        <span><b>6)</b> 숙박 및 음식점업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="운수업">
                    <div class="box4">
                        <span><b>7)</b> 운수업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="출판/영상, 방송통신 및 정보서비스(IT)업">
                    <div class="box4">
                        <span><b>8)</b> 출판/영상, 방송통신 및 정보서비스(IT)업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="금융 및 보험업">
                    <div class="box4">
                        <span><b>9)</b> 금융 및 보험업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="부동산 및 임대업">
                    <div class="box4">
                        <span><b>10)</b> 부동산 및 임대업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="사업서비스업(여행사, 경비업체 등)">
                    <div class="box4">
                        <span><b>11)</b> 사업서비스업(여행사, 경비업체 등)</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="공공행정, 국방, 사회보장">
                    <div class="box4">
                        <span><b>12)</b> 공공행정, 국방, 사회보장</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="교육 서비스업">
                    <div class="box4">
                        <span><b>13)</b> 교육 서비스업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="보건(의료) 및 사회복지(시설)사업">
                    <div class="box4">
                        <span><b>14)</b> 보건(의료) 및 사회복지(시설)사업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="예술, 스포츠 및 여가관련">
                    <div class="box4">
                        <span><b>15)</b> 예술, 스포츠 및 여가관련</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_5" value="개인 서비스업(미용관련업 포함)">
                    <div class="box4">
                        <span><b>16)</b> 개인 서비스업(미용관련업 포함)</span>
                    </div>
                </label>
                <label>
                    <input type="text" v-model="questions.q5_5_nemelt" placeholder="기타(_______)" style="width: 150px;">
                </label>
            </td>
        </tr>
        <tr>
            <td>규 모</td>
            <td style="display: flex; flex-direction: column">
                <label>
                    <input type="radio" v-model="questions.q5_6"  value="소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)">
                    <div class="box4" style="width: 600px">
                        <span><b>1)</b> 소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_6" value="중기업 (광업, 제조업, 건설업, 운송업 종업원 50~299인, 그외 업종 10~299인)">
                    <div class="box4" style="width: 600px">
                        <span><b>2)</b> 중기업 (광업, 제조업, 건설업, 운송업 종업원 50~299인, 그외 업종 10~299인)</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_6" value="중견기업 (종업원 >300인, 혹은 매출 >400억, 상호 출자 제한 기업 집단 제외)">
                    <div class="box4" style="width: 600px">
                        <span><b>3)</b> 중견기업 (종업원 >300인, 혹은 매출 >400억, 상호 출자 제한 기업 집단 제외)</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_6" value="대기업 (종업원 >1000인, 혹은 매출 >1500억, 상호 출자 제한 기업 집단)">
                    <div class="box4" style="width: 600px">
                        <span><b>4)</b> 대기업 (종업원 >1000인, 혹은 매출 >1500억, 상호 출자 제한 기업 집단)</span>
                    </div>
                </label>
            </td>
        </tr>
        <tr>
            <td>협약학과(전공)</td>
            <td >
                <label>
                    <input type="radio" v-model="questions.q5_7"  value="스마트팜">
                    <div class="box4">
                        <span><b>1)</b> 스마트팜</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_7" value="스마트식물관리">
                    <div class="box4">
                        <span><b>2)</b> 스마트식물관리</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_7" value="스마트축산">
                    <div class="box4">
                        <span><b>3)</b> 스마트축산</span>
                    </div>
                </label>
                <br>
                <label>
                    <input type="radio"  v-model="questions.q5_7" value="반려동물산업">
                    <div class="box4">
                        <span><b>4)</b> 반려동물산업</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_7" value="수의간호복지">
                    <div class="box4">
                        <span><b>5)</b> 수의간호복지</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q5_7" value="바이오동물산업">
                    <div class="box4">
                        <span><b>6)</b> 바이오동물산업</span>
                    </div>
                </label>
            </td>
        </tr>
    </table>
    </div>
</div>

