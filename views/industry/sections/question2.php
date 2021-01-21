
<div class="middle">
    <!-- Question SQ 1 -->
    <p style="text-align: left">
        <b>SQ1)</b> 귀사와 연암대학교는 현재 어떠한 관계를 맺고 있습니까?
    </p>
    <table class="table table-responsive center">

            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio" v-model="questions.q2_1"  value="연암대학교 학생 근무 중">
                    <div class="box4" style="width: 220px">
                        <span>1) 연암대학교 학생 근무 중</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_1" value="산학협력을 맺음(현장실습, 실습학기, 취업연계 약정 등)">
                    <div class="box4" style="width: 300px;">
                        <span>2) 산학협력을 맺음(현장실습, 실습학기, 취업연계 약정 등)</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q2_1"  value="관계없음 (설문종료)">
                    <div class="box4">
                        <span>3) 관계없음 (설문종료)</span>
                    </div>
                </label>
            </td>
    </table>
    <!-- SQ 1-1-->
    <div v-if="questions.q2_1 == '연암대학교 학생 근무 중'">
    <p style="text-align:left">
        <b>SQ1-1) </b>현재 근무 중인 연암대학교 졸업생은 무슨 과를 졸업하였습니까? (<b> {{questions.q2_2}}</b>) 학과(전공)
        <table class="table table-responsive center">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio"  v-model="questions.q2_2" value="스마트축산전공">
                <div class="box4">
                    <span><b>1)</b> 스마트축산전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="낙농한우전공">
                <div class="box4">
                    <span><b>2)</b> 낙농한우전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="양돈양계전공">
                <div class="box4">
                    <span><b>3)</b> 양돈양계전공</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q2_2"  value="축산산업전공">
                <div class="box4">
                    <span><b>4)</b> 축산산업전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="스마트팜전공">
                <div class="box4">
                    <span><b>5)</b> 스마트팜전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="원예전공">
                <div class="box4">
                    <span><b>6)</b> 원예전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="환경조경전공">
                <div class="box4">
                    <span><b>7)</b> 환경조경전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="플로리스트리전공">
                <div class="box4">
                    <span><b>8)</b> 플로리스트리전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="가드닝전공">
                <div class="box4">
                    <span><b>9)</b> 가드닝전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="동물보호전공">
                <div class="box4">
                    <span><b>10)</b> 동물보호전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="애완동물전공">
                <div class="box4">
                    <span><b>11)</b> 애완동물전공</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="축산학과(전공심화)">
                <div class="box4">
                    <span><b>12)</b> 축산학과(전공심화)</span>
                </div>
            </label>
            <label>
                <input type="radio"  v-model="questions.q2_2" value="스마트원예학과(전공심화)">
                <div class="box4">
                    <span><b>13)</b> 스마트원예학과(전공심화)</span>
                </div>
            </label>
        </td>
        </table>
    </p>
    </div>
    <br>
    <!-- SQ 1-2-->
    <div v-if="questions.q2_1 == '산학협력을 맺음(현장실습, 실습학기, 취업연계 약정 등)'">
    <p style="text-align:left">
        <b>SQ1-2) </b>현재 산학협력을 맺고 있는 연암대학교 학과(전공)는 무엇입니까? (<b>{{questions.q2_3}}</b>) 학과(전공)
    </p>
        <table class="table table-responsive center">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="스마트축산전공">
                    <div class="box4">
                        <span><b>1)</b> 스마트축산전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="낙농한우전공">
                    <div class="box4">
                        <span><b>2)</b> 낙농한우전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="양돈양계전공">
                    <div class="box4">
                        <span><b>3)</b> 양돈양계전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q2_3"  value="축산산업전공">
                    <div class="box4">
                        <span><b>4)</b> 축산산업전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="스마트팜전공">
                    <div class="box4">
                        <span><b>5)</b> 스마트팜전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="원예전공">
                    <div class="box4">
                        <span><b>6)</b> 원예전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="환경조경전공">
                    <div class="box4">
                        <span><b>7)</b> 환경조경전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="플로리스트리전공">
                    <div class="box4">
                        <span><b>8)</b> 플로리스트리전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="가드닝전공">
                    <div class="box4">
                        <span><b>9)</b> 가드닝전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="동물보호전공">
                    <div class="box4">
                        <span><b>10)</b> 동물보호전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="애완동물전공">
                    <div class="box4">
                        <span><b>11)</b> 애완동물전공</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="축산학과(전공심화)">
                    <div class="box4">
                        <span><b>12)</b> 축산학과(전공심화)</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_3" value="스마트원예학과(전공심화)">
                    <div class="box4">
                        <span><b>13)</b> 스마트원예학과(전공심화)</span>
                    </div>
                </label>
            </td>
        </table>
    </div>

    <div v-if="questions.q2_1 == '산학협력을 맺음(현장실습, 실습학기, 취업연계 약정 등)'">
    <!-- SQ 2 -->
    <p style="text-align: left;">
        <b>SQ2) </b>귀사는 연암대학교에서 수행하는 산학협력 사업을 통해 가장 도움을 받고 싶은 것은 무엇입니까?
    </p>
    <table class="table table-bordered table-responsive">
        <tbody>
        <tr>
            <td>1)</td>
            <td><input type="checkbox" v-model="questions.q2_4" id="q2_4_1" value="인력양성"></td>
            <td><label for="q2_4_1">인력양성</label></td>

            <td>2)</td>
            <td><input type="checkbox"   v-model="questions.q2_4" id="q2_4_2" value="애로기술 해결 지원"></td>
            <td><label for="q2_4_2">애로기술 해결 지원</label></td>
        </tr>
        <tr>
            <td>3)</td>
            <td><input type="checkbox"   v-model="questions.q2_4" id="q2_4_3" value="원천기술개발"></td>
            <td><label for="q2_4_3">원천기술개발</label></td>

            <td>4)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_4" value="공용장비활용"></td>
            <td><label for="q2_4_4">공용장비활용</label></td>
        </tr>
        <tr>
            <td>5)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_5" value="고가 시험분석"></td>
            <td><label for="q2_4_5">고가 시험분석</label></td>

            <td>6)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_6" value="국내외 규격 인증 획득 지원"></td>
            <td><label for="q2_4_6">국내외 규격 인증 획득 지원</label></td>
        </tr>
        <tr>
            <td>7)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_7" value="특허출원"></td>
            <td><label for="q2_4_7">특허출원</label></td>

            <td>8)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_8" value="마케팅"></td>
            <td><label for="q2_4_8">마케팅</label></td>
        </tr>
        <tr>
            <td>9)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_9" value="국내 및 해외 공동사무소 설치"></td>
            <td><label for="q2_4_9">국내 및 해외 공동사무소 설치</label></td>

            <td>10)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_10" value="신기술 및 경영정보 제공"></td>
            <td><label for="q2_4_10">신기술 및 경영정보 제공</label></td>
        </tr>
        <tr>
            <td>11)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_11" value="기술이전 및 기술판매 지원"></td>
            <td><label for="q2_4_11">기술이전 및 기술판매 지원</label></td>

            <td>12)</td>
            <td><input type="checkbox" v-model="questions.q2_4" id="q2_4_12" value="시제품 제작지원"></td>
            <td><label for="q2_4_12">시제품 제작지원</label></td>
        </tr>
        <tr>
            <td>13)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_13" value="산학연 네트워킹 구축"></td>
            <td><label for="q2_4_13">산학연 네트워킹 구축</label></td>

            <td>14)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_14" value="창업보육"></td>
            <td><label for="q2_4_14">창업보육</label></td>
        </tr>
        <tr>
            <td>15)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_15" value="기업체 인력 재교육"></td>
            <td><label for="q2_4_15">기업체 인력 재교육</label></td>

            <td>16)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_16" value="원자재 및 부품 공동구매"></td>
            <td><label for="q2_4_16">원자재 및 부품 공동구매</label></td>
        </tr>
        <tr>
            <td>17)</td>
            <td><input type="checkbox"  v-model="questions.q2_4" id="q2_4_17" value="경영컨설팅"></td>
            <td><label for="q2_4_17">경영컨설팅</label></td>
        </tr>
        </tbody>
    </table>
    </div>
    <!-- SQ 3-->
    <div v-if="questions.q2_1 == '산학협력을 맺음(현장실습, 실습학기, 취업연계 약정 등)'">
    <p style="text-align: left;">
        <b>SQ3) </b>향후 연암대학교가 수행하게 될 산학협력의 단위사업으로 더 확대해야 할 분야는 무엇이라고 생각하십니까?
    </p>
    <table class="table table-bordered table-bordered">
        <tbody>
        <tr>
            <td>1)</td>
            <td><input type="checkbox"   v-model="questions.q2_5" id="q2_5_1" value="산업 육성을 위한 센터 구축"></td>
            <td><label for="q2_5_1">산업 육성을 위한 센터 구축</label></td>
            <td>2)</td>
            <td><input type="checkbox"   v-model="questions.q2_5" id="q2_5_2" value="시험 분석용 장비, 시제품 제작 장비 등 공동장비 구축"></td>
            <td><label for="q2_5_2">시험 분석용 장비, 시제품 제작 장비 등 공동장비 구축</label></td>
        </tr>
        <tr>
            <td>3)</td>
            <td><input type="checkbox"   v-model="questions.q2_5" id="q2_5_3" value="공동연구개발의 확대"></td>
            <td><label for="q2_5_3">공동연구개발의 확대</label></td>
            <td>4)</td>
            <td><input type="checkbox"  v-model="questions.q2_5" id="q2_5_4"  value="인력양성 사업의 확대"></td>
            <td><label for="q2_5_4">인력양성 사업의 확대</label></td>
        </tr>
        <tr>
            <td>5)</td>
            <td><input type="checkbox"   v-model="questions.q2_5" id="q2_5_5" value="현장애로기술 등 단기성 기술 지도"></td>
            <td><label for="q2_5_5">현장애로기술 등 단기성 기술 지도</label></td>
            <td>6)</td>
            <td><input type="checkbox"   v-model="questions.q2_5" id="q2_5_6" value="컨설팅, 회계 법률 등 경영지원"></td>
            <td><label for="q2_5_6">컨설팅, 회계 법률 등 경영지원</label></td>
        </tr>
        <tr>
            <td>7)</td>
            <td><input type="checkbox"  v-model="questions.q2_5" id="q2_5_7"  value="마케팅 지원"></td>
            <td><label for="q2_5_7">마케팅 지원</label></td>
            <td>8)</td>
            <td><input type="checkbox"  v-model="questions.q2_5" id="q2_5_8"  value="해외시장 개척 지원 및 정보 제공"></td>
            <td><label for="q2_5_8">해외시장 개척 지원 및 정보 제공</label></td>
        </tr>
        <tr>
            <td>9)</td>
            <td><input type="checkbox"   v-model="questions.q2_5" id="q2_5_9" value="산학연 네트워킹 활동 촉진"></td>
            <td><label for="q2_5_9">산학연 네트워킹 활동 촉진</label></td>
            <td>10)</td>
            <td><input type="checkbox"  v-model="questions.q2_5" id="q2_5_10"  value="기술, 시장 등에 대한 정보제공 서비스"></td>
            <td><label for="q2_5_10">기술, 시장 등에 대한 정보제공 서비스</label></td>
        </tr>
        <tr>
            <td>11)</td>
            <td><input type="checkbox"  v-model="questions.q2_5"  id="q2_5_11"  value="원자재 및 부품 공동 구매 추진"></td>
            <td><label for="q2_5_11">원자재 및 부품 공동 구매 추진</label></td>
            <td>12)</td>
            <td><input type="checkbox"  v-model="questions.q2_5" id="q2_5_12" value="기술이전 및 사업화 지원"></td>
            <td><label for="q2_5_12">기술이전 및 사업화 지원</label></td>
        </tr>
        <tr>
            <td>13)</td>
            <td>기타: </td>
            <td><input type="text" class="form-control" v-model="questions.q2_5_nemelt"  name="text"></td>
        </tr>
        </tbody>
    </table>
    </div>
    <!-- SQ 4-->
    <div v-if="questions.q2_1 == '산학협력을 맺음(현장실습, 실습학기, 취업연계 약정 등)'">
    <p style="text-align: left;">
        <b>SQ4) </b>귀사는 연암대학교 졸업생을 신입사원으로 채용한 경험이 있으십니까?
    </p>

    <table class="table table-responsive center">
        <thead class="thead-default">
            <td style="border-top: 1px solid #fff">
                <label>
                    <input type="radio"   v-model="questions.q2_6"  value="채용한 적이 있다.">
                    <div class="box4">
                        <span>1) 채용한 적이 있다.</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q2_6" value="채용한 적이 없다.">
                    <div class="box4">
                        <span>2) 채용한 적이 없다.</span>
                    </div>
                </label>
            </td>
    </table>
    </div>

    <!-- SQ5-->
    <div v-if="questions.q2_1 == '연암대학교 학생 근무 중' || questions.q2_6 == '채용한 적이 있다.'">
    <p style="text-align: left;">
        <b>SQ5) </b>연암대학교 학생을 채용한 적이 있다면, 그 이유는 무엇입니까?
    </p>

    <table class="table table-bordered table-responsive center">
        <tbody>
        <tr>
            <td>1)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_1" value="계열 및 전공 학과"></td>
            <td><label for="q2_7_1"> 계열 및 전공 학과</label></td>

            <td>2)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_2" value="지역 및 거주지"></td>
            <td><label for="q2_7_2"> 지역 및 거주지</label></td>
        </tr>
        <tr>
            <td>3)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_3" value="현장실습 및 설계 프로젝트 수행경험"></td>
            <td><label for="q2_7_3"> 현장실습 및 설계 프로젝트 수행경험</label></td>

            <td>4)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_4" value="인성 및 자질"></td>
            <td><label for="q2_7_4"> 인성 및 자질</label></td>
        </tr>
        <tr>
            <td>5)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_5" value="면접태도"></td>
            <td><label for="q2_7_5"> 면접태도</label></td>

            <td>6)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_6" value="자격증 보유여부"></td>
            <td><label for="q2_7_6"> 자격증 보유여부</label></td>
        </tr>
        <tr>
            <td>7)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_7" value="희망 연봉"></td>
            <td><label for="q2_7_7"> 희망 연봉</label></td>

            <td>8)</td>
            <td><input type="checkbox" v-model="questions.q2_7" id="q2_7_8" value="추천이나 소개 "></td>
            <td><label for="q2_7_8"> 추천이나 소개</label></td>
        </tr>
        <tr>
            <td>9)</td>
            <td><input type="checkbox"  v-model="questions.q2_7" id="q2_7_9" value="외국어능력"></td>
            <td><label for="q2_7_9"> 외국어능력</label></td>

            <td>10)</td>
            <td><input type="checkbox" v-model="questions.q2_7" id="q2_7_10" value="대학 성적"></td>
            <td><label for="q2_7_10"> 대학 성적</label></td>
        </tr>
        <tr>
            <td>11)</td>
            <td>기타: </td>
            <td colspan="4"><input type="text" class="form-control" v-model="questions.q2_7_nemelt" name="text"></td>
        </tr>
        </tbody>
    </table>
    </div>
    <!-- SQ5-1-->
    <div v-if="questions.q2_6 == '채용한 적이 없다.'">
    <p style="text-align: left;">
        <b>SQ5-1) </b>연암대학교 학생을 채용한 적이 없다면, 그 이유는 무엇입니까?
    </p>
    <table class="table table-bordered table-responsive center">
        <tbody>
        <tr>
            <td>1)</td>
            <td><input type="checkbox"  v-model="questions.q2_8" id="q2_8_1" value="계열 및 전공 학과가 맞지 않음"></td>
            <td><label for="q2_8_1">계열 및 전공 학과가 맞지 않음</label></td>

            <td>2)</td>
            <td><input type="checkbox"  v-model="questions.q2_8" id="q2_8_2" value="대학 성적 미달"></td>
            <td><label for="q2_8_2">대학 성적 미달</label></td>
        </tr>
        <tr>
            <td>3)</td>
            <td><input type="checkbox"   v-model="questions.q2_8" id="q2_8_3" value="현장실습 및 설계 프로젝트 수행경험 부족"></td>
            <td><label for="q2_8_3">현장실습 및 설계 프로젝트 수행경험 부족</label></td>

            <td>4)</td>
            <td><input type="checkbox"   v-model="questions.q2_8" id="q2_8_4" value="인성 및 자질 부족"></td>
            <td><label for="q2_8_4">인성 및 자질 부족</label></td>
        </tr>
        <tr>
            <td>5)</td>
            <td><input type="checkbox"   v-model="questions.q2_8" id="q2_8_5" value="면접태도 불량"></td>
            <td><label for="q2_8_5">면접태도 불량</label></td>

            <td>6)</td>
            <td><input type="checkbox"  v-model="questions.q2_8" id="q2_8_6" value="자격증 미보유"></td>
            <td><label for="q2_8_6">자격증 미보유</label></td>
        </tr>
        <tr>
            <td>7)</td>
            <td><input type="checkbox"  v-model="questions.q2_8" id="q2_8_7" value="외국어능력 미달"></td>
            <td><label for="q2_8_7">외국어능력 미달</label></td>

            <td>8)</td>
            <td>기타: </td>
            <td><input type="text" class="form-control" v-model="questions.q2_8_nemelt"  name="text"></td>
        </tr>
        </tbody>
    </table>
    </div>
</div>