
<div class="middle">
    <br>
    <p>3. 다음은 <b><u>조직문화에</b></u> 대한 만족도 수준을 묻는 문항입니다.</p>
        <div class="card-body">
            <!-- Question 3.3.1 -->
            <p>
                1) 대학 구성원들 간의 의사소통은 원활하게 이루어지고 있다.
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
                        <input type="radio"  v-model="questions.q3_3_1" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_1"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_1"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_1"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_1"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>

            <!-- Question 3.3.2 -->
            <p>
                2) 대학 교육 경쟁력 강화를 위해 구성원들이 효율적으로 협력하고 있다.

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
                        <input type="radio"  v-model="questions.q3_3_2" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_2"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_2"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_2"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_2"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>

            <!-- Question 3.3.3 -->
            <p>
                3) 	대학의 핵심 성과 (대외평가 및 국고지원사업 등) 창출을 위한 동기부여가 충분히 이루어지고 있다.
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
                        <input type="radio"  v-model="questions.q3_3_3" value="1" />
                        <div class=" box">
                            <span>1</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_3"  value="2" />
                        <div class=" box">
                            <span>2</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_3"  value="3" />
                        <div class=" box">
                            <span>3</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_3"  value="4" />
                        <div class=" box">
                            <span>4</span>
                        </div>
                    </label>
                </td>
                <td class="tb-d">
                    <label>
                        <input type="radio"   v-model="questions.q3_3_3"  value="5" />
                        <div class=" box">
                            <span>5</span>
                        </div>
                    </label>
                </td>
                </tbody>

            </table>
        </div>
    <br>

    <p>3.1 대학의 조직문화 활성화를 위해 필요한 것은 무엇인지 간략하게 기술하십시오.</p>
    <textarea class="form-control" v-model="questions.q3_3_1_1" id="exampleFormControlTextarea1" rows="5"></textarea>

</div>